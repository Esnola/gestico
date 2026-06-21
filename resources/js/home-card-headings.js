const homeCardHeadingSelector = '[data-home-card] h3';
const minimumHomeCardHeadingFontSize = 12;

const fitSingleLineHomeCardHeadings = () => {
    const headings = [...document.querySelectorAll(homeCardHeadingSelector)];

    headings.forEach((heading) => {
        heading.style.fontSize = '';
        heading.style.minWidth = '0px';
        heading.style.whiteSpace = 'nowrap';

        const originalFontSize = Number.parseFloat(window.getComputedStyle(heading).fontSize);

        if (!originalFontSize || heading.scrollWidth <= heading.clientWidth) {
            return;
        }

        const targetFontSize = Math.max(
            minimumHomeCardHeadingFontSize,
            Math.floor((heading.clientWidth / heading.scrollWidth) * originalFontSize * 0.98),
        );

        heading.style.fontSize = `${targetFontSize}px`;
    });
};

export const initializeHomeCardHeadingFit = () => {
    fitSingleLineHomeCardHeadings();

    window.addEventListener('resize', () => {
        window.requestAnimationFrame(fitSingleLineHomeCardHeadings);
    });

    if (document.fonts) {
        document.fonts.ready.then(fitSingleLineHomeCardHeadings);
    }
};

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initializeHomeCardHeadingFit, {once: true});
} else {
    initializeHomeCardHeadingFit();
}
