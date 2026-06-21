import {initializeCookieConsent} from './cookies.js';
import {initializeMobileMenu} from './menu.js';
import {initializeProtection} from './email-form.js';
import {initializeTheme, initializeThemeToggle} from './theme.js';

initializeTheme();

const gsapAnimationSelectors = [
    '[data-gsap-page]',
    '[data-gsap-reveal]',
    '[data-gsap-stagger]',
];

const hasGsapAnimationTargets = () => gsapAnimationSelectors.some((selector) => document.querySelector(selector));

const runWhenBrowserIsIdle = (callback) => {
    if ('requestIdleCallback' in window) {
        window.requestIdleCallback(callback, {timeout: 1000});

        return;
    }

    window.setTimeout(callback, 1);
};

const initializeDeferredGsapAnimations = () => {
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches || !hasGsapAnimationTargets()) {
        return;
    }

    runWhenBrowserIsIdle(() => {
        import('./gsap.js').then(({initializeGsapAnimations}) => {
            initializeGsapAnimations();
        });
    });
};

const initializeInteractiveFeatures = () => {
    initializeThemeToggle();
    initializeMobileMenu();
    initializeCookieConsent();
    initializeProtection();
    initializeDeferredGsapAnimations();
};

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initializeInteractiveFeatures, {once: true});
} else {
    initializeInteractiveFeatures();
}
