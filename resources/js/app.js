import {initializeCookieConsent} from './cookies.js';
import {initializeGsapAnimations} from './gsap.js';
import {initializeMobileMenu} from './menu.js';
import {initializeProtection} from './protection.js';
import {initializeTheme, initializeThemeToggle} from './theme.js';
import './text.js'

initializeTheme();

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
        initializeThemeToggle();
        initializeMobileMenu();
        initializeCookieConsent();
        initializeProtection();
        initializeGsapAnimations();
    }, {once: true});
} else {
    initializeThemeToggle();
    initializeMobileMenu();
    initializeCookieConsent();
    initializeProtection();
    initializeGsapAnimations();
}
