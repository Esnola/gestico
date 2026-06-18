<x-layouts.public title="Servicios">
    <section class="bg-brand-mist py-16 dark:bg-brand-night sm:py-20">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <p class="text-sm font-normal uppercase tracking-[0.04em] text-brand-gold dark:text-brand-night-gold">Servicios</p>
            <h1 class="mt-4 max-w-4xl font-gestico-serif text-4xl font-semibold leading-tight text-brand-ink dark:text-brand-night-text sm:text-5xl">Gestión con visión práctica, control económico y respuesta ágil.</h1>
            <p class="mt-6 max-w-3xl text-lg leading-6 text-brand-text-muted dark:text-brand-night-muted">Acompañamos a comunidades de propietarios, presidentes y juntas con una gestión clara, ordenada y pensada para resolver el día a día sin perder de vista el largo plazo.</p>
            <div class="mt-8 flex flex-wrap gap-3">
                <span class="rounded-md border border-brand-border-warm bg-white px-4 py-2 text-sm text-brand-text-strong dark:border-brand-night-border dark:bg-brand-night-raised dark:text-brand-night-text">Gestión económica</span>
                <span class="rounded-md border border-brand-border-warm bg-white px-4 py-2 text-sm text-brand-text-strong dark:border-brand-night-border dark:bg-brand-night-raised dark:text-brand-night-text">Juntas y actas</span>
                <span class="rounded-md border border-brand-border-warm bg-white px-4 py-2 text-sm text-brand-text-strong dark:border-brand-night-border dark:bg-brand-night-raised dark:text-brand-night-text">Incidencias y mantenimiento</span>
                <span class="rounded-md border border-brand-border-warm bg-white px-4 py-2 text-sm text-brand-text-strong dark:border-brand-night-border dark:bg-brand-night-raised dark:text-brand-night-text">Documentación transparente</span>
            </div>
        </div>
    </section>

    <section class="bg-white py-16 dark:bg-brand-night-panel">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <p class="text-sm font-normal uppercase tracking-[0.04em] text-brand-gold dark:text-brand-night-gold">Qué hacemos</p>
                <h2 class="mt-4 font-gestico-serif text-3xl font-semibold text-brand-ink dark:text-brand-night-text sm:text-4xl">Servicios diseñados para que la comunidad funcione con menos ruido y más control.</h2>
                <p class="mt-5 text-lg  text-brand-text-muted dark:text-brand-night-muted">La Ley de Propiedad Horizontal sitúa al administrador como una figura clave para velar por el régimen de la propiedad, preparar presupuestos, atender reparaciones urgentes, ejecutar acuerdos y custodiar la documentación. Sobre esa base construimos un servicio cercano, organizado y útil para vecinos y propietarios.</p>
            </div>

            <div class="mt-10 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
            @foreach ([
                ['wallet', 'Gestión económico-financiera', 'Elaboramos presupuestos, controlamos remesas y pagos, revisamos conciliaciones bancarias y presentamos estados de cuentas comprensibles para la junta.'],
                ['clipboard', 'Juntas, actas y acuerdos', 'Preparamos convocatorias, redactamos actas, damos seguimiento a los acuerdos aprobados y mantenemos la documentación de la comunidad siempre localizada.'],
                ['scale', 'Morosidad y reclamaciones', 'Seguimos cuotas pendientes, apoyamos la reclamación amistosa y preparamos la información necesaria cuando hay que iniciar acciones formales.'],
                ['wrench', 'Mantenimiento e incidencias', 'Coordinamos reparaciones, pedimos presupuestos, supervisamos incidencias y hacemos seguimiento de proveedores, contratos y siniestros.'],
                ['users', 'Asesoramiento legal y vecinal', 'Aportamos criterio ante derramas, obras, uso de elementos comunes, conflictos entre propietarios y decisiones de gasto.'],
                ['folder', 'Fiscalidad y archivo', 'Organizamos la documentación económica, controlamos obligaciones fiscales y dejamos el expediente preparado para consultas y auditorías internas.'],
            ] as [$icon, $title, $text])
                <article class="rounded-md border border-brand-border-warm bg-brand-surface p-6 dark:border-brand-night-border dark:bg-brand-night-raised">
                    <div class="inline-flex size-11 items-center justify-center rounded-md border border-brand-border-warm bg-white/80 text-brand-gold dark:border-brand-night-border dark:bg-brand-night-raised/90 dark:text-brand-night-gold">
                        <x-service-icon :type="$icon" />
                    </div>
                    <h2 class="mt-4 font-gestico-serif text-2xl font-semibold text-brand-ink-soft dark:text-brand-night-text">{{ $title }}</h2>
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
                <h2 class="mt-4 font-gestico-serif text-3xl font-semibold text-brand-ink dark:text-brand-night-text sm:text-4xl">Un flujo claro para que cada incidencia tenga seguimiento y cada decisión tenga contexto.</h2>
                <p class="mt-5 text-lg leading-7 text-brand-text-muted dark:text-brand-night-muted">Nuestra forma de trabajar combina atención directa, orden documental y seguimiento continuo. El objetivo es que la comunidad no dependa de mensajes sueltos ni de decisiones improvisadas.</p>
            </div>

                <div class="grid gap-4 sm:grid-cols-2">
                @foreach ([
                    ['01', 'Diagnóstico inicial', 'Revisamos la situación de la comunidad, su documentación, sus pendientes y los procesos que necesitan orden.'],
                    ['02', 'Planificación', 'Definimos prioridades económicas, técnicas y administrativas para que el trabajo avance por bloques.'],
                    ['03', 'Ejecución y seguimiento', 'Coordinamos proveedores, incidencias, juntas y acuerdos con trazabilidad y control.'],
                    ['04', 'Información continua', 'Mantenemos a vecinos y presidentes informados con explicaciones claras y acceso ordenado a la documentación.'],
                ] as [$step, $title, $text])
                    <article class="rounded-md border border-brand-border bg-white p-5 dark:border-brand-night-border dark:bg-brand-night-raised">
                        <p class="text-sm font-medium uppercase tracking-[0.08em] text-brand-gold dark:text-brand-night-gold">{{ $step }}</p>
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
                <p class="text-sm font-normal uppercase tracking-[0.04em] text-brand-gold-bright dark:text-brand-night-gold">Más valor</p>
                <div class="mt-5 grid gap-8 lg:grid-cols-[1.1fr_.9fr] lg:items-center">
                    <div>
                        <h2 class="font-gestico-serif text-3xl font-semibold leading-tight sm:text-4xl">La transparencia importa tanto como la gestión.</h2>
                        <p class="mt-4 max-w-2xl text-lg leading-7 text-brand-frost">Por eso trabajamos con información ordenada, respuestas comprensibles y una estructura preparada para que la comunidad pueda consultar lo importante sin perder tiempo.</p>
                    </div>
                    <div class="flex flex-col gap-3 sm:flex-row lg:justify-end">
                        <a href="{{ route('contact') }}" class="inline-flex justify-center rounded-md bg-brand-gold-bright px-6 py-3 text-sm font-normal text-brand-ink transition hover:bg-brand-gold-soft dark:bg-brand-night-gold dark:text-brand-night">Pedir información</a>
                        <a href="{{ route('property-management') }}" class="inline-flex justify-center rounded-md border border-white/20 px-6 py-3 text-sm font-normal text-white transition hover:bg-white/10">Ver administración de fincas</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.public>
