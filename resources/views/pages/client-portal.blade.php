<x-layouts.public title="Área clientes">
    <section class="bg-brand-ink-panel py-16 text-white dark:bg-brand-night sm:py-20">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <p class="text-sm font-normal uppercase tracking-[0.04em] text-brand-gold-bright dark:text-brand-night-gold">Área clientes</p>
            <h1 class="mt-4 max-w-4xl font-gestico-serif text-4xl font-semibold leading-tight sm:text-5xl">La zona privada se construirá después; la web ya deja preparada la entrada.</h1>
            <p class="mt-6 max-w-3xl text-lg leading-7 text-brand-frost">Más adelante incorporaremos acceso seguro para consultar información de la comunidad. Por ahora mantenemos el frontend público y la estructura técnica lista.</p>
            <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                <a href="{{ route('login') }}" class="inline-flex justify-center rounded-md bg-brand-gold-bright px-6 py-3 text-sm font-normal text-brand-ink transition hover:bg-brand-gold-soft dark:bg-brand-night-gold dark:text-brand-night">Ir al acceso</a>
                <a href="{{ route('contact') }}" class="inline-flex justify-center rounded-md border border-white/25 px-6 py-3 text-sm font-normal text-white transition hover:bg-white/10">Consultar implantación</a>
            </div>
        </div>
    </section>

    <section class="bg-brand-cream py-16 dark:bg-brand-night-panel">
        <div class="mx-auto grid max-w-7xl gap-4 px-5 sm:px-6 md:grid-cols-2 lg:px-8">
            @foreach (['Documentación comunitaria', 'Estados de cuentas', 'Facturas y presupuestos', 'Avisos y comunicaciones'] as $item)
                <div class="rounded-lg border border-brand-border bg-white p-6 dark:border-brand-night-border dark:bg-brand-night-raised">
                    <h2 class="font-gestico-serif text-2xl font-semibold text-brand-ink-soft dark:text-brand-night-text">{{ $item }}</h2>
                    <p class="mt-3 leading-7 text-brand-text-card dark:text-brand-night-muted">Módulo previsto para la siguiente fase del proyecto, con permisos y acceso privado por cliente.</p>
                </div>
            @endforeach
        </div>
    </section>
</x-layouts.public>
