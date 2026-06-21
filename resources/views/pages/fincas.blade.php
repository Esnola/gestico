<x-layouts.public title="Administración de fincas">
  <x-sections.hero
          eyebrow="Administración de fincas"
          title="Administración pensada para resolver el día a día de la comunidad."
          intro="Trabajamos para que la gestión esté ordenada, los acuerdos avancen y la comunidad tenga una referencia clara cuando surgen dudas, incidencias o decisiones que no pueden esperar."
          :badges="[
            ['label' => 'Acuerdos y seguimiento', 'icon' => 'clipboard-list'],
            ['label' => 'Cuotas y proveedores', 'icon' => 'coins'],
            ['label' => 'Incidencias y mantenimiento', 'icon' => 'house'],
            ['label' => 'Documentación en orden', 'icon' => 'file-lines'],
        ]"
          section-class="lg:flex-row-reverse!"
          primary-cta-label="Solicitar información"
          primary-cta-href='contacto'
          secondary-cta-label="Ver servicios"
          secondary-cta-href='servicios'
  >
    <x-slot:art>
      <div class="relative lg:mr-8">
        <div class="absolute -inset-6 rounded-4xl bg-brand-gold/10 blur-3xl dark:bg-brand-night-gold/10"></div>
        <div class="relative rounded-3xl border border-brand-border bg-white/90 p-6 shadow-sm shadow-black/5 backdrop-blur dark:border-brand-night-border dark:bg-brand-night-raised/90">
          <div class="flex items-center justify-between gap-4">
            <div>
              <p class="text-sm font-normal uppercase tracking-[0.04em] text-brand-gold dark:text-brand-night-gold">
                Fincas
              </p>
              <h2 class="mt-2 font-gestico-serif text-2xl font-semibold text-brand-ink dark:text-brand-night-text">
                Seguimiento claro para cada asunto
              </h2>
            </div>
            <span class="rounded-full border border-brand-border-warm bg-brand-surface px-3 py-1 text-xs font-medium uppercase tracking-[0.08em] text-brand-gold dark:border-brand-night-border dark:bg-brand-night-panel dark:text-brand-night-gold">
                            Control
                        </span>
          </div>

          <div class="mt-6 grid gap-3">
            <div class="rounded-2xl border border-brand-border-warm bg-brand-surface px-4 py-4 dark:border-brand-night-border dark:bg-brand-night-panel">
              <p class="text-sm font-medium uppercase tracking-[0.08em] text-brand-gold dark:text-brand-night-gold">
                Junta
              </p>
              <p class="mt-1 text-lg font-semibold text-brand-ink-soft dark:text-brand-night-text">
                Acuerdos, actas y decisiones trazables
              </p>
              <p class="mt-2 text-sm leading-6 text-brand-text-muted dark:text-brand-night-muted">
                Cada punto queda vinculado a su seguimiento para evitar pérdidas de contexto.
              </p>
            </div>
            <div class="rounded-2xl border border-brand-border-warm bg-brand-surface px-4 py-4 dark:border-brand-night-border dark:bg-brand-night-panel">
              <p class="text-sm font-medium uppercase tracking-[0.08em] text-brand-gold dark:text-brand-night-gold">
                Economía
              </p>
              <p class="mt-1 text-lg font-semibold text-brand-ink-soft dark:text-brand-night-text">
                Cuotas, proveedores y control de gastos
              </p>
              <p class="mt-2 text-sm leading-6 text-brand-text-muted dark:text-brand-night-muted">
                Las cuentas se revisan con orden para que la comunidad vea dónde está cada euro.
              </p>
            </div>
            <div class="rounded-2xl border border-brand-border-warm bg-brand-surface px-4 py-4 dark:border-brand-night-border dark:bg-brand-night-panel">
              <p class="text-sm font-medium uppercase tracking-[0.08em] text-brand-gold dark:text-brand-night-gold">
                Incidencias
              </p>
              <p class="mt-1 text-lg font-semibold text-brand-ink-soft dark:text-brand-night-text">
                Respuesta ágil y documentación al día
              </p>
              <p class="mt-2 text-sm leading-6 text-brand-text-muted dark:text-brand-night-muted">
                Si surge un problema, queda registrado, seguido y explicado con claridad.
              </p>
            </div>
          </div>
        </div>
      </div>
    </x-slot:art>
  </x-sections.hero>

  <x-sections.features
{{--          container-class=""--}}
          grid-class="grid grid-cols-2 gap-4 gap-5"
          card-class="rounded-md border border-brand-border bg-brand-surface p-6 dark:border-brand-night-border dark:bg-brand-night-raised"
          intro-text-class="mt-5 leading-7 text-brand-text-muted dark:text-brand-night-muted"
          item-title-class="mt-4 font-gestico-serif text-2xl font-semibold text-brand-ink-soft dark:text-brand-night-text"
          text-class="mt-3 leading-7 text-brand-text-card dark:text-brand-night-muted"
          eyebrow="Qué hacemos"
          title="La comunidad necesita alguien que ordene, explique y proporcione seguimiento."
          text="La administración de fincas no es solo tramitar papeles. También es interpretar los acuerdos de la junta, coordinar proveedores, avisar a tiempo de los plazos y mantener una relación clara entre vecinos, presidencia y comunidad."
          items='gestico.fincas-hacemos'
  />

  <x-sections.features
          container-class="lg:flex-row-reverse"
          grid-class="grid gap-4 sm:grid-cols-2"
          card-class="rounded-md border border-brand-border-warm bg-brand-surface p-5 dark:border-brand-night-border dark:bg-brand-night-raised"
          intro-text-class="mt-5 leading-7 text-brand-text-muted dark:text-brand-night-muted"
          item-title-class="mt-3 font-gestico-serif text-2xl font-semibold text-brand-ink-soft dark:text-brand-night-text"
          text-class="mt-3 leading-7 text-brand-text-card dark:text-brand-night-muted"
          eyebrow="Situaciones habituales"
          title="La administración aporta más valor cuando hay problemas que no conviene dejar para después."
          text="Cada comunidad tiene momentos en los que necesita apoyo más allá del trámite básico: una obra que se complica, un recibo pendiente, un siniestro, un vecino que necesita respuestas o una junta que exige claridad y orden."
          items='gestico.fincas-situaciones'
  />

  <x-sections.features
{{--          container-class=""--}}
          grid-class="grid gap-4"
          card-class="rounded-md border border-brand-border-warm bg-brand-surface p-5 dark:border-brand-night-border dark:bg-brand-night-raised"
          intro-text-class="mt-5 leading-7 text-brand-text-muted dark:text-brand-night-muted"
          item-title-class="font-gestico-serif text-2xl font-semibold text-brand-ink-soft dark:text-brand-night-text"
          text-class="mt-3 leading-7 text-brand-text-card dark:text-brand-night-muted"
          eyebrow="Gestión documentada"
          title="Cada actuación queda conectada con un acuerdo, un gasto o una obligación concreta."
          text="Una buena administración evita que la comunidad dependa de memoria informal: cada reparación, reclamación, presupuesto o comunicación debe poder explicarse con contexto y documentación."
          items='gestico.fincas-gestion'
  />

  <section class="bg-brand-ink-panel py-20 text-white dark:bg-brand-night sm:py-24">
    <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
      <div class="rounded-xl border border-white/10 bg-white/5 p-8 backdrop-blur-sm">
        <p class="text-sm font-normal uppercase tracking-[0.04em] text-brand-gold-bright dark:text-brand-night-gold">
          Valor añadido</p>
        <div class="mt-5 grid gap-8 lg:grid-cols-[1.1fr_.9fr] lg:items-center">
          <div>
            <h2 class="font-gestico-serif text-3xl font-semibold leading-tight sm:text-4xl">La comunidad gana
              estabilidad cuando los asuntos tienen seguimiento y la información no se pierde.</h2>
            <p class="mt-4 max-w-2xl text-lg leading-7 text-brand-frost">Nuestro objetivo es que vecinos y presidentes
              tengan una administración más previsora, más clara y más fácil de consultar cuando surge una duda o una
              decisión urgente.</p>
          </div>
          <div class="flex flex-col gap-3 sm:flex-row lg:justify-end">
            <a href="{{ route('contacto') }}"
               class="inline-flex justify-center rounded-md bg-brand-gold-bright px-6 py-3 text-sm font-normal text-brand-ink transition hover:bg-brand-gold-soft dark:bg-brand-night-gold dark:text-brand-night">Solicitar
              información</a>
            <a href="{{ route('servicios') }}"
               class="inline-flex justify-center rounded-md border border-white/20 px-6 py-3 text-sm font-normal text-white transition hover:bg-white/10">Ver
              servicios</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-layouts.public>
