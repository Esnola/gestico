import {gsap} from 'gsap';

const gsapPageSelector = '[data-gsap-page]';
const gsapRevealSelector = '[data-gsap-reveal]';
const gsapStaggerSelector = '[data-gsap-stagger]';
const gsapStaggerItemSelector = '[data-gsap-stagger-item]';

export const initializeGsapAnimations = () => {
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        return;
    }

    const pageElements = document.querySelectorAll(gsapPageSelector);

    if (pageElements.length) {
        gsap.from(pageElements, {
            autoAlpha: 0,
            duration: 0.45,
            ease: 'power2.out',
            y: 8,
        });
    }

    const revealElements = document.querySelectorAll(gsapRevealSelector);

    if (revealElements.length) {
        gsap.from(revealElements, {
            autoAlpha: 0,
            duration: 0.75,
            ease: 'power3.out',
            stagger: 0.08,
            y: 24,
        });
    }

    document.querySelectorAll(gsapStaggerSelector).forEach((container) => {
        const items = container.querySelectorAll(gsapStaggerItemSelector);

        if (!items.length) {
            return;
        }

        gsap.from(items, {
            autoAlpha: 0,
            duration: 0.65,
            ease: 'power3.out',
            stagger: 0.09,
            y: 18,
        });
    });
};
