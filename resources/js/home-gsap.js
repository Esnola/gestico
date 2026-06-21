import {gsap} from 'gsap';
import {initializeInicioCardSvgAnimations} from './home-svg.js';

const typewriterSelector = '[data-typewriter]';
const inicioCardSelector = '[data-card-inicio]';
const homeCardSelector = '[data-home-card]';
const metodoCardSelector = '[data-metodo-card]';
const clientesCardSelector = '[data-clientes-card]';

const splitIntoGraphemes = (text) => {
    if ('Segmenter' in Intl) {
        return [...new Intl.Segmenter('es', {granularity: 'grapheme'}).segment(text)].map((segment) => segment.segment);
    }

    return Array.from(text);
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

const initializeTypewriter = () => {
    const elements = gsap.utils.toArray(typewriterSelector);

    elements.forEach((element) => {
        const text = element.textContent.trim();

        if (!text) {
            return;
        }

        const characters = splitIntoGraphemes(text);
        const state = {
            visibleCharacters: 0,
        };
        const sizer = document.createElement('span');
        const writer = document.createElement('span');
        const writerText = document.createElement('span');
        const cursor = document.createElement('span');

        element.textContent = '';
        element.setAttribute('aria-label', text);
        element.style.position = 'relative';
        element.style.display = 'block';
        element.style.whiteSpace = 'pre-wrap';

        sizer.setAttribute('aria-hidden', 'true');
        sizer.textContent = text;
        sizer.style.display = 'block';
        sizer.style.visibility = 'hidden';
        sizer.style.whiteSpace = 'pre-wrap';

        writer.setAttribute('aria-hidden', 'true');
        writer.style.position = 'absolute';
        writer.style.inset = '0';
        writer.style.display = 'block';
        writer.style.whiteSpace = 'pre-wrap';

        cursor.setAttribute('aria-hidden', 'true');
        cursor.textContent = '|';
        cursor.style.display = 'inline-block';
        cursor.style.marginLeft = '0.08em';

        writer.append(writerText, cursor);
        element.append(sizer, writer);

        gsap.timeline({delay: 0.18})
            .to(state, {
                duration: characters.length * 0.042,
                ease: `steps(${characters.length})`,
                visibleCharacters: characters.length,
                onUpdate: () => {
                    writerText.textContent = characters.slice(0, Math.round(state.visibleCharacters)).join('');
                },
            })
            .to(cursor, {
                autoAlpha: 0,
                duration: 0.42,
                ease: 'steps(1)',
                repeat: 5,
                yoyo: true,
            }, '+=0.12')
            .to(cursor, {
                autoAlpha: 0,
                duration: 0.18,
            });
    });
};

const initializeInicioCards = (onBeforeComplete) => {
    const cards = gsap.utils.toArray(inicioCardSelector);

    if (!cards.length) {
        return Promise.resolve();
    }

    const getViewportCrossingOffset = (card, index) => {
        const direction = index % 2 === 0 ? 1 : -1;

        return direction * (window.innerWidth + card.getBoundingClientRect().width);
    };

    gsap.set(cards, {
        x: (index, card) => getViewportCrossingOffset(card, index),
    });

    const trigger = cards[0].parentElement ?? cards[0];

    return new Promise((resolve) => {
        const animateCards = () => {
            const timeline = gsap.timeline({
                ease: 'power4.out',
                onComplete: resolve,
            });

            timeline.to(cards, {
                autoAlpha: 1,
                duration: 1.8,
                stagger: 0.16,
                x: 0,
            });

            if (typeof onBeforeComplete === 'function') {
                timeline.call(onBeforeComplete, undefined, '>-1');
            }
        };

        if (!('IntersectionObserver' in window)) {
            const timeline = gsap.timeline({
                ease: 'power4.out',
                onComplete: resolve,
            });

            timeline.to(cards, {
                autoAlpha: 1,
                duration: 0.95,
                stagger: 0.16,
                x: 0,
            });

            if (typeof onBeforeComplete === 'function') {
                timeline.call(onBeforeComplete, undefined, '>-1');
            }

            return;
        }

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) {
                    return;
                }

                observer.unobserve(entry.target);
                animateCards();
            });
        }, {
            rootMargin: '0px 0px -12% 0px',
            threshold: 0.2,
        });

        observer.observe(trigger);
    });
};

