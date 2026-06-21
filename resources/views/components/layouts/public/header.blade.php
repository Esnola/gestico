<header class="sticky top-0 z-50 border-b border-white/50 bg-white/55 shadow-sm shadow-black/5 backdrop-blur-sm dark:border-white/10 dark:bg-brand-night-panel/55 dark:shadow-black/20">
    <div class="mx-auto flex max-w-7xl items-center justify-between gap-4 px-4 py-3 sm:px-6 lg:px-8">
        <a href="{{ route('home') }}" class="flex items-center gap-3" aria-label="Gestico Barbanza">
            <img src="{{ asset('images/gesticobarbanza.png') }}" alt="Gestico Barbanza"
                 width="600" height="258" decoding="async" fetchpriority="high"
                 class="h-11 w-auto rounded-md px-2 py-1 dark:bg-transparent sm:h-14">
        </a>
        <x-main-links :isfooter="false"/>

        <div class="flex items-center gap-2">
            <x-mobile-menu-button
                action="open"
                aria-controls="mobile-menu"
                aria-expanded="false"/>
            <x-toggle-theme :ismobile="false" />
        </div>
    </div>

    <div id="mobile-menu"
         data-mobile-menu
         class="fixed inset-0 z-60 lg:hidden"
         role="dialog"
         aria-modal="true"
         aria-labelledby="mobile-menu-title"
         hidden>
        <div data-mobile-menu-panel
             class="absolute inset-y-0 left-0 z-10 flex min-h-dvh w-full -translate-x-full flex-col border-r border-brand-border bg-brand-surface shadow-2xl transition-transform duration-300 ease-out dark:border-brand-night-border dark:bg-brand-night-panel">
            <div class="flex items-center justify-between px-5 py-5">
                <p id="mobile-menu-title"
                   class="font-gestico-serif text-2xl font-semibold text-brand-ink dark:text-brand-night-text">Menú</p>
                <x-mobile-menu-button action="close"/>
            </div>
            <x-main-links variant="mobile" aria-label="Menú principal móvil"/>

            <x-toggle-theme :ismobile="true" />
        </div>
    </div>
</header>
