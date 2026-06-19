const cookieConsentSelector = '[data-cookie-consent-banner]';

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

export const initializeCookieConsent = () => {
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
