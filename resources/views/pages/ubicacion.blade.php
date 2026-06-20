<x-layouts.public title="Ubicación">
  <section class="bg-brand-mist py-20 dark:bg-brand-night sm:py-24" data-gsap-reveal>
    <div class="mx-auto grid max-w-7xl items-center gap-10 px-5 sm:px-6 lg:grid-cols-[.85fr_1.15fr] lg:px-8">
      <div>
        <p class="text-sm font-normal uppercase tracking-[0.04em] text-brand-gold dark:text-brand-night-gold">
          Ubicación</p>
        <h1 class="mt-4 max-w-3xl font-gestico-serif text-4xl font-semibold leading-tight text-brand-ink dark:text-brand-night-text sm:text-5xl">
          Estamos en Ribeira, cerca de ti y de tu comunidad.</h1>
        <p class="mt-6 max-w-2xl text-lg leading-7 text-brand-text-muted dark:text-brand-night-muted">Puedes
          encontrarnos en {{ config('gestico.full_address') }}. Si necesitas preparar una visita, revisar documentación
          o comentar la situación de tu comunidad, te atenderemos desde nuestra oficina.</p>
        <div class="mt-8 flex flex-col gap-3 sm:flex-row">
          <a href="{{ config('gestico.maps_directions_url') }}" target="_blank" rel="noopener noreferrer"
             class="inline-flex justify-center rounded-md bg-brand-gold px-6 py-3 text-sm font-normal text-white shadow-sm transition hover:bg-brand-gold-hover dark:bg-brand-night-gold dark:text-brand-night dark:hover:bg-brand-gold-bright">Cómo
            llegar</a>
          <a href="{{ route('contacto') }}"
             class="inline-flex justify-center rounded-md border border-brand-stone bg-white/70 px-6 py-3 text-sm font-normal text-brand-text-strong transition hover:border-brand-gold dark:border-brand-night-border dark:bg-brand-night-raised dark:text-brand-night-text dark:hover:border-brand-night-gold">Contactar</a>
        </div>
      </div>

      <div class="grid gap-4 rounded-lg border border-brand-border bg-white p-5 dark:border-brand-night-border dark:bg-brand-night-panel">
        <div>
          <p class="text-sm font-normal uppercase tracking-[0.04em] text-brand-gold dark:text-brand-night-gold">
            Dirección</p>
          <div class="mt-3 flex items-start gap-3">
            <x-aux-icon type="location" class="mt-2 size-5 text-brand-gold dark:text-brand-night-gold"/>
            <div>
              <p class="font-gestico-serif text-3xl font-semibold text-brand-ink-soft dark:text-brand-night-text">{{ config('gestico.address_line_1') }}</p>
              <p class="mt-2 text-lg text-brand-text-muted dark:text-brand-night-muted">{{ config('gestico.address_line_2') }}</p>
            </div>
          </div>
        </div>
        <div class="grid gap-3 text-sm font-normal text-brand-text dark:text-brand-night-muted sm:grid-cols-2">
          <a href="tel:{{ config('gestico.phone_href') }}"
             class="inline-flex items-center gap-2 rounded-md border border-brand-border-warm bg-brand-surface p-4 transition hover:border-brand-gold dark:border-brand-night-border dark:bg-brand-night-raised dark:hover:border-brand-night-gold">
            <x-aux-icon type="phone"/>
            <span>{{ config('gestico.phone') }}</span>
          </a>
          <x-protected-email-link
                  class="inline-flex items-center gap-2 rounded-md border border-brand-border-warm bg-brand-surface p-4 transition hover:border-brand-gold dark:border-brand-night-border dark:bg-brand-night-raised dark:hover:border-brand-night-gold"/>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-white py-20 dark:bg-brand-night-panel sm:py-24" data-gsap-reveal>
    <div class="mx-auto grid max-w-7xl gap-8 px-5 sm:px-6 lg:grid-cols-[.7fr_1.3fr] lg:px-8">
      <div>
        <p class="text-sm font-normal uppercase tracking-[0.04em] text-brand-gold dark:text-brand-night-gold">Mapa</p>
        <h2 class="mt-4 font-gestico-serif text-3xl font-semibold text-brand-ink dark:text-brand-night-text sm:text-4xl">
          Localiza la oficina y planifica tu visita.</h2>
        <p class="mt-5 leading-7 text-brand-text-muted dark:text-brand-night-muted">El mapa abre la ubicación en Google
          Maps para que puedas calcular ruta desde tu posición o compartir indicaciones con otros miembros de la
          comunidad.</p>
      </div>

      <div class="overflow-hidden rounded-lg border border-brand-border bg-brand-surface shadow-sm dark:border-brand-night-border dark:bg-brand-night-raised">
        <iframe
                title="Mapa de ubicación de Gestico Barbanza"
                src="{{ config('gestico.maps_satelite') }}"
                class="h-105 w-full border-0 sm:h-125"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                allowfullscreen></iframe>
      </div>
    </div>
  </section>
</x-layouts.public>
