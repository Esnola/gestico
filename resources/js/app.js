import {initializeCookieConsent} from './cookies.js';
import {initializeMobileMenu} from './menu.js';
import {initializeProtection} from './email-form.js';
import {initializeTheme, initializeThemeToggle} from './theme.js';

initializeTheme();

const initializeInteractiveFeatures = () => {
    initializeThemeToggle();
    initializeMobileMenu();
    initializeCookieConsent();
    initializeProtection();
};

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initializeInteractiveFeatures, {once: true});
} else {
    initializeInteractiveFeatures();
}
