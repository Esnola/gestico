<x-layouts.public title="Contacto">
    <section class="bg-brand-mist py-16 dark:bg-brand-night sm:py-20">
        <div class="mx-auto grid max-w-7xl gap-10 px-5 sm:px-6 lg:grid-cols-[.9fr_1.1fr] lg:px-8">
            <div>
                <p class="text-sm font-normal uppercase tracking-[0.04em] text-brand-gold dark:text-brand-night-gold">Contacto</p>
                <h1 class="mt-4 font-gestico-serif text-4xl font-semibold leading-tight text-brand-ink dark:text-brand-night-text sm:text-5xl">Cuéntanos qué necesita tu comunidad.</h1>
                <p class="mt-6 text-lg leading-8 text-brand-text-muted dark:text-brand-night-muted">Prepararemos una propuesta ajustada al tamaño de la comunidad, situación económica, volumen de incidencias y necesidades de asesoría.</p>
                <div class="mt-8 grid gap-3 text-sm font-normal text-brand-text dark:text-brand-night-muted">
                    <a href="mailto:{{ config('gestico.email') }}" class="rounded-md border border-brand-border bg-white p-4 hover:border-brand-gold dark:border-brand-night-border dark:bg-brand-night-raised dark:hover:border-brand-night-gold">{{ config('gestico.email') }}</a>
                    <a href="tel:{{ config('gestico.phone_href') }}" class="rounded-md border border-brand-border bg-white p-4 hover:border-brand-gold dark:border-brand-night-border dark:bg-brand-night-raised dark:hover:border-brand-night-gold">{{ config('gestico.phone') }}</a>
                    <span class="rounded-md border border-brand-border bg-white p-4 dark:border-brand-night-border dark:bg-brand-night-raised">{{ config('gestico.address_line_1') }} · {{ config('gestico.address_line_2') }}</span>
                </div>
            </div>
            <form class="rounded-lg border border-brand-border bg-white p-6 shadow-sm dark:border-brand-night-border dark:bg-brand-night-panel">
                <div class="grid gap-4">
                    <label class="grid gap-2 text-sm font-normal text-brand-text-strong dark:text-brand-night-text">Nombre
                        <input type="text" class="rounded-md border border-brand-border px-4 py-3 font-normal outline-none ring-brand-gold focus:ring-2 dark:border-brand-night-border dark:bg-brand-night-raised dark:text-brand-night-text">
                    </label>
                    <label class="grid gap-2 text-sm font-normal text-brand-text-strong dark:text-brand-night-text">Email
                        <input type="email" class="rounded-md border border-brand-border px-4 py-3 font-normal outline-none ring-brand-gold focus:ring-2 dark:border-brand-night-border dark:bg-brand-night-raised dark:text-brand-night-text">
                    </label>
                    <label class="grid gap-2 text-sm font-normal text-brand-text-strong dark:text-brand-night-text">Comunidad o consulta
                        <textarea rows="5" class="rounded-md border border-brand-border px-4 py-3 font-normal outline-none ring-brand-gold focus:ring-2 dark:border-brand-night-border dark:bg-brand-night-raised dark:text-brand-night-text"></textarea>
                    </label>
                    <button type="button" class="rounded-md bg-brand-gold px-5 py-3 text-sm font-normal text-white transition hover:bg-brand-gold-hover dark:bg-brand-night-gold dark:text-brand-night dark:hover:bg-brand-gold-bright">Enviar consulta</button>
                </div>
            </form>
        </div>
    </section>
</x-layouts.public>
