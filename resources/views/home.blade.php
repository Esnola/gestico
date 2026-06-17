<x-layouts.public title="Gestión integral de comunidades">
    <section class="relative bg-brand-mist">
        <div class="mx-auto grid min-h-[calc(100vh-82px)] max-w-7xl items-center gap-10 px-5 py-14 sm:px-6 lg:grid-cols-[1.05fr_.95fr] lg:px-8">
            <div class="max-w-3xl">
                <p class="text-sm font-normal uppercase text-brand-gold">Administración de fincas y asesoría para comunidades</p>
                <h1 class="mt-5 font-gestico-serif text-4xl font-semibold tracking-tighter text-brand-ink sm:text-5xl lg:text-6xl">Tu comunidad, gestionada con cuentas claras y respuesta profesional.</h1>
                <p class="mt-6 max-w-2xl text-lg leading-8 text-brand-text-hero">Gestico Barbanza coordina la gestión administrativa, económico-financiera, fiscal y laboral de comunidades de propietarios para que la presidencia y la junta tengan control sin cargar con el trabajo diario.</p>
                <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center rounded-md bg-brand-gold px-6 py-3 text-sm font-normal text-white shadow-sm transition hover:bg-brand-gold-hover">Solicitar una propuesta</a>
                    <a href="{{ route('services') }}" class="inline-flex items-center justify-center rounded-md border border-brand-stone bg-white/70 px-6 py-3 text-sm font-normal text-brand-text-strong transition hover:border-brand-gold">Ver servicios</a>
                </div>
                <div class="mt-10 grid max-w-2xl grid-cols-3 divide-x divide-brand-border-muted rounded-md border border-brand-border-muted bg-white/70">
                    <div class="p-4">
                        <p class="font-gestico-serif text-3xl font-semibold text-brand-gold">24h</p>
                        <p class="mt-1 text-xs font-normal text-brand-text-light">Información preparada para consulta online</p>
                    </div>
                    <div class="p-4">
                        <p class="font-gestico-serif text-3xl font-semibold text-brand-gold">360°</p>
                        <p class="mt-1 text-xs font-normal text-brand-text-light">Gestión administrativa, fiscal, laboral y contable</p>
                    </div>
                    <div class="p-4">
                        <p class="font-gestico-serif text-3xl font-semibold text-brand-gold">1</p>
                        <p class="mt-1 text-xs font-normal text-brand-text-light">Interlocutor coordinando incidencias y acuerdos</p>
                    </div>
                </div>
            </div>
            <div class="relative min-h-[520px] overflow-hidden lg:overflow-visible">
                <img src="{{ asset('images/home-document-management.svg') }}" alt="Documentación organizada para comunidades" class="home-slide-image home-slide-image-right absolute right-0 top-0 w-[74%] max-w-[360px] rounded-md border border-brand-border bg-white shadow-xl shadow-brand-teal-shadow/10">
                <img src="{{ asset('images/home-community-care.svg') }}" alt="Portal residencial gestionado" class="home-slide-image home-slide-image-left absolute bottom-0 left-0 w-[70%] max-w-[340px] rounded-md border border-brand-border bg-white shadow-xl shadow-brand-teal-shadow/10">
{{--
                <div class="relative z-10 mx-auto mt-32 max-w-[430px] rounded-lg border border-brand-border bg-white/95 p-5 shadow-xl shadow-brand-teal-shadow/10 backdrop-blur sm:mt-28 lg:mr-4">
                    <div class="flex items-center justify-between border-b border-brand-border-light pb-4">
                        <div>
                            <p class="text-xs font-normal uppercase tracking-[0.04em] text-brand-gold">Estado de comunidad</p>
                            <p class="mt-1 font-gestico-serif text-2xl font-semibold text-brand-ink-raised">Junio 2026</p>
                        </div>
                        <span class="rounded-md bg-brand-teal-badge-bg px-3 py-2 text-xs font-normal text-brand-teal-badge">Al día</span>
                    </div>
                    <div class="mt-5 grid gap-3">
                        @foreach (['Presupuesto anual revisado', 'Remesas y cobros controlados', 'Obligaciones fiscales calendarizadas', 'Incidencias con seguimiento'] as $item)
                            <div class="flex items-center justify-between rounded-md border border-brand-border-pale bg-brand-surface-muted p-4">
                                <span class="text-sm font-normal text-brand-text-panel">{{ $item }}</span>
                                <span class="text-sm font-semibold text-brand-gold">✓</span>
                            </div>
                        @endforeach
                    </div>
                    <div class="mt-5 rounded-md bg-brand-ink-raised p-5 text-white">
                        <p class="text-sm font-normal text-brand-frost-strong">Próxima prioridad</p>
                        <p class="mt-2 font-gestico-serif text-3xl font-semibold">Reducir trabajo manual de la junta</p>
                        <p class="mt-3 text-sm leading-6 text-brand-frost-strong">Documentación ordenada, informes comprensibles y decisiones preparadas antes de cada reunión.</p>
                    </div>
                </div>--}}
            </div>
        </div>
    </section>

    <section class="bg-white py-20">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div class="max-w-2xl">
                <p class="text-sm font-normal uppercase tracking-[0.04em] text-brand-gold">Qué resolvemos</p>
                <h2 class="mt-3 font-gestico-serif text-3xl font-semibold text-brand-ink sm:text-4xl">Una administración pensada para comunidades que necesitan orden, transparencia y continuidad.</h2>
            </div>
            <div class="mt-10 grid gap-4 md:grid-cols-2 lg:grid-cols-4">
                @foreach ([
                    ['Contabilidad y bancos', 'Presupuestos, remesas, estados de cuentas, pagos, cierres e informes periódicos.'],
                    ['Fiscal y laboral', 'Modelos fiscales, obligaciones laborales, nóminas, seguros sociales y seguimiento documental.'],
                    ['Fincas e incidencias', 'Proveedores, mantenimiento, reparaciones, seguros, siniestros y ejecución de acuerdos.'],
                    ['Comunicación clara', 'Convocatorias, actas, circulares, trazabilidad de decisiones y atención a propietarios.'],
                ] as [$title, $text])
                    <article class="rounded-lg border border-brand-border-soft bg-brand-surface p-6">
                        <h3 class="font-gestico-serif text-xl font-semibold text-brand-ink-soft">{{ $title }}</h3>
                        <p class="mt-3 text-sm leading-6 text-brand-text-soft">{{ $text }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-brand-ink-panel py-20 text-white">
        <div class="mx-auto grid max-w-7xl gap-10 px-5 sm:px-6 lg:grid-cols-[.8fr_1.2fr] lg:px-8">
            <div>
                <p class="text-sm font-normal uppercase tracking-[0.04em] text-brand-gold-bright">Método</p>
                <h2 class="mt-3 font-gestico-serif text-3xl font-semibold sm:text-4xl">Primero entendemos la comunidad. Después ponemos rutina y control.</h2>
            </div>
            <div class="grid gap-4 sm:grid-cols-3">
                @foreach ([
                    ['01', 'Diagnóstico', 'Revisión de cuentas, contratos, incidencias y necesidades reales.'],
                    ['02', 'Plan de gestión', 'Calendario fiscal/laboral, presupuesto, prioridades y circuito documental.'],
                    ['03', 'Seguimiento', 'Informes claros, reuniones preparadas y acceso a documentación relevante.'],
                ] as [$step, $title, $text])
                    <div class="rounded-lg border border-white/15 bg-white/6 p-5">
                        <p class="font-gestico-serif text-xl font-semibold text-brand-gold-bright">{{ $step }}</p>
                        <h3 class="mt-4 font-gestico-serif text-2xl font-semibold">{{ $title }}</h3>
                        <p class="mt-3 text-sm leading-6 text-brand-frost">{{ $text }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-brand-cream py-20">
        <div class="mx-auto grid max-w-7xl items-center gap-10 px-5 sm:px-6 lg:grid-cols-[1fr_.9fr] lg:px-8">
            <div>
                <p class="text-sm font-normal uppercase tracking-[0.04em] text-brand-gold">Área de clientes</p>
                <h2 class="mt-3 font-gestico-serif text-3xl font-semibold text-brand-ink sm:text-4xl">La información privada llegará en la siguiente fase.</h2>
                <p class="mt-5 text-lg leading-8 text-brand-text-muted">Dejamos preparada la puerta de acceso para que presidentes, juntas y propietarios puedan consultar documentación, movimientos, informes y comunicaciones cuando construyamos la zona privada.</p>
                <a href="{{ route('client-portal') }}" class="mt-7 inline-flex rounded-md border border-brand-stone bg-white px-5 py-3 text-sm font-normal text-brand-text-strong transition hover:border-brand-gold">Ver planteamiento del portal</a>
            </div>
            <div class="rounded-lg border border-brand-border bg-white p-6">
                <div class="grid gap-3">
                    @foreach (['Contratos y documentación comunitaria', 'Movimientos bancarios e informes', 'Facturas, presupuestos y cierres', 'Comunicaciones y avisos importantes'] as $item)
                        <div class="rounded-md bg-brand-surface-warm px-4 py-3 text-sm font-normal text-brand-teal-card">{{ $item }}</div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</x-layouts.public>
