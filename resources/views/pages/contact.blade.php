<x-layouts.public title="Contacto">
  <section class="bg-brand-mist py-20 dark:bg-brand-night sm:py-24" data-gsap-reveal>
    <div class="mx-auto grid max-w-7xl gap-10 px-5 sm:px-6 lg:grid-cols-[.9fr_1.1fr] lg:px-8">
      <div>
        <p class="text-sm font-normal uppercase tracking-[0.04em] text-brand-gold dark:text-brand-night-gold">
          Contacto</p>
        <h1 class="mt-4 font-gestico-serif text-4xl font-semibold leading-tight text-brand-ink dark:text-brand-night-text sm:text-5xl">
          Cuéntanos qué necesita tu comunidad.</h1>
        <p class="mt-6 text-lg leading-7 text-brand-text-muted dark:text-brand-night-muted">Prepararemos una propuesta
          ajustada al tamaño de la comunidad, situación económica, volumen de incidencias y necesidades de asesoría.</p>
        <div class="mt-8 grid gap-3 text-sm font-normal text-brand-text dark:text-brand-night-muted" data-gsap-stagger>
          <x-protected-email-link
                  class="inline-flex items-center gap-2 rounded-md border border-brand-border bg-white p-4 hover:border-brand-gold dark:border-brand-night-border dark:bg-brand-night-raised dark:hover:border-brand-night-gold"
                  data-gsap-stagger-item/>
          <a href="tel:{{ config('gestico.phone_href') }}"
             class="inline-flex items-center gap-2 rounded-md border border-brand-border bg-white p-4 hover:border-brand-gold dark:border-brand-night-border dark:bg-brand-night-raised dark:hover:border-brand-night-gold"
             data-gsap-stagger-item>
            <x-aux-icon type="phone"/>
            <span>{{ config('gestico.phone') }}</span>
          </a>
          <span class="inline-flex items-center gap-2 rounded-md border border-brand-border bg-white p-4 dark:border-brand-night-border dark:bg-brand-night-raised">
            <x-aux-icon type="location"/>
            {{ config('gestico.address_line_1') }} · {{ config('gestico.address_line_2') }}</span>
        </div>
      </div>
      <form data-contact-form data-contact-recipient="{{ config('gestico.protected_email') }}"
            class="rounded-lg border border-brand-border bg-white p-6 shadow-sm dark:border-brand-night-border dark:bg-brand-night-panel">
        <div class="grid gap-4">
          <label class="grid gap-2 text-sm font-normal text-brand-text-strong dark:text-brand-night-text">Nombre
            <input type="text"
                   name="name"
                   required
                   class="rounded-md border border-brand-border px-4 py-3 font-normal outline-none ring-brand-gold focus:ring-2 dark:border-brand-night-border dark:bg-brand-night-raised dark:text-brand-night-text">
          </label>
          <label class="grid gap-2 text-sm font-normal text-brand-text-strong dark:text-brand-night-text">Email
            <input type="email"
                   name="email"
                   required
                   class="rounded-md border border-brand-border px-4 py-3 font-normal outline-none ring-brand-gold focus:ring-2 dark:border-brand-night-border dark:bg-brand-night-raised dark:text-brand-night-text">
          </label>
          <label class="absolute left-[-10000px] top-auto size-px overflow-hidden" aria-hidden="true">Web
            <input type="text" name="website" tabindex="-1" autocomplete="off">
          </label>
          <label class="grid gap-2 text-sm font-normal text-brand-text-strong dark:text-brand-night-text">Comunidad o
            consulta
            <textarea rows="5"
                      name="message"
                      required
                      class="rounded-md border border-brand-border px-4 py-3 font-normal outline-none ring-brand-gold focus:ring-2 dark:border-brand-night-border dark:bg-brand-night-raised dark:text-brand-night-text"></textarea>
          </label>
          <p data-contact-form-status
             class="hidden rounded-md border border-brand-border-warm bg-brand-surface px-4 py-3 text-sm text-brand-text-muted dark:border-brand-night-border dark:bg-brand-night-raised dark:text-brand-night-muted"></p>
          <button type="button"
                  class="flex items-center justify-center gap-2 bg-brand-gold hover:bg-brand-gold-hover dark:bg-brand-night-gold dark:hover:bg-brand-gold-bright px-5 py-3 rounded-md font-normal text-white dark:text-brand-night text-sm transition">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"></path>
            </svg>
            Enviar consulta
          </button>
        </div>
      </form>
    </div>
  </section>

  <x-sections.features
      data-gsap-reveal
      section-class="bg-white py-20 sm:py-24 dark:bg-brand-night-panel"
      container-class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8"
      grid-class="mt-10 grid gap-4 sm:grid-cols-2"
      card-class="rounded-md border border-brand-border-warm bg-brand-surface p-5 dark:border-brand-night-border dark:bg-brand-night-raised"
      intro-text-class="mt-5 leading-7 text-brand-text-muted dark:text-brand-night-muted"
      text-class="mt-3 leading-7 text-brand-text-card dark:text-brand-night-muted"
      eyebrow="Para orientar la propuesta"
      title="Cuanta más realidad veamos al inicio, mejor podremos ajustar la gestión."
      text="No todas las comunidades necesitan el mismo nivel de acompañamiento. Antes de proponer, conviene entender el volumen de viviendas, el estado de la documentación, las incidencias abiertas y las obligaciones económicas o laborales."
      :items="config('gestico.contact')"
  />
</x-layouts.public>
