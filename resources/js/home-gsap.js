import {gsap} from 'gsap';
import {initializeInicioCardSvgAnimations} from './home-svg.js';

const typewriterSelector = '[data-typewriter]';
const inicioCardSelector = '[data-card-inicio]';
const revealGroupSelector = '[data-gsap-stagger]';
const revealItemSelector = '[data-gsap-stagger-item]';
const emphasisIconSelector = '[data-gsap-card-emphasis-icon]';
const emphasisNumberSelector = '[data-gsap-card-emphasis-number]';

const randomSignedDistance = (minimum, maximum) => {
    const distance = gsap.utils.random(minimum, maximum);

    return gsap.utils.random([distance, -distance]);
};

const splitIntoGraphemes = (text) => {
    if ('Segmenter' in Intl) {
        return [...new Intl.Segmenter('es', {granularity: 'grapheme'}).segment(text)].map((segment) => segment.segment);
    }

    return Array.from(text);
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

const initializeCardScrollReveal = () => {
    const groups = gsap.utils.toArray(revealGroupSelector);

    if (!groups.length) {
        return;
    }

    const items = groups.flatMap((group) => {
        return gsap.utils.toArray(group.querySelectorAll(revealItemSelector));
    });
    const emphasisIcons = groups.flatMap((group) => {
        return gsap.utils.toArray(group.querySelectorAll(emphasisIconSelector));
    });
    const emphasisNumbers = groups.flatMap((group) => {
        return gsap.utils.toArray(group.querySelectorAll(emphasisNumberSelector));
    });

    if (!items.length) {
        return;
    }

    gsap.set(items, {
        autoAlpha: 0,
        y: 24,
    });

    if (emphasisIcons.length) {
        gsap.set(emphasisIcons, {
            autoAlpha: 0,
            x: () => randomSignedDistance(28, 52),
            y: () => randomSignedDistance(28, 52),
        });
    }

    if (emphasisNumbers.length) {
        gsap.set(emphasisNumbers, {
            autoAlpha: 0,
            x: () => randomSignedDistance(96, 156),
            y: () => randomSignedDistance(96, 156),
        });
    }

    const revealCardEmphasis = (group) => {
        const groupEmphasisIcons = gsap.utils.toArray(group.querySelectorAll(emphasisIconSelector));
        const groupEmphasisNumbers = gsap.utils.toArray(group.querySelectorAll(emphasisNumberSelector));

        if (!groupEmphasisIcons.length && !groupEmphasisNumbers.length) {
            return;
        }

        const timeline = gsap.timeline();

        if (groupEmphasisNumbers.length) {
            timeline.to(groupEmphasisNumbers, {
                autoAlpha: 1,
                duration: 0.6,
                ease: 'power2.out',
                stagger: {
                    amount: 0.18,
                    from: 'random',
                },
                x: 0,
                y: 0,
            });
        }

        if (groupEmphasisIcons.length) {
            timeline.to(groupEmphasisIcons, {
                autoAlpha: 1,
                duration: 0.5,
                ease: 'power2.out',
                stagger: {
                    amount: 0.12,
                    from: 'random',
                },
                x: 0,
                y: 0,
            }, groupEmphasisNumbers.length ? '>-0.16' : 0);
        }
    };

    const revealGroup = (group) => {
        const groupItems = gsap.utils.toArray(group.querySelectorAll(revealItemSelector));

        if (!groupItems.length) {
            return;
        }

        const timeline = gsap.timeline();

        groupItems.forEach((card, index) => {
            const cardOffset = index * 0.14;

            timeline.to(card, {
                autoAlpha: 1,
                duration: 0.75,
                ease: 'power3.out',
                y: 0,
            }, cardOffset);

            timeline.add(() => {
                revealCardEmphasis(card);
            }, cardOffset + 0.75);
        });
    };

    if (!('IntersectionObserver' in window)) {
        groups.forEach((group) => {
            revealGroup(group);
        });

        return;
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) {
                return;
            }

            observer.unobserve(entry.target);

            revealGroup(entry.target);
        });
    }, {
        rootMargin: '0px 0px -20% 0px',
        threshold: 0.18,
    });

    groups.forEach((group) => {
        observer.observe(group);
    });
};

export const initializeHomeGsapAnimations = () => {
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        return;
    }

    initializeTypewriter();
    initializeCardScrollReveal();
    initializeInicioCardSvgAnimations();
};

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initializeHomeGsapAnimations, {once: true});
} else {
    initializeHomeGsapAnimations();
}
