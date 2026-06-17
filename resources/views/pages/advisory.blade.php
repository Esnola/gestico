<x-layouts.public title="Asesoría económico-financiera, fiscal y laboral">
    <section class="bg-brand-mist py-16 sm:py-20">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <p class="text-sm font-normal uppercase tracking-[0.04em] text-brand-gold">Asesoría</p>
            <h1 class="mt-4 max-w-4xl font-gestico-serif text-4xl font-semibold leading-tight text-brand-ink sm:text-5xl">Cuentas, impuestos y obligaciones laborales bajo control.</h1>
            <p class="mt-6 max-w-3xl text-lg leading-8 text-brand-text-muted">La parte económica de una comunidad necesita precisión, calendario y explicaciones comprensibles. Integramos contabilidad, bancos, fiscalidad y gestión laboral en un mismo flujo.</p>
        </div>
    </section>

    <section class="bg-white py-16">
        <div class="mx-auto grid max-w-7xl gap-5 px-5 sm:px-6 lg:grid-cols-3 lg:px-8">
            @foreach ([
                ['Presupuestos e informes', 'Preparación de presupuestos, comparativas, desviaciones, cierres y estados de cuentas para junta y propietarios.'],
                ['Fiscalidad', 'Control de obligaciones tributarias, modelos aplicables y archivo de justificantes para la comunidad.'],
                ['Laboral', 'Gestión de nóminas, seguros sociales, contratos y documentación laboral vinculada a la comunidad.'],
            ] as [$title, $text])
                <article class="rounded-lg border border-brand-border-warm bg-brand-surface p-6">
                    <h2 class="font-gestico-serif text-2xl font-semibold text-brand-ink-soft">{{ $title }}</h2>
                    <p class="mt-4 leading-7 text-brand-text-card">{{ $text }}</p>
                </article>
            @endforeach
        </div>
    </section>
</x-layouts.public>
