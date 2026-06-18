<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        @include('partials.head', ['title' => $title ?? null])
        <meta name="description" content="{{ $description ?? 'Gestico Barbanza gestiona comunidades de propietarios, administración de fincas y asesoría económico-financiera, fiscal y laboral.' }}">
    </head>
    <body class="bg-brand-cream font-gestico-sans font-light text-brand-ink-dark antialiased dark:bg-brand-night dark:text-brand-night-text">
        <div class="min-h-screen">
            <header class="sticky top-0 z-50 border-b border-white/50 bg-white/55 backdrop-blur-sm shadow-sm shadow-black/5 dark:border-white/10 dark:bg-brand-night-panel/55 dark:shadow-black/20">
                <div class="mx-auto flex max-w-7xl items-center justify-between gap-5 px-5 py-3 sm:px-6 lg:px-8">
                    <a href="{{ route('home') }}" class="flex items-center gap-3" aria-label="Gestico Barbanza">
                        <img src="{{ asset('images/gesticobarbanza.png') }}" alt="Gestico Barbanza" class="h-12 w-auto rounded-md dark:bg-transparent px-2 py-1 sm:h-14">
                    </a>

                    <nav class="hidden items-center gap-7 text-sm font-normal text-brand-text dark:text-brand-night-muted lg:flex">
                        <a class="transition hover:text-brand-gold dark:hover:text-brand-night-gold" href="{{ route('services') }}">Servicios</a>
                        <a class="transition hover:text-brand-gold dark:hover:text-brand-night-gold" href="{{ route('property-management') }}">Administración de fincas</a>
                        <a class="transition hover:text-brand-gold dark:hover:text-brand-night-gold" href="{{ route('advisory') }}">Asesoría</a>
                        <a class="transition hover:text-brand-gold dark:hover:text-brand-night-gold" href="{{ route('client-portal') }}">Área clientes</a>
                        <a class="transition hover:text-brand-gold dark:hover:text-brand-night-gold" href="{{ route('contact') }}">Contacto</a>
                    </nav>

                    <div class="flex items-center gap-2">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="hidden rounded-md border border-brand-gold-border/35 px-4 py-2 text-sm font-normal text-brand-gold-text transition hover:border-brand-gold-border hover:bg-white dark:border-brand-night-border dark:text-brand-night-gold dark:hover:border-brand-night-gold dark:hover:bg-brand-night-raised sm:inline-flex">Panel</a>
                        @else
                            <a href="{{ route('login') }}" class="hidden rounded-md border border-brand-gold-border/35 px-4 py-2 text-sm font-normal text-brand-gold-text transition hover:border-brand-gold-border hover:bg-white dark:border-brand-night-border dark:text-brand-night-gold dark:hover:border-brand-night-gold dark:hover:bg-brand-night-raised sm:inline-flex">Acceso clientes</a>
                        @endauth
                        <a href="{{ route('contact') }}" class="rounded-md bg-brand-gold px-4 py-2 text-sm font-normal text-white shadow-sm transition hover:bg-brand-gold-hover dark:bg-brand-night-gold dark:text-brand-night dark:hover:bg-brand-gold-bright">Solicitar propuesta</a>
                    </div>
                    <button type="button"
                            data-theme-toggle
                            class="inline-flex size-10 shrink-0 items-center justify-center rounded-md border border-brand-gold-border/35 bg-white/70 text-brand-gold-text transition hover:border-brand-gold-border hover:bg-white focus:outline-none focus:ring-2 focus:ring-brand-gold focus:ring-offset-2 focus:ring-offset-brand-cream dark:border-brand-night-border dark:bg-brand-night-raised dark:text-brand-night-gold dark:hover:border-brand-night-gold dark:hover:bg-brand-night-surface dark:focus:ring-offset-brand-night-panel cursor-pointer"
                            aria-label="Cambiar modo oscuro"
                            aria-pressed="false">
                        <svg class="size-5 dark:hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M12 4V2m0 20v-2m8-8h2M2 12h2m13.66-5.66 1.42-1.42M4.92 19.08l1.42-1.42m0-11.32L4.92 4.92m14.16 14.16-1.42-1.42" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                            <circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="1.8"/>
                        </svg>
                        <svg class="hidden size-5 dark:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M20.5 15.3A8.5 8.5 0 0 1 8.7 3.5 7.2 7.2 0 1 0 20.5 15.3Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
                <nav class="flex gap-4 overflow-x-auto border-t border-brand-border/70 px-5 py-3 text-sm font-normal text-brand-text dark:border-brand-night-border dark:text-brand-night-muted sm:px-6 lg:hidden">
                    <a class="shrink-0 hover:text-brand-gold dark:hover:text-brand-night-gold" href="{{ route('services') }}">Servicios</a>
                    <a class="shrink-0 hover:text-brand-gold dark:hover:text-brand-night-gold" href="{{ route('property-management') }}">Fincas</a>
                    <a class="shrink-0 hover:text-brand-gold dark:hover:text-brand-night-gold" href="{{ route('advisory') }}">Asesoría</a>
                    <a class="shrink-0 hover:text-brand-gold dark:hover:text-brand-night-gold" href="{{ route('client-portal') }}">Clientes</a>
                    <a class="shrink-0 hover:text-brand-gold dark:hover:text-brand-night-gold" href="{{ route('contact') }}">Contacto</a>
                </nav>
            </header>

            <main class="overflow-x-hidden">
                {{ $slot }}
            </main>

            <footer class="border-t border-brand-border bg-brand-ink-panel text-white dark:border-brand-night-border dark:bg-brand-night-panel">
                <div class="mx-auto grid max-w-7xl gap-10 px-5 py-12 sm:px-6 lg:grid-cols-[1.3fr_1fr_1fr] lg:px-8">
                    <div>
                        <img src="{{ asset('images/gesticobarbanza.png') }}" alt="Gestico Barbanza" class="h-16 w-auto brightness-125">
                        <p class="mt-5 max-w-md text-sm leading-6 text-brand-frost">Gestión integral de comunidades con criterio profesional, trazabilidad financiera y comunicación clara para presidentes, juntas y propietarios.</p>
                    </div>
                    <div>
                        <p class="font-gestico-serif text-xl font-semibold text-brand-gold-bright">Web</p>
                        <div class="mt-4 grid gap-2 text-sm text-brand-frost">
                            <a href="{{ route('services') }}" class="hover:text-white">Servicios</a>
                            <a href="{{ route('property-management') }}" class="hover:text-white">Administración de fincas</a>
                            <a href="{{ route('advisory') }}" class="hover:text-white">Asesoría</a>
                            <a href="{{ route('client-portal') }}" class="hover:text-white">Área clientes</a>
                        </div>
                    </div>
                    <div>
                        <p class="font-gestico-serif text-xl font-semibold text-brand-gold-bright">Contacto</p>
                        <div class="mt-4 grid gap-2 text-sm text-brand-frost">
                            <span>{{ config('gestico.address_line_1') }}</span>
                            <span>{{ config('gestico.address_line_2') }}</span>
                            <a href="mailto:{{ config('gestico.email') }}" class="hover:text-white">{{ config('gestico.email') }}</a>
                            <a href="tel:{{ config('gestico.phone_href') }}" class="hover:text-white">{{ config('gestico.phone') }}</a>
                            <a href="{{ route('contact') }}" class="hover:text-white">Pedir información</a>
                        </div>
                    </div>
                </div>
                <div class="border-t border-white/10 px-5 py-5 text-center text-xs text-brand-frost-muted">© {{ date('Y') }} Gestico Barbanza. Gestión integral de comunidades.</div>
            </footer>
        </div>
        <x-cookies />
    </body>
</html>