const initializeHomeContentCards = () => {
    const cards = gsap.utils.toArray(homeCardSelector);
    const headings = cards.map((card) => card.querySelector('h3')).filter(Boolean);

    const resetCards = () => {
        gsap.killTweensOf([...cards, ...headings]);
        gsap.set([...cards, ...headings], {
            clearProps: 'textShadow',
        });
        gsap.set(cards, {
            autoAlpha: 0,
            clipPath: 'inset(18% 10% 18% 10% round 0.75rem)',
            filter: 'blur(8px) saturate(0.75)',
            rotation: (index) => (index % 2 === 0 ? -4 : 4),
            scale: 0.9,
            y: 58,
        });
        gsap.set(headings, {
            textShadow: 'none',
            y: 12,
        });
    };

    animateGroupWhenVisible(cards, () => {
        const timeline = gsap.timeline({
            onComplete: () => {
                gsap.set(cards, {
                    clearProps: 'all',
                });
            },
        });

        timeline.to(cards, {
            autoAlpha: 1,
            clipPath: 'inset(0% 0% 0% 0% round 0.75rem)',
            duration: 0.92,
            ease: 'back.out(1.45)',
            filter: 'blur(0px) saturate(1)',
            rotation: 0,
            scale: 1,
            stagger: {
                amount: 0.34,
                from: 'center',
            },
            y: 0,
        });

        timeline.to(headings, {
            duration: 0.7,
            ease: 'power3.out',
            stagger: 0.08,
            textShadow: '0 0 18px rgb(212 168 36 / 0.45)',
            y: 0,
        }, 0);
    }, resetCards);
};

const initializeMetodoCards = () => {
    const cards = gsap.utils.toArray(metodoCardSelector);
    const steps = cards.map((card) => card.querySelector('p')).filter(Boolean);

    const resetCards = () => {
        gsap.killTweensOf([...cards, ...steps]);
        gsap.set(cards, {
            clearProps: 'borderColor,boxShadow',
        });
        gsap.set(steps, {
            clearProps: 'textShadow',
        });
        gsap.set(cards, {
            autoAlpha: 0,
            boxShadow: 'none',
            rotationX: 12,
            rotationY: (index) => (index % 2 === 0 ? -24 : 24),
            scale: 0.82,
            transformPerspective: 900,
            x: (index) => (index - 1) * 64,
            y: 44,
        });
        gsap.set(steps, {
            scale: 2.2,
            textShadow: 'none',
            y: -18,
        });
    };

    animateGroupWhenVisible(cards, () => {
        const timeline = gsap.timeline({
            defaults: {
                ease: 'expo.out',
            },
        });

        timeline
            .to(cards, {
                autoAlpha: 1,
                duration: 1,
                rotationX: 0,
                rotationY: 0,
                scale: 1,
                stagger: 0.14,
                x: 0,
                y: 0,
            })
            .to(steps, {
                duration: 0.58,
                ease: 'back.out(2.6)',
                scale: 1,
                stagger: 0.12,
                textShadow: '0 0 24px rgb(212 168 36 / 0.65)',
                y: 0,
            }, 0.2)
            .to(cards, {
                borderColor: 'rgb(212 168 36 / 0.5)',
                boxShadow: '0 18px 46px rgb(0 0 0 / 0.18)',
                duration: 0.55,
                stagger: 0.1,
            }, 0.32);
    }, resetCards);
};

const initializeClientesCards = () => {
    const cards = gsap.utils.toArray(clientesCardSelector);
    const icons = cards.map((card) => card.querySelector('svg')).filter(Boolean);

    const resetCards = () => {
        gsap.killTweensOf([...cards, ...icons]);
        gsap.set(cards, {
            clearProps: 'backgroundColor,boxShadow',
        });
        gsap.set(cards, {
            autoAlpha: 0,
            boxShadow: 'none',
            filter: 'blur(7px)',
            scaleX: 0.88,
            transformOrigin: '0% 50%',
            x: (index) => (index % 2 === 0 ? -56 : 56),
        });
        gsap.set(icons, {
            rotation: -28,
            scale: 0,
        });
    };

    animateGroupWhenVisible(cards, () => {
        const timeline = gsap.timeline({
            defaults: {
                ease: 'power3.out',
            },
        });

        timeline
            .to(cards, {
                autoAlpha: 1,
                duration: 0.72,
                filter: 'blur(0px)',
                scaleX: 1,
                stagger: 0.09,
                x: 0,
            })
            .to(icons, {
                duration: 0.72,
                ease: 'elastic.out(1, 0.55)',
                rotation: 0,
                scale: 1,
                stagger: 0.08,
            }, 0.12)
            .to(cards, {
                backgroundColor: 'rgb(251 250 246 / 1)',
                boxShadow: '0 12px 28px rgb(67 89 93 / 0.12)',
                duration: 0.42,
                stagger: 0.07,
                yoyo: true,
                repeat: 1,
            }, 0.28);
    }, resetCards);
};

export const initializeHomeGsapAnimations = () => {
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        return;
    }

    initializeTypewriter();
    initializeInicioCards(() => {
        initializeInicioCardSvgAnimations();
    });
    initializeHomeContentCards();
    initializeMetodoCards();
    initializeClientesCards();
};

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initializeHomeGsapAnimations, {once: true});
} else {
    initializeHomeGsapAnimations();
}
