<x-layouts.public title="Asesoría económico-financiera, fiscal y laboral">
  <x-sections.hero
      eyebrow="Asesoría"
      title="Cuentas, impuestos y obligaciones laborales con una lectura clara."
      intro="La parte económica de una comunidad no solo exige cumplir plazos. También requiere criterio para interpretar gastos, anticipar desviaciones y explicar cada movimiento con lenguaje comprensible para la junta."
      :badges="config('gestico.content.asesoria-badges')"
      section-class="lg:flex-row-reverse"
      primary-cta-label="Pedir asesoría"
      primary-cta-href='contacto'
      secondary-cta-label="Ver servicios"
      secondary-cta-href='servicios'
  >
      <x-slot:art>
          <div class="relative">
              <div class="absolute -inset-4 rounded-4xl bg-brand-gold/10 blur-xl dark:bg-brand-night-gold/10"></div>
              <div class="relative rounded-2xl border border-brand-border bg-white/85 p-6 shadow-sm shadow-black/5 backdrop-blur dark:border-brand-night-border dark:bg-brand-night-raised/90">
                  <div class="flex items-center justify-between">
                      <div>
                          <p class="text-sm font-normal uppercase tracking-[0.04em] text-brand-gold dark:text-brand-night-gold">
                              Vista rápida
                          </p>
                          <h2 class="mt-2 font-gestico-serif text-2xl font-semibold text-brand-ink dark:text-brand-night-text">
                              Control económico con contexto
                          </h2>
                      </div>
                      <span class="rounded-full border border-brand-border-warm bg-brand-surface px-3 py-1 text-xs font-medium uppercase tracking-[0.08em] text-brand-gold dark:border-brand-night-border dark:bg-brand-night-panel dark:text-brand-night-gold">
                          Orden
                      </span>
                  </div>

                  <div class="mt-6 grid gap-3">
                      <div class="rounded-xl border border-brand-border-warm bg-brand-surface px-4 py-4 dark:border-brand-night-border dark:bg-brand-night-panel">
                          <p class="text-sm font-medium uppercase tracking-[0.08em] text-brand-gold dark:text-brand-night-gold">Cierres</p>
                          <p class="mt-1 text-lg font-semibold text-brand-ink-soft dark:text-brand-night-text">Mensual y trimestral</p>
                          <p class="mt-2 text-sm leading-6 text-brand-text-muted dark:text-brand-night-muted">Movimientos revisados para que la junta vea el estado real de la comunidad.</p>
                      </div>
                      <div class="rounded-xl border border-brand-border-warm bg-brand-surface px-4 py-4 dark:border-brand-night-border dark:bg-brand-night-panel">
                          <p class="text-sm font-medium uppercase tracking-[0.08em] text-brand-gold dark:text-brand-night-gold">Plazos</p>
                          <p class="mt-1 text-lg font-semibold text-brand-ink-soft dark:text-brand-night-text">Modelos y obligaciones</p>
                          <p class="mt-2 text-sm leading-6 text-brand-text-muted dark:text-brand-night-muted">Calendario fiscal y laboral preparado con margen para actuar antes de que venza.</p>
                      </div>
                      <div class="rounded-xl border border-brand-border-warm bg-brand-surface px-4 py-4 dark:border-brand-night-border dark:bg-brand-night-panel">
                          <p class="text-sm font-medium uppercase tracking-[0.08em] text-brand-gold dark:text-brand-night-gold">Soporte</p>
                          <p class="mt-1 text-lg font-semibold text-brand-ink-soft dark:text-brand-night-text">Expediente y explicación</p>
                          <p class="mt-2 text-sm leading-6 text-brand-text-muted dark:text-brand-night-muted">Documentos ordenados para que cada decisión pueda justificarse con facilidad.</p>
                      </div>
                  </div>
              </div>
          </div>
      </x-slot:art>
  </x-sections.hero>

  <x-sections.features
      {{--        container-class=""--}}
      grid-class="mt-10 grid gap-5 md:grid-cols-2"
      card-class="rounded-md border border-brand-border-warm bg-brand-surface p-6 dark:border-brand-night-border dark:bg-brand-night-raised"
      intro-text-class="mt-5 text-lg leading-7 text-brand-text-muted dark:text-brand-night-muted"
      text-class="mt-4 leading-7 text-brand-text-card dark:text-brand-night-muted"
      eyebrow="Qué cubrimos"
      title="La asesoría funciona mejor cuando la información económica no llega tarde ni fragmentada."
      text="Integramos contabilidad, fiscalidad y gestión laboral en un mismo circuito para que la comunidad pueda tomar decisiones con datos fiables y sin depender de hojas sueltas o explicaciones improvisadas."
      items='gestico.asesoria-cubrimos'
      :animateCards="true"
  />

  <x-sections.features
      {{--        container-class=""--}}
      grid-class="grid gap-4 sm:grid-cols-2"
      card-class="rounded-md border border-brand-border bg-white p-5 dark:border-brand-night-border dark:bg-brand-night-raised"
      intro-text-class="mt-5 text-lg leading-7 text-brand-text-muted dark:text-brand-night-muted"
      text-class="mt-3 leading-7 text-brand-text-card dark:text-brand-night-muted"
      eyebrow="Cómo trabajamos"
      title="Un circuito económico sencillo para que cada decisión tenga contexto y respaldo."
      text="La asesoría aporta más valor cuando no se limita a presentar obligaciones. Revisamos el movimiento económico, ordenamos la documentación de soporte y dejamos el expediente listo para consulta, revisión o junta."
      items='gestico.asesoria-trabajamos'
      :animateCards="true"
  />

  <section class="bg-brand-ink-panel py-20 text-white dark:bg-brand-night sm:py-24" >
    <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
      <div class="rounded-xl border border-white/10 bg-white/5 p-8 backdrop-blur-sm">
        <p class="text-sm font-normal uppercase tracking-[0.04em] text-brand-gold-bright dark:text-brand-night-gold">
          Valor añadido</p>
        <div class="mt-5 grid gap-8 lg:grid-cols-[1.1fr_.9fr] lg:items-center">
          <div>
            <h2 class="font-gestico-serif text-3xl font-semibold leading-tight sm:text-4xl">
                La cifra correcta importa, pero también la explicación que la acompaña.</h2>
            <p class="mt-4 max-w-2xl text-lg leading-7 text-brand-frost">
                Nuestro objetivo es que la comunidad entienda qué se paga, por qué se paga y cómo impacta cada decisión en la estabilidad económica del edificio.</p>
          </div>
          <div class="flex flex-col gap-3 sm:flex-row lg:justify-end">
            <a href="{{ route('contacto') }}"
               class="inline-flex justify-center rounded-md bg-brand-gold-bright px-6 py-3 text-sm font-normal text-brand-ink transition hover:bg-brand-gold-soft dark:bg-brand-night-gold dark:text-brand-night">
                Pedir asesoría
            </a>
            <a href="{{ route('servicios') }}"
               class="inline-flex justify-center rounded-md border border-white/20 px-6 py-3 text-sm font-normal text-white transition hover:bg-white/10">
                Ver servicios
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-layouts.public>

@vite(['resources/js/home-gsap.js'])
