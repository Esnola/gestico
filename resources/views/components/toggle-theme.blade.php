
<button type="button"
        data-theme-toggle
        class="{{$ismobile ? 'inline-flex' : 'hidden lg:inline-flex'}}  h-5.5 w-10 shrink-0 cursor-pointer items-center rounded-full border border-brand-gold-border/35 bg-white/70 px-1 text-brand-gold-text shadow-sm shadow-black/5 transition hover:border-brand-gold-border hover:bg-white dark:border-brand-night-border dark:bg-brand-night-raised dark:text-brand-night-gold dark:hover:border-brand-night-gold dark:hover:bg-brand-night-surface"
        aria-label="Cambiar modo oscuro"
        aria-pressed="false">
                <span class="flex size-5 translate-x-0 items-center justify-center rounded-full bg-brand-surface text-brand-gold shadow-sm shadow-black/10 transition-transform duration-300 ease-out dark:translate-x-3 dark:bg-brand-night-surface dark:text-brand-night-gold">
                    <svg class="size-4 dark:hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                         aria-hidden="true">
                        <path d="M12 4V2m0 20v-2m8-8h2M2 12h2m13.66-5.66 1.42-1.42M4.92 19.08l1.42-1.42m0-11.32L4.92 4.92m14.16 14.16-1.42-1.42"
                              stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                        <circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="1.8"/>
                    </svg>
                    <svg class="hidden size-4.5 bg-black rounded-full dark:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                         aria-hidden="true">
                        <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"
                              fill="currentColor"/>
                    </svg>
                </span>
</button>
