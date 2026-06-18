<x-layouts.public title="Administración de fincas">
  <section class="bg-brand-mist py-16 dark:bg-brand-night sm:py-20">
    <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
      <p class="text-sm font-normal uppercase tracking-[0.04em] text-brand-gold dark:text-brand-night-gold">
        Administración de fincas</p>
      <h1 class="mt-4 max-w-4xl font-gestico-serif text-4xl font-semibold leading-tight sm:text-5xl">Administración
        pensada para resolver el día a día de la comunidad.</h1>
      <p class="mt-6 max-w-3xl text-lg leading-6 text-brand-text-muted dark:text-brand-night-muted">Trabajamos para que
        la gestión esté ordenada, los acuerdos avancen y la comunidad tenga una referencia clara cuando surgen dudas,
        incidencias o decisiones que no pueden esperar.</p>
      <div class="mt-8 flex flex-wrap gap-3">
        <span class="rounded-md border border-brand-border-warm bg-white px-4 py-2 text-sm text-brand-text-strong dark:border-brand-night-border dark:bg-brand-night-raised dark:text-brand-night-text">Acuerdos y seguimiento</span>
        <span class="rounded-md border border-brand-border-warm bg-white px-4 py-2 text-sm text-brand-text-strong dark:border-brand-night-border dark:bg-brand-night-raised dark:text-brand-night-text">Cuotas y proveedores</span>
        <span class="rounded-md border border-brand-border-warm bg-white px-4 py-2 text-sm text-brand-text-strong dark:border-brand-night-border dark:bg-brand-night-raised dark:text-brand-night-text">Incidencias y mantenimiento</span>
        <span class="rounded-md border border-brand-border-warm bg-white px-4 py-2 text-sm text-brand-text-strong dark:border-brand-night-border dark:bg-brand-night-raised dark:text-brand-night-text">Documentación en orden</span>
      </div>
    </div>
  </section>

  <section class="bg-white py-16 dark:bg-brand-night-panel">
    <div class="mx-auto grid max-w-7xl gap-8 px-5 sm:px-6 lg:grid-cols-[1.05fr_.95fr] lg:px-8">
      <div>
        <p class="text-sm font-normal uppercase tracking-[0.04em] text-brand-gold dark:text-brand-night-gold">Qué
          hacemos</p>
        <h2 class="mt-4 font-gestico-serif text-3xl font-semibold text-brand-ink dark:text-brand-night-text sm:text-4xl">
          La comunidad necesita alguien que ordene, explique y proporcione seguimiento.</h2>
        <p class="mt-5 leading-7 text-brand-text-muted dark:text-brand-night-muted">La administración de fincas no es
          solo tramitar papeles. También es interpretar los acuerdos de la junta, coordinar proveedores, avisar a tiempo
          de los plazos y mantener una relación clara entre vecinos, presidencia y comunidad.</p>
        <div class="mt-8 grid gap-4 sm:grid-cols-2">
          @foreach ([
              'Convocatorias y actas',
              'Control de cuotas',
              'Atención a incidencias',
              'Seguimiento de obras',
          ] as $item)
            <div class="rounded-md border border-brand-border-warm bg-white px-4 py-4 font-gestico-serif text-lg font-semibold text-brand-text-strong dark:border-brand-night-border dark:bg-brand-night-raised dark:text-brand-night-text">{{ $item }}</div>
          @endforeach
        </div>
      </div>

      <div class="grid gap-5">
        @foreach ([
            ['clipboard', 'Juntas y acuerdos', 'Preparamos la parte formal y dejamos constancia de lo aprobado para que nada quede ambiguo.'],
            ['wallet', 'Economía de la comunidad', 'Revisamos cuentas, remesas, previsiones y pagos para que los números sean entendibles.'],
            ['wrench', 'Mantenimiento e incidencias', 'Damos cauce a reparaciones, presupuestos y urgencias con un seguimiento continuo.'],
        ] as [$icon, $title, $text])
          <article
                  class="rounded-md border border-brand-border bg-brand-surface p-6 dark:border-brand-night-border dark:bg-brand-night-raised">
            <div class="inline-flex size-11 items-center justify-center rounded-md border border-brand-border-warm bg-white/80 text-brand-gold dark:border-brand-night-border dark:bg-brand-night-raised/90 dark:text-brand-night-gold">
              <x-service-icon :type="$icon"/>
            </div>
            <h3 class="mt-4 font-gestico-serif text-2xl font-semibold text-brand-ink-soft dark:text-brand-night-text">{{ $title }}</h3>
            <p class="mt-3 leading-7 text-brand-text-card dark:text-brand-night-muted">{{ $text }}</p>
          </article>
        @endforeach
      </div>
    </div>
  </section>

  <section class="bg-brand-cream py-16 dark:bg-brand-night">
    <div class="mx-auto grid max-w-7xl gap-8 px-5 sm:px-6 lg:grid-cols-[.9fr_1.1fr] lg:px-8">
      <div>
        <p class="text-sm font-normal uppercase tracking-[0.04em] text-brand-gold dark:text-brand-night-gold">
          Situaciones habituales</p>
        <h2 class="mt-4 font-gestico-serif text-3xl font-semibold text-brand-ink dark:text-brand-night-text sm:text-4xl">
          La administración aporta más valor cuando hay problemas que no conviene dejar para después.</h2>
        <p class="mt-5 leading-7 text-brand-text-muted dark:text-brand-night-muted">Cada comunidad tiene momentos en los
          que necesita apoyo más allá del trámite básico: una obra que se complica, un recibo pendiente, un siniestro,
          un vecino que necesita respuestas o una junta que exige claridad y orden.</p>
      </div>

      <div class="grid gap-4 sm:grid-cols-2">
        @foreach ([
            ['01', 'Vecino moroso', 'Seguimiento de cuotas pendientes y preparación del expediente si hay que reclamar.'],
            ['02', 'Obras y derramas', 'Control de presupuestos, aprobaciones y ejecución para evitar desviaciones.'],
            ['03', 'Siniestro o avería', 'Coordinación con aseguradoras, técnicos y proveedores hasta cerrar el incidente.'],
            ['04', 'Documentación dispersa', 'Ordenamos contratos, actas, facturas y comunicaciones para que todo esté accesible.'],
        ] as [$step, $title, $text])
          <article
                  class="rounded-md border border-brand-border-warm bg-brand-surface p-5 dark:border-brand-night-border dark:bg-brand-night-raised">
            <p class="text-sm font-medium uppercase tracking-[0.08em] text-brand-gold dark:text-brand-night-gold">{{ $step }}</p>
            <h3 class="mt-3 font-gestico-serif text-2xl font-semibold text-brand-ink-soft dark:text-brand-night-text">{{ $title }}</h3>
            <p class="mt-3 leading-7 text-brand-text-card dark:text-brand-night-muted">{{ $text }}</p>
          </article>
        @endforeach
      </div>
    </div>
  </section>

  <section class="bg-white py-16 dark:bg-brand-night-panel">
    <div class="mx-auto grid max-w-7xl gap-8 px-5 sm:px-6 lg:grid-cols-[1fr_.95fr] lg:px-8">
      <div>
        <p class="text-sm font-normal uppercase tracking-[0.04em] text-brand-gold dark:text-brand-night-gold">Gestión
          documentada</p>
        <h2 class="mt-4 font-gestico-serif text-3xl font-semibold text-brand-ink dark:text-brand-night-text sm:text-4xl">
          Cada actuación queda conectada con un acuerdo, un gasto o una obligación concreta.</h2>
        <p class="mt-5 leading-7 text-brand-text-muted dark:text-brand-night-muted">Una buena administración evita que
          la comunidad dependa de memoria informal: cada reparación, reclamación, presupuesto o comunicación debe poder
          explicarse con contexto y documentación.</p>
      </div>

      <div class="grid gap-4">
        @foreach (config('gestico.administracion') as $item)
          <article
                  class="rounded-md border border-brand-border-warm bg-brand-surface p-5 dark:border-brand-night-border dark:bg-brand-night-raised">
            <h3 class="font-gestico-serif text-2xl font-semibold text-brand-ink-soft dark:text-brand-night-text">{{ $item['title'] }}</h3>
            <p class="mt-3 leading-7 text-brand-text-card dark:text-brand-night-muted">{{ $item['text'] }}</p>
          </article>
        @endforeach
      </div>
    </div>
  </section>

  <section class="bg-brand-ink-panel py-16 text-white dark:bg-brand-night">
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
