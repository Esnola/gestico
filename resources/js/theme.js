const fluxThemeStorageKey = 'flux.appearance';
const themeStorageKey = 'theme';
const themeToggleSelector = '[data-theme-toggle]';
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

export const initializeTheme = () => {
    const theme = applyTheme(storedTheme());

    saveTheme(theme);
};

export const initializeThemeToggle = () => {
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
