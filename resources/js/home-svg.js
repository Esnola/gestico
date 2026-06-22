import {gsap} from 'gsap';

const inicioCardSelector = '[data-card-inicio]';
const inicioCardShapeSelector = 'rect, circle, path, line, polyline, polygon';
const inicioCardDrawSelector = '[data-inicio-svg-draw]';
const inicioCardAccentSelector = '[data-inicio-svg-accent]';
const cardRevealDistance = '-100vw';
const cardRevealDuration = 1;
const cardRevealTriggerRatio = 0.7;

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

const animateGroupWhenVisible = (elements, animation) => {
    if (!elements.length) {
        return;
    }

    const trigger = elements[0].parentElement ?? elements[0];

    if (!('IntersectionObserver' in window)) {
        animation();

        return;
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) {
                return;
            }

            observer.unobserve(entry.target);
            animation();
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

    const cards = illustrations.map(({card}) => card);
    const svgs = illustrations.map(({svg}) => svg);
    const motionTargets = illustrations.flatMap(({motionTargets}) => motionTargets);
    const drawTargets = illustrations.flatMap(({drawTargets}) => drawTargets);
    const accentTargets = illustrations.flatMap(({accentTargets}) => accentTargets);
    const backgroundShapes = illustrations.map(({backgroundShape}) => backgroundShape).filter(Boolean);

    gsap.set(cards, {
        autoAlpha: 0,
        x: cardRevealDistance,
    });

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
    const cards = illustrations.map(({card}) => card);
    const motionTargets = illustrations.flatMap(({motionTargets}) => motionTargets);
    const drawTargets = illustrations.flatMap(({drawTargets}) => drawTargets);
    const accentTargets = illustrations.flatMap(({accentTargets}) => accentTargets);

    const animateIllustrations = () => {
        const timeline = gsap.timeline({
            defaults: {
                ease: 'power2.out',
            },
        });

        illustrations.forEach(({accentTargets: localAccentTargets, card, drawTargets: localDrawTargets, motionTargets: localMotionTargets, svg}, index) => {
            const offset = index * 0.14;
            const idleOffset = index % 2 === 0 ? -4 : 4;
            const svgRevealOffset = offset + (cardRevealDuration * cardRevealTriggerRatio);
            const revealTargets = gsap.utils.shuffle([...localMotionTargets, ...localDrawTargets, ...localAccentTargets]);

            timeline
                .to(card, {
                    autoAlpha: 1,
                    duration: cardRevealDuration,
                    ease: 'none',
                    x: 0,
                }, offset)
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
                }, svgRevealOffset)
                .to(localDrawTargets, {
                    duration: 0.88,
                    ease: 'power2.out',
                    stagger: {
                        amount: 0.75,
                        from: 'random',
                    },
                    strokeDashoffset: 0,
                }, svgRevealOffset + 0.1)
                .add(() => {
                    if (!localAccentTargets.length) {
                        return;
                    }

                    gsap.to(localAccentTargets, {
                        duration: 0.58,
                        ease: 'power2.out',
                        rotate: 0,
                        scale: 1,
                        stagger: {
                            amount: 0.24,
                            from: 'random',
                        },
                        transformOrigin: '50% 50%',
                        y: 0,
                    });
                }, svgRevealOffset + 0.34)
                .add(() => {
                    gsap.to(svg, {
                        duration: 0.9,
                        ease: 'sine.inOut',
                        y: idleOffset,
                    });
                }, svgRevealOffset + 0.4);
        });
    };

    animateGroupWhenVisible(illustrations.map(({card}) => card), () => {
        gsap.killTweensOf([...cards, ...svgs, ...motionTargets, ...drawTargets, ...accentTargets]);
        animateIllustrations();
    });
};

if (typeof document !== 'undefined' && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    hideInicioCardSvgs();
}
