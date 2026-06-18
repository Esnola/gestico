<div data-cookie-consent-banner
     data-cookie-consent-key="gestico_cookie_consent"
     data-cookie-consent-delay="300"
     hidden
     class="fixed bottom-0 right-0 z-50 h-auto w-full translate-y-full transition-transform duration-300 ease-out sm:w-104 sm:px-5 sm:pb-5 lg:w-full"
     role="region"
     aria-label="Consentimiento de cookies">
    <div class="mx-auto flex h-full w-full max-w-4xl flex-col items-center justify-between border-t bg-white p-6 shadow-lg dark:border-gray-700 dark:bg-gray-900 sm:rounded-xl sm:border-0 lg:flex-row lg:p-8">
        <div class="flex h-full flex-col items-start pb-6 text-xs text-neutral-600 dark:text-gray-300 lg:flex-row lg:items-center lg:gap-5 lg:pb-0 lg:pr-6">
            <img src="{{ asset('images/cookie.png') }}"
                 alt=""
                 class="h-8 w-8 sm:h-12 sm:w-12 lg:h-16 lg:w-16">
            <div class="pt-6 lg:pt-0">
                <h4 class="mb-1 w-full -translate-y-1 text-xl font-bold leading-none text-neutral-900 dark:text-white">Aviso de Cookies</h4>
                <p>Utilizamos Cookies para hacer la navegación por la página mas fluida y agradable. <span class="hidden lg:inline">Al seguir navegando, nos das tu consentimiento para ofrecerte una experiencia personalizada.</span></p>
            </div>
        </div>
        <div class="flex w-full items-end justify-end gap-3 pl-3 lg:w-auto lg:shrink-0">
            <button type="button"
                    data-cookie-consent-deny
                    class="inline-flex w-1/2 shrink-0 cursor-pointer items-center justify-center rounded-md border-2 border-neutral-950 bg-white px-4 py-2 text-sm font-medium tracking-wide text-neutral-600 transition-colors duration-200 hover:text-neutral-700 focus:outline-none focus:ring-2 focus:ring-neutral-900 focus:ring-offset-2 dark:border-gray-500 dark:bg-gray-900 dark:text-gray-200 dark:hover:text-white lg:w-auto">
                Denegar Todo
            </button>
            <button type="button"
                    data-cookie-consent-accept
                    class="inline-flex w-1/2 shrink-0 cursor-pointer items-center justify-center rounded-md border-2 border-neutral-950 bg-neutral-950 px-4 py-2 text-sm font-medium tracking-wide text-white transition-colors duration-200 hover:bg-neutral-900 focus:outline-none focus:ring-2 focus:ring-neutral-900 focus:ring-offset-2 lg:w-auto">
                Aceptar Todo
            </button>
        </div>
    </div>
</div>
