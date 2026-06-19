<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<x-head title="{{ $title ?? null }}"/>

<body class="bg-brand-cream font-gestico-sans font-light text-brand-ink-dark antialiased dark:bg-brand-night dark:text-brand-night-text">
<div class="min-h-screen">
  <header class="sticky top-0 z-50 border-b border-white/50 bg-white/55 backdrop-blur-sm shadow-sm shadow-black/5 dark:border-white/10 dark:bg-brand-night-panel/55 dark:shadow-black/20">
    <div class="mx-auto flex max-w-7xl items-center justify-between gap-4 px-4 py-3 sm:px-6 lg:px-8">
      <a href="{{ route('home') }}" class="flex items-center gap-3" aria-label="Gestico Barbanza">
        <img src="{{ asset('images/gesticobarbanza.png') }}" alt="Gestico Barbanza"
             class="h-11 w-auto rounded-md px-2 py-1 dark:bg-transparent sm:h-14">
      </a>
      <!-- Links Header -->
      <x-header-links :isfooter="false"/>

      <div class="flex items-center gap-2">
        <button type="button"
                data-theme-toggle
                class="inline-flex size-10 shrink-0 cursor-pointer items-center justify-center rounded-md border border-brand-gold-border/35 bg-white/70 text-brand-gold-text transition hover:border-brand-gold-border hover:bg-white focus:outline-none focus:ring-2 focus:ring-brand-gold focus:ring-offset-2 focus:ring-offset-brand-cream dark:border-brand-night-border dark:bg-brand-night-raised dark:text-brand-night-gold dark:hover:border-brand-night-gold dark:hover:bg-brand-night-surface dark:focus:ring-offset-brand-night-panel"
                aria-label="Cambiar modo oscuro"
                aria-pressed="false">
          <svg class="size-5 dark:hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
               aria-hidden="true">
            <path d="M12 4V2m0 20v-2m8-8h2M2 12h2m13.66-5.66 1.42-1.42M4.92 19.08l1.42-1.42m0-11.32L4.92 4.92m14.16 14.16-1.42-1.42"
                  stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            <circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="1.8"/>
          </svg>
          <svg class="hidden size-5 dark:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
               aria-hidden="true">
            <path d="M20.5 15.3A8.5 8.5 0 0 1 8.7 3.5 7.2 7.2 0 1 0 20.5 15.3Z" stroke="currentColor" stroke-width="1.8"
                  stroke-linejoin="round"/>
          </svg>
        </button>
        <button type="button"
                data-mobile-menu-open
                class="inline-flex size-10 shrink-0 cursor-pointer items-center justify-center rounded-md border border-brand-gold-border/35 bg-white/70 text-brand-gold-text transition hover:border-brand-gold-border hover:bg-white focus:outline-none focus:ring-2 focus:ring-brand-gold focus:ring-offset-2 focus:ring-offset-brand-cream dark:border-brand-night-border dark:bg-brand-night-raised dark:text-brand-night-gold dark:hover:border-brand-night-gold dark:hover:bg-brand-night-surface dark:focus:ring-offset-brand-night-panel lg:hidden"
                aria-label="Abrir menú"
                aria-controls="mobile-menu"
                aria-expanded="false">
          <svg class="size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
               aria-hidden="true">
            <path d="M4 7h16M4 12h16M4 17h16" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
          </svg>
        </button>
      </div>
    </div>

    <div id="mobile-menu"
         data-mobile-menu
         class="fixed inset-0 z-60 lg:hidden"
         role="dialog"
         aria-modal="true"
         aria-labelledby="mobile-menu-title"
         hidden>
      <div data-mobile-menu-panel
           class="absolute inset-y-0 left-0 z-10 flex min-h-dvh w-full  -translate-x-full flex-col border-r border-brand-border bg-brand-surface shadow-2xl transition-transform duration-300 ease-out dark:border-brand-night-border dark:bg-brand-night-panel">
        <div class="flex items-center justify-between px-5 py-5 max-">
          <p id="mobile-menu-title"
             class="font-gestico-serif text-2xl font-semibold text-brand-ink dark:text-brand-night-text">Menú</p>
          <button type="button"
                  data-mobile-menu-close
                  class="inline-flex size-10 shrink-0 cursor-pointer items-center justify-center rounded-md border border-brand-gold-border/35 bg-brand-surface text-brand-gold-text transition hover:border-brand-gold-border hover:bg-white focus:outline-none focus:ring-2 focus:ring-brand-gold focus:ring-offset-2 focus:ring-offset-brand-cream dark:border-brand-night-border dark:bg-brand-night-raised dark:text-brand-night-gold dark:hover:border-brand-night-gold dark:hover:bg-brand-night-surface dark:focus:ring-offset-brand-night-panel"
                  aria-label="Cerrar menú">
            <svg class="size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                 aria-hidden="true">
              <path d="m6 6 12 12M18 6 6 18" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            </svg>
          </button>
        </div>
        <x-header-links variant="mobile" aria-label="Menú principal móvil"/>
      </div>
    </div>
  </header>

  <main class="overflow-x-clip" data-gsap-page>
    {{ $slot }}
  </main>

  <footer class="border-t border-brand-border bg-brand-ink-panel text-white dark:border-brand-night-border dark:bg-brand-night-panel">
    <div class="mx-auto grid max-w-7xl gap-10 px-5 py-12 sm:px-6 lg:grid-cols-[1.3fr_1fr_1fr] lg:px-8">
      <div>
        <img src="{{ asset('images/gesticobarbanza.png') }}" alt="Gestico Barbanza" class="h-16 w-auto brightness-125">
        <p class="mt-5 max-w-md text-sm leading-6 text-brand-frost">Gestión integral de comunidades con criterio
          profesional, trazabilidad financiera y comunicación clara para presidentes, juntas y propietarios.</p>
      </div>
      <div>
        <p class="font-gestico-serif text-xl font-semibold text-brand-gold-bright">Web</p>
        <div class="mt-4 grid gap-2 text-sm text-brand-frost">
          <!-- LInks Footer -->
          <x-header-links :isfooter="true"/>
        </div>
      </div>
      <div>
        <p class="font-gestico-serif text-xl font-semibold text-brand-gold-bright">Contacto</p>
        <div class="mt-4 grid gap-2 text-sm text-brand-frost">
          <span class="inline-flex items-start gap-2">
            <x-aux-icon type="location" class="mt-0.5"/>
            <span>{{ config('gestico.address_line_1') }} · {{ config('gestico.address_line_2') }}</span>
          </span>
          <x-protected-email-link class="inline-flex items-center gap-2 hover:text-white"/>
          <a href="tel:{{ config('gestico.phone_href') }}" class="inline-flex items-center gap-2 hover:text-white">
            <x-aux-icon type="phone"/>
            <span>{{ config('gestico.phone') }}</span>
          </a>
          <a href="{{ route('location') }}" class="hover:text-white">Ver ubicación</a>
          <a href="{{ route('contacto') }}" class="hover:text-white">Pedir información</a>
        </div>
      </div>
    </div>
    <div class="border-t border-white/10 px-5 py-5 text-center text-xs text-brand-frost-muted">© {{ date('Y') }} Gestico
      Barbanza. Gestión integral de comunidades.
    </div>
  </footer>
</div>
<x-cookies/>
</body>
</html>
