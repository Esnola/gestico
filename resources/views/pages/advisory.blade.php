<x-layouts.public title="Asesoría económico-financiera, fiscal y laboral">
    <section class="bg-brand-mist py-16 dark:bg-brand-night sm:py-20">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <p class="text-sm font-normal uppercase tracking-[0.04em] text-brand-gold dark:text-brand-night-gold">Asesoría</p>
            <h1 class="mt-4 max-w-4xl font-gestico-serif text-4xl font-semibold leading-tight text-brand-ink dark:text-brand-night-text sm:text-5xl">Cuentas, impuestos y obligaciones laborales con una lectura clara.</h1>
            <p class="mt-6 max-w-3xl text-lg leading-7 text-brand-text-muted dark:text-brand-night-muted">La parte económica de una comunidad no solo exige cumplir plazos. También requiere criterio para interpretar gastos, anticipar desviaciones y explicar cada movimiento con lenguaje comprensible para la junta.</p>
            <div class="mt-8 flex flex-wrap gap-3">
                <span class="rounded-md border border-brand-border-warm bg-white px-4 py-2 text-sm text-brand-text-strong dark:border-brand-night-border dark:bg-brand-night-raised dark:text-brand-night-text">Contabilidad</span>
                <span class="rounded-md border border-brand-border-warm bg-white px-4 py-2 text-sm text-brand-text-strong dark:border-brand-night-border dark:bg-brand-night-raised dark:text-brand-night-text">Fiscalidad</span>
                <span class="rounded-md border border-brand-border-warm bg-white px-4 py-2 text-sm text-brand-text-strong dark:border-brand-night-border dark:bg-brand-night-raised dark:text-brand-night-text">Laboral</span>
                <span class="rounded-md border border-brand-border-warm bg-white px-4 py-2 text-sm text-brand-text-strong dark:border-brand-night-border dark:bg-brand-night-raised dark:text-brand-night-text">Previsión y control</span>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 dark:bg-brand-night-panel">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <p class="text-sm font-normal uppercase tracking-[0.04em] text-brand-gold dark:text-brand-night-gold">Qué cubrimos</p>
                <h2 class="mt-4 font-gestico-serif text-3xl font-semibold text-brand-ink dark:text-brand-night-text sm:text-4xl">La asesoría funciona mejor cuando la información económica no llega tarde ni fragmentada.</h2>
                <p class="mt-5 text-lg leading-7 text-brand-text-muted dark:text-brand-night-muted">Integramos contabilidad, fiscalidad y gestión laboral en un mismo circuito para que la comunidad pueda tomar decisiones con datos fiables y sin depender de hojas sueltas o explicaciones improvisadas.</p>
            </div>

            <div class="mt-10 grid gap-5 md:grid-cols-2 lg:grid-cols-4">
                @foreach ([
                    ['wallet', 'Contabilidad y cierres', 'Preparación de presupuestos, seguimiento de gastos, cierres periódicos y comparativas para detectar desviaciones con tiempo.'],
                    ['clipboard', 'Fiscalidad y modelos', 'Control del calendario tributario, revisión de modelos, archivo de justificantes y preparación de la documentación de soporte.'],
                    ['scale', 'Laboral y Seguridad Social', 'Gestión de nóminas, contratos, seguros sociales, altas, bajas y cambios que exigen coordinación con exactitud.'],
                    ['folder', 'Análisis y previsión', 'Proyección de gastos, lectura de tendencias, preparación de escenarios y apoyo a la junta antes de tomar decisiones.'],
                ] as [$icon, $title, $text])
                    <article class="rounded-md border border-brand-border-warm bg-brand-surface p-6 dark:border-brand-night-border dark:bg-brand-night-raised">
                        <div class="inline-flex size-11 items-center justify-center rounded-md border border-brand-border-warm bg-white/80 text-brand-gold dark:border-brand-night-border dark:bg-brand-night-raised/90 dark:text-brand-night-gold">
                            <x-service-icon :type="$icon" />
                        </div>
                        <h3 class="font-gestico-serif text-2xl font-semibold text-brand-ink-soft dark:text-brand-night-text">{{ $title }}</h3>
                        <p class="mt-4 leading-7 text-brand-text-card dark:text-brand-night-muted">{{ $text }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-brand-cream py-16 dark:bg-brand-night">
        <div class="mx-auto grid max-w-7xl gap-8 px-5 sm:px-6 lg:grid-cols-[1fr_.95fr] lg:px-8">
            <div>
                <p class="text-sm font-normal uppercase tracking-[0.04em] text-brand-gold dark:text-brand-night-gold">Cómo trabajamos</p>
                <h2 class="mt-4 font-gestico-serif text-3xl font-semibold text-brand-ink dark:text-brand-night-text sm:text-4xl">Un circuito económico sencillo para que cada decisión tenga contexto y respaldo.</h2>
                <p class="mt-5 text-lg leading-7 text-brand-text-muted dark:text-brand-night-muted">La asesoría aporta más valor cuando no se limita a presentar obligaciones. Revisamos el movimiento económico, ordenamos la documentación de soporte y dejamos el expediente listo para consulta, revisión o junta.</p>
            </div>

            <div class="grid gap-4 sm:grid-cols-2">
                @foreach ([
                    ['01', 'wallet', 'Revisión', 'Analizamos la situación económica, los pendientes y el calendario de obligaciones.'],
                    ['02', 'clipboard', 'Orden', 'Agrupamos facturas, justificantes, comunicaciones y documentos de respaldo.'],
                    ['03', 'scale', 'Seguimiento', 'Controlamos vencimientos, incidencias y desviaciones para actuar antes de que crezcan.'],
                    ['04', 'users', 'Explicación', 'Traducimos los números a un lenguaje claro para la junta y los propietarios.'],
                ] as [$step, $icon, $title, $text])
                    <article class="rounded-md border border-brand-border bg-white p-5 dark:border-brand-night-border dark:bg-brand-night-raised">
                        <p class="text-sm font-medium uppercase tracking-[0.08em] text-brand-gold dark:text-brand-night-gold">{{ $step }}</p>
                        <div class="mt-3 inline-flex size-10 items-center justify-center rounded-md border border-brand-border-warm bg-brand-surface text-brand-gold dark:border-brand-night-border dark:bg-brand-night-panel dark:text-brand-night-gold">
                            <x-service-icon :type="$icon" />
                        </div>
                        <h3 class="mt-3 font-gestico-serif text-2xl font-semibold text-brand-ink-soft dark:text-brand-night-text">{{ $title }}</h3>
                        <p class="mt-3 leading-7 text-brand-text-card dark:text-brand-night-muted">{{ $text }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-brand-ink-panel py-16 text-white dark:bg-brand-night">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div class="rounded-xl border border-white/10 bg-white/5 p-8 backdrop-blur-sm">
                <p class="text-sm font-normal uppercase tracking-[0.04em] text-brand-gold-bright dark:text-brand-night-gold">Valor añadido</p>
                <div class="mt-5 grid gap-8 lg:grid-cols-[1.1fr_.9fr] lg:items-center">
                    <div>
                        <h2 class="font-gestico-serif text-3xl font-semibold leading-tight sm:text-4xl">La cifra correcta importa, pero también la explicación que la acompaña.</h2>
                        <p class="mt-4 max-w-2xl text-lg leading-7 text-brand-frost">Nuestro objetivo es que la comunidad entienda qué se paga, por qué se paga y cómo impacta cada decisión en la estabilidad económica del edificio.</p>
                    </div>
                    <div class="flex flex-col gap-3 sm:flex-row lg:justify-end">
                        <a href="{{ route('contact') }}" class="inline-flex justify-center rounded-md bg-brand-gold-bright px-6 py-3 text-sm font-normal text-brand-ink transition hover:bg-brand-gold-soft dark:bg-brand-night-gold dark:text-brand-night">Pedir asesoría</a>
                        <a href="{{ route('services') }}" class="inline-flex justify-center rounded-md border border-white/20 px-6 py-3 text-sm font-normal text-white transition hover:bg-white/10">Ver servicios</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.public>
