<x-layouts.public title="Servicios">
    <x-sections.hero
        eyebrow="Servicios"
        title="Gestión con visión práctica, control económico y respuesta ágil."
        intro="Acompañamos a comunidades de propietarios, presidentes y juntas con una gestión clara, ordenada y pensada para resolver el día a día sin perder de vista el largo plazo."
        :badges="[
            ['label' => 'Gestión económica', 'icon' => 'coins'],
            ['label' => 'Juntas y actas', 'icon' => 'clipboard-list'],
            ['label' => 'Incidencias y mantenimiento', 'icon' => 'house'],
            ['label' => 'Documentación transparente', 'icon' => 'file-lines'],
        ]"
        section-class="flex-row-reverse!"
        primary-cta-label="Pedir información"
        primary-cta-href='contacto'
        secondary-cta-label="Ver administración de fincas"
        secondary-cta-href='fincas'

    >
        <x-slot:art>
            <div class="relative lg:mr-8">
                <div class="absolute -inset-6 rounded-4xl bg-brand-gold/10 blur-3xl dark:bg-brand-night-gold/10"></div>
                <div
                    class="relative rounded-3xl border border-brand-border bg-white/90 p-6 shadow-sm shadow-black/5 backdrop-blur dark:border-brand-night-border dark:bg-brand-night-raised/90">
                    <div class="flex items-center justify-between gap-4">
                        <div>
                            <p class="text-sm font-normal uppercase tracking-[0.04em] text-brand-gold dark:text-brand-night-gold">
                                Enfoque
                            </p>
                            <h2 class="mt-2 font-gestico-serif text-2xl font-semibold text-brand-ink dark:text-brand-night-text">
                                Todo el servicio en un mismo circuito
                            </h2>
                        </div>
                        <span
                            class="rounded-full border border-brand-border-warm bg-brand-surface px-3 py-1 text-xs font-medium uppercase tracking-[0.08em] text-brand-gold dark:border-brand-night-border dark:bg-brand-night-panel dark:text-brand-night-gold">
                            Orden
                        </span>
                    </div>
                    <div class="mt-6 grid gap-3">
                        <div
                            class="rounded-2xl border border-brand-border-warm bg-brand-surface px-4 py-4 dark:border-brand-night-border dark:bg-brand-night-panel">
                            <p class="text-sm font-medium uppercase tracking-[0.08em] text-brand-gold dark:text-brand-night-gold">
                                Economía
                            </p>
                            <p class="mt-1 text-lg font-semibold text-brand-ink-soft dark:text-brand-night-text">
                                Presupuestos, remesas y control de pagos
                            </p>
                            <p class="mt-2 text-sm leading-6 text-brand-text-muted dark:text-brand-night-muted">
                                Revisión clara para que la junta entienda el estado real de la comunidad.
                            </p>
                        </div>
                        <div
                            class="rounded-2xl border border-brand-border-warm bg-brand-surface px-4 py-4 dark:border-brand-night-border dark:bg-brand-night-panel">
                            <p class="text-sm font-medium uppercase tracking-[0.08em] text-brand-gold dark:text-brand-night-gold">
                                Gestión
                            </p>
                            <p class="mt-1 text-lg font-semibold text-brand-ink-soft dark:text-brand-night-text">
                                Actas, incidencias y documentación ordenada
                            </p>
                            <p class="mt-2 text-sm leading-6 text-brand-text-muted dark:text-brand-night-muted">
                                Un único hilo de trabajo para que nada importante se pierda por el camino.
                            </p>
                        </div>
                        <div
                            class="rounded-2xl border border-brand-border-warm bg-brand-surface px-4 py-4 dark:border-brand-night-border dark:bg-brand-night-panel">
                            <p class="text-sm font-medium uppercase tracking-[0.08em] text-brand-gold dark:text-brand-night-gold">
                                Seguimiento
                            </p>
                            <p class="mt-1 text-lg font-semibold text-brand-ink-soft dark:text-brand-night-text">
                                Respuesta ágil y trazabilidad de cada acuerdo
                            </p>
                            <p class="mt-2 text-sm leading-6 text-brand-text-muted dark:text-brand-night-muted">
                                La comunidad sabe qué está pendiente, qué se ha cerrado y qué sigue en curso.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </x-slot:art>
    </x-sections.hero>

    <x-sections.features
{{--        container-class=""--}}
        grid-class="lg:grid-cols-2"
        card-class="rounded-md border border-brand-border-warm bg-brand-surface p-6 dark:border-brand-night-border dark:bg-brand-night-raised"
        intro-text-class="mt-5 text-lg leading-7 text-brand-text-muted dark:text-brand-night-muted"
        text-class="mt-4 leading-7 text-brand-text-card dark:text-brand-night-muted"
        eyebrow="Qué hacemos"
        title="Servicios diseñados para que la comunidad funcione con menos ruido y más control."
        text="La Ley de Propiedad Horizontal sitúa al administrador como una figura clave para velar por el régimen de la propiedad, preparar presupuestos, atender reparaciones urgentes, ejecutar acuerdos y custodiar la documentación. Sobre esa base construimos un servicio cercano, organizado y útil para vecinos y propietarios."
        items='gestico.servicios-hacemos'
        :iconInLine="true"
        :animateCards="true"
    />

    <x-sections.features
        container-class="lg:flex-row-reverse"
        grid-class="grid gap-4 sm:grid-cols-2"
        card-class="rounded-md border border-brand-border bg-white p-5 dark:border-brand-night-border dark:bg-brand-night-raised"
        intro-text-class="mt-5 text-lg leading-7 text-brand-text-muted dark:text-brand-night-muted"
        text-class="mt-3 leading-7 text-brand-text-card dark:text-brand-night-muted"
        eyebrow="Base normativa"
        title="Convertimos las obligaciones de la comunidad en tareas visibles y controladas."
        text="La Ley de Propiedad Horizontal marca funciones muy concretas para el administrador: velar por el buen régimen de la finca, preparar planes de gastos, atender conservación, ejecutar acuerdos y custodiar documentación."
        items='gestico.servicios-normativa'
        :animateCards="true"
    />

    <x-sections.features
        container-class=""
        grid-class="grid gap-4 sm:grid-cols-2"
        card-class="rounded-md border border-brand-border bg-white p-5 dark:border-brand-night-border dark:bg-brand-night-raised"
        intro-text-class="mt-5 text-lg leading-7 text-brand-text-muted dark:text-brand-night-muted"
        text-class="mt-3 leading-7 text-brand-text-card dark:text-brand-night-muted"
        eyebrow="Cómo trabajamos"
        title="Un flujo claro para que cada incidencia tenga seguimiento y cada decisión tenga contexto."
        text="Nuestra forma de trabajar combina atención directa, orden documental y seguimiento continuo. El objetivo es que la comunidad no dependa de mensajes sueltos ni de decisiones improvisadas."
        items='gestico.servicios-trabajo'
        :animateCards="true"
    />

    <section class="bg-brand-ink-panel py-20 text-white dark:bg-brand-night sm:py-24">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div class="rounded-xl border border-white/10 bg-white/5 p-8 backdrop-blur-sm">
                <p class="text-sm font-normal uppercase tracking-[0.04em] text-brand-gold-bright dark:text-brand-night-gold">
                    Más
                    valor</p>
                <div class="mt-5 grid gap-8 lg:grid-cols-[1.1fr_.9fr] lg:items-center">
                    <div>
                        <h2 class="font-gestico-serif text-3xl font-semibold leading-tight sm:text-4xl">La transparencia
                            importa
                            tanto como la gestión.</h2>
                        <p class="mt-4 max-w-2xl text-lg leading-7 text-brand-frost">Por eso trabajamos con información
                            ordenada,
                            respuestas comprensibles y una estructura preparada para que la comunidad pueda consultar lo
                            importante
                            sin perder tiempo.</p>
                    </div>
                    <div class="flex flex-col gap-3 sm:flex-row lg:justify-end">
                        <a href="{{ route('contacto') }}"
                           class="inline-flex justify-center rounded-md bg-brand-gold-bright px-6 py-3 text-sm font-normal text-brand-ink transition hover:bg-brand-gold-soft dark:bg-brand-night-gold dark:text-brand-night">Pedir
                            información</a>
                        <a href="{{ route('fincas') }}"
                           class="inline-flex justify-center rounded-md border border-white/20 px-6 py-3 text-sm font-normal text-white transition hover:bg-white/10">Ver
                            administración de fincas</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.public>

@vite(['resources/js/home-gsap.js'])
