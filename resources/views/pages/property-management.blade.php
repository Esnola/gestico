<x-layouts.public title="Administración de fincas">
    <section class="bg-brand-ink-panel py-16 text-white dark:bg-brand-night sm:py-20">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <p class="text-sm font-normal uppercase tracking-[0.04em] text-brand-gold-bright dark:text-brand-night-gold">Administración de fincas</p>
            <h1 class="mt-4 max-w-4xl font-gestico-serif text-4xl font-semibold leading-tight sm:text-5xl">Acompañamos a presidentes y juntas con gestión diaria, criterio y documentación preparada.</h1>
            <p class="mt-6 max-w-3xl text-lg leading-8 text-brand-frost">Una comunidad funciona mejor cuando cada acuerdo tiene seguimiento, cada incidencia tiene responsable y cada euro está explicado.</p>
        </div>
    </section>

    <section class="bg-brand-cream py-16 dark:bg-brand-night-panel">
        <div class="mx-auto grid max-w-7xl gap-8 px-5 sm:px-6 lg:grid-cols-[.9fr_1.1fr] lg:px-8">
            <div>
                <h2 class="font-gestico-serif text-3xl font-semibold text-brand-ink dark:text-brand-night-text">Gestión ordinaria y extraordinaria</h2>
                <p class="mt-5 leading-8 text-brand-text-muted dark:text-brand-night-muted">Nos encargamos del ciclo completo de administración: preparación de juntas, ejecución de acuerdos, atención a consultas, control de proveedores, reclamación de cuotas y seguimiento de incidencias.</p>
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                @foreach (['Juntas y actas', 'Mantenimiento', 'Seguros y siniestros', 'Morosidad', 'Contratos', 'Obras y derramas'] as $item)
                    <div class="rounded-md border border-brand-border bg-white p-5 font-gestico-serif text-xl font-semibold text-brand-text-strong dark:border-brand-night-border dark:bg-brand-night-raised dark:text-brand-night-text">{{ $item }}</div>
                @endforeach
            </div>
        </div>
    </section>
</x-layouts.public>
