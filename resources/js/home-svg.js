import {gsap} from 'gsap';

const inicioCardSelector = '[data-card-inicio]';
const inicioCardShapeSelector = 'rect, circle, path, line, polyline, polygon';
const inicioCardDrawSelector = '[data-inicio-svg-draw]';
const inicioCardAccentSelector = '[data-inicio-svg-accent]';

const getShapeLength = (shape) => {
    if (typeof shape.getTotalLength !== 'function') {
        return 0;
    }

    try {
        return shape.getTotalLength();
    } catch {
        return 0;
    }
};

const animateGroupWhenVisible = (elements, animation, reset) => {
    if (!elements.length) {
        return;
    }

    const trigger = elements[0].parentElement ?? elements[0];
    let isVisible = false;

    reset();

    if (!('IntersectionObserver' in window)) {
        animation();

        return;
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                if (isVisible) {
                    return;
                }

                isVisible = true;
                animation();

                return;
            }

            if (!isVisible) {
                return;
            }

            isVisible = false;
            reset();
        });
    }, {
        rootMargin: '0px 0px -14% 0px',
        threshold: 0.18,
    });

    observer.observe(trigger);
};

const getIllustrations = () => {
    return gsap.utils.toArray(inicioCardSelector)
        .map((card) => {
            const svg = card.querySelector('svg');

            if (!svg) {
                return null;
            }

            const shapes = gsap.utils.toArray(svg.querySelectorAll(inicioCardShapeSelector));
            const backgroundShape = shapes.find((shape) => shape.tagName.toLowerCase() === 'rect') ?? null;
            const drawTargets = gsap.utils.toArray(svg.querySelectorAll(inicioCardDrawSelector));
            const accentTargets = gsap.utils.toArray(svg.querySelectorAll(inicioCardAccentSelector));
            const motionTargets = shapes.filter((shape) => {
                return shape !== backgroundShape
                    && !drawTargets.includes(shape)
                    && !accentTargets.includes(shape);
            });

            if (!shapes.length) {
                return null;
            }

            return {
                card,
                accentTargets,
                backgroundShape,
                drawTargets,
                motionTargets,
                svg,
            };
        })
        .filter(Boolean);
};

export const hideInicioCardSvgs = () => {
    const illustrations = getIllustrations();

    if (!illustrations.length) {
        return;
    }

    const svgs = illustrations.map(({svg}) => svg);
    const motionTargets = illustrations.flatMap(({motionTargets}) => motionTargets);
    const drawTargets = illustrations.flatMap(({drawTargets}) => drawTargets);
    const accentTargets = illustrations.flatMap(({accentTargets}) => accentTargets);
    const backgroundShapes = illustrations.map(({backgroundShape}) => backgroundShape).filter(Boolean);

    gsap.set([...svgs, ...motionTargets, ...drawTargets, ...accentTargets], {
        autoAlpha: 0,
    });

    gsap.set(backgroundShapes, {
        autoAlpha: 1,
    });
};

export const initializeInicioCardSvgAnimations = () => {
    const illustrations = getIllustrations();

    if (!illustrations.length) {
        return;
    }

    const svgs = illustrations.map(({svg}) => svg);
    const motionTargets = illustrations.flatMap(({motionTargets}) => motionTargets);
    const drawTargets = illustrations.flatMap(({drawTargets}) => drawTargets);
    const accentTargets = illustrations.flatMap(({accentTargets}) => accentTargets);
    const backgroundShapes = illustrations.map(({backgroundShape}) => backgroundShape).filter(Boolean);

    const resetIllustrations = () => {
        gsap.killTweensOf([...svgs, ...motionTargets, ...drawTargets, ...accentTargets, ...backgroundShapes]);

        gsap.set(svgs, {
            autoAlpha: 0,
            rotate: (index) => (index % 2 === 0 ? -1.5 : 1.5),
            scale: 0.975,
            transformOrigin: '50% 50%',
            y: (index) => (index % 2 === 0 ? 8 : -8),
        });

        gsap.set(backgroundShapes, {
            autoAlpha: 1,
        });

        gsap.set(motionTargets, {
            autoAlpha: 0,
            scale: 0.94,
            y: 10,
        });

        gsap.set(drawTargets, {
            autoAlpha: 0,
            strokeDasharray: (index, target) => getShapeLength(target),
            strokeDashoffset: (index, target) => getShapeLength(target),
        });

        gsap.set(accentTargets, {
            autoAlpha: 0,
            scale: 0.82,
            transformOrigin: '50% 50%',
        });
    };

    const animateIllustrations = () => {
        const timeline = gsap.timeline({
            defaults: {
                ease: 'power2.out',
            },
        });

        illustrations.forEach(({accentTargets: localAccentTargets, drawTargets: localDrawTargets, motionTargets: localMotionTargets, svg}, index) => {
            const offset = index * 0.14;
            const idleOffset = index % 2 === 0 ? -4 : 4;
            const revealTargets = gsap.utils.shuffle([...localMotionTargets, ...localDrawTargets, ...localAccentTargets]);

            timeline
                .to(svg, {
                    autoAlpha: 1,
                    duration: 0.4,
                    rotate: 0,
                    scale: 1,
                    y: 0,
                }, offset)
                .to(revealTargets, {
                    autoAlpha: 1,
                    duration: 0.42,
                    ease: 'power2.out',
                    stagger: {
                        amount: 1.1,
                        from: 'random',
                    },
                    y: 0,
                }, offset + 0.08)
                .to(localDrawTargets, {
                    duration: 0.88,
                    ease: 'power2.out',
                    stagger: {
                        amount: 0.75,
                        from: 'random',
                    },
                    strokeDashoffset: 0,
                }, offset + 0.18)
                .add(() => {
                    if (!localAccentTargets.length) {
                        return;
                    }

                    gsap.to(localAccentTargets, {
                        duration: 2.8,
                        ease: 'sine.inOut',
                        repeat: -1,
                        rotate: (targetIndex) => (targetIndex % 2 === 0 ? -2 : 2),
                        scale: 1.015,
                        stagger: {
                            each: 0.12,
                            from: 'random',
                        },
                        transformOrigin: '50% 50%',
                        y: (targetIndex) => (targetIndex % 2 === 0 ? -2 : 2),
                        yoyo: true,
                    });
                }, offset + 0.42)
                .add(() => {
                    gsap.to(svg, {
                        duration: 4,
                        ease: 'sine.inOut',
                        repeat: -1,
                        y: idleOffset,
                        yoyo: true,
                    });
                }, offset + 0.48);
        });
    };

    animateGroupWhenVisible(illustrations.map(({card}) => card), animateIllustrations, resetIllustrations);
};

if (typeof document !== 'undefined') {
    hideInicioCardSvgs();
}
