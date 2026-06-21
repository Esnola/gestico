import {gsap} from 'gsap';
import {initializeInicioCardSvgAnimations} from './home-svg.js';

const typewriterSelector = '[data-typewriter]';
const inicioCardSelector = '[data-card-inicio]';

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

export const initializeHomeGsapAnimations = () => {
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        return;
    }

    initializeTypewriter();
    initializeInicioCardSvgAnimations();
};

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initializeHomeGsapAnimations, {once: true});
} else {
    initializeHomeGsapAnimations();
}
