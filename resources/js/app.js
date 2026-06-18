const fluxThemeStorageKey = 'flux.appearance';
const themeStorageKey = 'theme';
const themeToggleSelector = '[data-theme-toggle]';
const mobileMenuSelector = '[data-mobile-menu]';
const mobileMenuOpenSelector = '[data-mobile-menu-open]';
const mobileMenuCloseSelector = '[data-mobile-menu-close]';
const validThemes = ['light', 'dark'];

const storedTheme = () => {
    try {
        return window.localStorage.getItem(fluxThemeStorageKey) ?? window.localStorage.getItem(themeStorageKey);
    } catch {
        return null;
    }
};

const saveTheme = (theme) => {
    try {
        window.localStorage.setItem(fluxThemeStorageKey, theme);
        window.localStorage.setItem(themeStorageKey, theme);
    } catch {
        //
    }
};

const normalizeTheme = (theme) => validThemes.includes(theme) ? theme : 'light';

const applyTheme = (theme) => {
    const normalizedTheme = normalizeTheme(theme);

    document.documentElement.classList.toggle('dark', normalizedTheme === 'dark');
    document.documentElement.dataset.theme = normalizedTheme;

    return normalizedTheme;
};

const initializeTheme = () => {
    const theme = applyTheme(storedTheme());

    saveTheme(theme);
};

const initializeThemeToggle = () => {
    const toggles = document.querySelectorAll(themeToggleSelector);

    toggles.forEach((toggle) => {
        const syncToggle = (theme) => {
            toggle.setAttribute('aria-pressed', theme === 'dark' ? 'true' : 'false');
        };

        syncToggle(normalizeTheme(storedTheme()));

        toggle.addEventListener('click', () => {
            const nextTheme = document.documentElement.classList.contains('dark') ? 'light' : 'dark';

            saveTheme(nextTheme);
            syncToggle(applyTheme(nextTheme));
        });
    });
};

const initializeMobileMenu = () => {
    const menu = document.querySelector(mobileMenuSelector);
    const openButton = document.querySelector(mobileMenuOpenSelector);
    const panel = menu?.querySelector('[data-mobile-menu-panel]');

    if (!menu || !openButton || !panel) {
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

initializeTheme();

const cookieConsentSelector = '[data-cookie-consent-banner]';
const protectedEmailSelector = '[data-protected-email]';
const contactFormSelector = '[data-contact-form]';
const minimumContactFormAge = 2500;

const reverse = (value) => value.split('').reverse().join('');

const decodeProtectedEmail = (payload) => {
    try {
        const [encodedUser, encodedDomain] = window.atob(payload).split('|');

        if (!encodedUser || !encodedDomain) {
            return null;
        }

        return `${reverse(encodedUser)}@${reverse(encodedDomain)}`;
    } catch {
        return null;
    }
};

const initializeProtectedEmailLinks = () => {
    document.querySelectorAll(protectedEmailSelector).forEach((link) => {
        const email = decodeProtectedEmail(link.dataset.protectedEmail ?? '');

        if (!email) {
            return;
        }

        link.href = `mailto:${email}`;

        link.querySelector('[data-protected-email-label]')?.replaceChildren(email);
    });
};

const showContactFormStatus = (form, message) => {
    const status = form.querySelector('[data-contact-form-status]');

    if (!status) {
        return;
    }

    status.textContent = message;
    status.classList.remove('hidden');
};

const initializeContactForms = () => {
    document.querySelectorAll(contactFormSelector).forEach((form) => {
        const startedAt = Date.now();

        form.addEventListener('submit', (event) => {
            event.preventDefault();

            const recipient = decodeProtectedEmail(form.dataset.contactRecipient ?? '');
            const formData = new FormData(form);
            const honeypot = String(formData.get('website') ?? '').trim();

            if (honeypot !== '' || Date.now() - startedAt < minimumContactFormAge || !recipient) {
                showContactFormStatus(form, 'No hemos podido preparar el mensaje. Escríbenos desde el enlace de email.');

                return;
            }

            const name = String(formData.get('name') ?? '').trim();
            const email = String(formData.get('email') ?? '').trim();
            const message = String(formData.get('message') ?? '').trim();
            const subject = encodeURIComponent(`Consulta desde la web de ${name || 'Gestico Barbanza'}`);
            const body = encodeURIComponent([
                `Nombre: ${name}`,
                `Email: ${email}`,
                '',
                message,
            ].join('\n'));

            window.location.href = `mailto:${recipient}?subject=${subject}&body=${body}`;
        });
    });
};

const getStoredCookieConsent = (storageKey) => {
    try {
        const localConsent = window.localStorage.getItem(storageKey);

        if (localConsent !== null) {
            return localConsent;
        }
    } catch {
        //
    }

    return document.cookie
        .split('; ')
        .find((cookie) => cookie.startsWith(`${storageKey}=`))
        ?.split('=')[1] ?? null;
};

const rememberCookieConsent = (storageKey, value) => {
    try {
        window.localStorage.setItem(storageKey, value);
    } catch {
        //
    }

    const cookieParts = [
        `${storageKey}=${encodeURIComponent(value)}`,
        'Path=/',
        'Max-Age=31536000',
        'SameSite=Lax',
    ];

    if (window.location.protocol === 'https:') {
        cookieParts.push('Secure');
    }

    document.cookie = cookieParts.join('; ');
};

const hideCookieConsentBanner = (banner) => {
    banner.classList.add('translate-y-full');

    banner.addEventListener('transitionend', () => {
        banner.hidden = true;
    }, { once: true });
};

const showCookieConsentBanner = (banner) => {
    banner.hidden = false;

    window.requestAnimationFrame(() => {
        banner.classList.remove('translate-y-full');
    });
};

const initializeCookieConsent = () => {
    const banner = document.querySelector(cookieConsentSelector);

    if (!banner) {
        return;
    }

    const storageKey = banner.dataset.cookieConsentKey;

    if (!storageKey || getStoredCookieConsent(storageKey) !== null) {
        return;
    }

    const remember = (value) => {
        rememberCookieConsent(storageKey, value);
        hideCookieConsentBanner(banner);
    };

    banner.querySelector('[data-cookie-consent-accept]')?.addEventListener('click', () => {
        remember('accepted');
    });

    banner.querySelector('[data-cookie-consent-deny]')?.addEventListener('click', () => {
        remember('denied');
    });

    window.setTimeout(() => {
        showCookieConsentBanner(banner);
    }, Number(banner.dataset.cookieConsentDelay ?? 300));
};

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
        initializeThemeToggle();
        initializeMobileMenu();
        initializeCookieConsent();
        initializeProtectedEmailLinks();
        initializeContactForms();
    }, { once: true });
} else {
    initializeThemeToggle();
    initializeMobileMenu();
    initializeCookieConsent();
    initializeProtectedEmailLinks();
    initializeContactForms();
}
