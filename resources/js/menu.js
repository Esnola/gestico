const mobileMenuSelector = '[data-mobile-menu]';
const mobileMenuOpenSelector = '[data-mobile-menu-open]';
const mobileMenuCloseSelector = '[data-mobile-menu-close]';
export const initializeMobileMenu = () => {
    const menu = document.querySelector(mobileMenuSelector);
    const openButton = document.querySelector(mobileMenuOpenSelector);
    const panel = menu ? menu.querySelector('[data-mobile-menu-panel]') : undefined;

    if (!menu || !openButton || !panel ) {
        return;
    }

    const closeButtons = menu.querySelectorAll(mobileMenuCloseSelector);
    const menuLinks = menu.querySelectorAll('a');
    let closeTimeout;

    const closeMenu = () => {
        window.clearTimeout(closeTimeout);
        openButton.setAttribute('aria-expanded', 'false');
        document.body.classList.remove('overflow-hidden');
        panel.classList.add('-translate-x-full');

        closeTimeout = window.setTimeout(() => {
            menu.hidden = true;
        }, 300);
    };

    const openMenu = () => {
        window.clearTimeout(closeTimeout);
        menu.hidden = false;
        openButton.setAttribute('aria-expanded', 'true');
        document.body.classList.add('overflow-hidden');

        window.requestAnimationFrame(() => {
            panel.classList.remove('-translate-x-full');
            menu.querySelector(mobileMenuCloseSelector)?.focus();
        });
    };

    openButton.addEventListener('click', openMenu);

    closeButtons.forEach((button) => {
        button.addEventListener('click', closeMenu);
    });

    menuLinks.forEach((link) => {
        link.addEventListener('click', closeMenu);
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && !menu.hidden) {
            closeMenu();
            openButton.focus();
        }
    });
};
