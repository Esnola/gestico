<x-layouts.public title="Comparativa tipográfica">
    @push('head')
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600&family=Source+Sans+3:wght@400;500;600&family=Sora:wght@400;500;600&display=swap" rel="stylesheet">
        <style>
            .font-compare-specimen {
                text-wrap: balance;
                letter-spacing: -0.03em;
                line-height: 1.05;
            }

            .font-compare-subtitle {
                text-wrap: pretty;
                line-height: 1.35;
            }

            .font-compare-ibm {
                font-family: 'IBM Plex Sans', 'Nunito Sans', ui-sans-serif, system-ui, sans-serif;
            }

            .font-compare-source {
                font-family: 'Source Sans 3', 'Nunito Sans', ui-sans-serif, system-ui, sans-serif;
            }

            .font-compare-sora {
                font-family: 'Sora', 'Nunito Sans', ui-sans-serif, system-ui, sans-serif;
            }
        </style>
    @endpush

    @php
        $fonts = [
                [
                    'id' => 'ibm',
                    'name' => 'IBM Plex Sans',
                    'class' => 'font-compare-ibm',
                    'badge' => 'Elegida',
                    'notes' => [
                        'Acentos' => 'Se ven sólidos y limpios, con buena presencia en títulos largos.',
                        'Personalidad' => 'Transmite orden, rigor y una sensación muy profesional.',
                        'Encaje' => 'Es la que mejor separa la marca de Nunito Sans sin volverse excesiva.',
                ],
            ],
            [
                'id' => 'source',
                'name' => 'Source Sans 3',
                'class' => 'font-compare-source',
                'badge' => 'Más neutra',
                'notes' => [
                    'Acentos' => 'Los diacríticos son discretos y muy estables en lectura continua.',
                    'Personalidad' => 'Resulta amable, funcional y poco protagonista.',
                    'Encaje' => 'Es una transición suave, aunque se parece más a la voz actual.',
                ],
            ],
            [
                'id' => 'sora',
                'name' => 'Sora',
                'class' => 'font-compare-sora',
                'badge' => 'Más distintiva',
                'notes' => [
                    'Acentos' => 'Los acentos destacan más y aportan una firma visual clara.',
                    'Personalidad' => 'Se siente moderna y con más carácter geométrico.',
                    'Encaje' => 'Aporta diferencia, pero es la que más se aparta del tono cálido de Gestico.',
                ],
            ],
        ];
    @endphp

    <section class="bg-brand-mist py-20 dark:bg-brand-night sm:py-24" data-gsap-reveal>
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <p class="text-sm font-normal uppercase tracking-[0.04em] text-brand-gold dark:text-brand-night-gold">Comparativa tipográfica</p>
            <h1 class="mt-4 max-w-4xl font-gestico-serif text-4xl font-semibold leading-tight text-brand-ink dark:text-brand-night-text sm:text-5xl">Tres sans-serif para decidir cuál acompaña mejor los titulares de Gestico.</h1>
            <p class="mt-6 max-w-3xl text-lg leading-7 text-brand-text-muted dark:text-brand-night-muted">La misma copia, el mismo tamaño y la misma estructura en IBM Plex Sans, Source Sans 3 y Sora. Así podemos comparar legibilidad, acentos, tono y la distancia real frente a la voz actual de la marca.</p>

            <div class="mt-8 rounded-md border border-brand-border-warm bg-brand-surface px-5 py-4 dark:border-brand-night-border dark:bg-brand-night-raised">
                <p class="text-xs font-medium uppercase tracking-[0.08em] text-brand-gold dark:text-brand-night-gold">Punto de atención</p>
                <p class="mt-2 max-w-4xl text-sm leading-6 text-brand-text-card dark:text-brand-night-muted">En español vamos a mirar con lupa á, é, í, ó, ú, ü y ñ, porque esos detalles suelen delatar enseguida si una fuente se ve limpia o si los signos ganan demasiado peso dentro del titular.</p>
            </div>
        </div>
    </section>

    <section class="bg-white py-20 dark:bg-brand-night-panel sm:py-24" data-gsap-reveal>
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <div class="grid gap-5 lg:grid-cols-3" data-gsap-stagger>
                @foreach ($fonts as $font)
                    <article data-font-compare-card="{{ $font['id'] }}" class="rounded-md border border-brand-border-warm bg-brand-surface p-6 shadow-sm shadow-black/5 dark:border-brand-night-border dark:bg-brand-night-raised" data-gsap-stagger-item>
                        <div class="flex items-start justify-between gap-4">
                            <div>
                                <p class="text-sm font-normal uppercase tracking-[0.06em] text-brand-gold dark:text-brand-night-gold">{{ $font['badge'] }}</p>
                                <h2 class="mt-2 font-gestico-serif text-2xl font-semibold text-brand-ink-soft dark:text-brand-night-text">{{ $font['name'] }}</h2>
                            </div>
                            <span class="rounded-md border border-brand-border-light bg-white px-3 py-1 text-xs font-medium uppercase tracking-[0.08em] text-brand-text-light dark:border-brand-night-border dark:bg-brand-night-surface dark:text-brand-night-muted">Mismo texto</span>
                        </div>

                        <div class="mt-6 rounded-md border border-brand-border-light bg-white/75 p-5 dark:border-brand-night-border dark:bg-brand-night-surface/55">
                            <div class="{{ $font['class'] }}">
                                <h3 class="font-compare-specimen text-[2rem] font-semibold text-brand-ink dark:text-brand-night-text sm:text-[2.15rem]">
                                    Tu comunidad, gestionada con cuentas claras y respuesta profesional.
                                </h3>
                                <p class="font-compare-subtitle mt-4 text-lg font-medium text-brand-text-strong dark:text-brand-night-text">
                                    Cuentas claras, seguimiento real y una gestión serena.
                                </p>
                            </div>

                            <p class="mt-4 text-base leading-7 text-brand-text-card dark:text-brand-night-muted">
                                La comunidad necesita presupuestos entendibles, respuestas con contexto y documentación fácil de consultar cuando surge una duda.
                            </p>
                        </div>

                        <dl class="mt-6 grid gap-4" data-gsap-stagger>
                            @foreach ($font['notes'] as $label => $note)
                                <div class="rounded-md border border-brand-border-light bg-white px-4 py-3 dark:border-brand-night-border dark:bg-brand-night-surface" data-gsap-stagger-item>
                                    <dt class="text-xs font-medium uppercase tracking-[0.08em] text-brand-gold dark:text-brand-night-gold">{{ $label }}</dt>
                                    <dd class="mt-1 text-sm leading-6 text-brand-text-card dark:text-brand-night-muted">{{ $note }}</dd>
                                </div>
                            @endforeach
                        </dl>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-brand-cream py-20 dark:bg-brand-night sm:py-24">
        <div class="mx-auto grid max-w-7xl gap-8 px-5 sm:px-6 lg:grid-cols-[1.05fr_.95fr] lg:px-8">
            <div>
                <p class="text-sm font-normal uppercase tracking-[0.04em] text-brand-gold dark:text-brand-night-gold">Recomendación</p>
                <h2 class="mt-4 font-gestico-serif text-3xl font-semibold text-brand-ink dark:text-brand-night-text sm:text-4xl">IBM Plex Sans es la fuente elegida para títulos y subtítulos.</h2>
                <p class="mt-5 text-lg leading-7 text-brand-text-muted dark:text-brand-night-muted">Es la que mejor combina un tono técnico con la sobriedad que pide Gestico. Sora aporta más personalidad y Source Sans 3 es más neutra, pero IBM Plex Sans se queda en el punto más útil: diferenciación clara, buena lectura y acentos menos marcados que Cormorant Garamond.</p>
            </div>

            <div class="rounded-md border border-brand-border-warm bg-white p-6 shadow-sm shadow-black/5 dark:border-brand-night-border dark:bg-brand-night-raised">
                <p class="text-sm font-normal uppercase tracking-[0.04em] text-brand-gold dark:text-brand-night-gold">Veredicto rápido</p>
                <div class="mt-5 grid gap-3">
                    <div class="rounded-md border border-brand-border-light bg-brand-surface px-4 py-3 dark:border-brand-night-border dark:bg-brand-night-surface">
                        <p class="text-sm font-medium text-brand-ink-soft dark:text-brand-night-text">IBM Plex Sans</p>
                        <p class="mt-1 text-sm leading-6 text-brand-text-card dark:text-brand-night-muted">Mejor equilibrio entre técnica, claridad y encaje con la marca.</p>
                    </div>
                    <div class="rounded-md border border-brand-border-light bg-brand-surface px-4 py-3 dark:border-brand-night-border dark:bg-brand-night-surface">
                        <p class="text-sm font-medium text-brand-ink-soft dark:text-brand-night-text">Source Sans 3</p>
                        <p class="mt-1 text-sm leading-6 text-brand-text-card dark:text-brand-night-muted">Muy legible, pero más próxima a la voz actual del sitio.</p>
                    </div>
                    <div class="rounded-md border border-brand-border-light bg-brand-surface px-4 py-3 dark:border-brand-night-border dark:bg-brand-night-surface">
                        <p class="text-sm font-medium text-brand-ink-soft dark:text-brand-night-text">Sora</p>
                        <p class="mt-1 text-sm leading-6 text-brand-text-card dark:text-brand-night-muted">Más llamativa y geométrica, aunque menos alineada con el tono cálido del resto.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.public>
