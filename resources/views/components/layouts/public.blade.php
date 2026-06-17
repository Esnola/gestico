<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        @include('partials.head', ['title' => $title ?? null])
        <meta name="description" content="{{ $description ?? 'Gestico Barbanza gestiona comunidades de propietarios, administración de fincas y asesoría económico-financiera, fiscal y laboral.' }}">
    </head>
    <body class="bg-[#f7f4ed] font-gestico-sans font-light text-[#1e2a2c] antialiased">
        <div class="min-h-screen overflow-hidden">
            <header class="sticky top-0 z-50 border-b border-[#d8d0bd]/70 bg-[#f7f4ed]/92 backdrop-blur">
                <div class="mx-auto flex max-w-7xl items-center justify-between gap-5 px-5 py-3 sm:px-6 lg:px-8">
                    <a href="{{ route('home') }}" class="flex items-center gap-3" aria-label="Gestico Barbanza">
                        <img src="{{ asset('images/gesticobarbanza.png') }}" alt="Gestico Barbanza" class="h-12 w-auto sm:h-14">
                    </a>

                    <nav class="hidden items-center gap-7 text-sm font-normal text-[#415154] lg:flex">
                        <a class="transition hover:text-[#a98211]" href="{{ route('services') }}">Servicios</a>
                        <a class="transition hover:text-[#a98211]" href="{{ route('property-management') }}">Administración de fincas</a>
                        <a class="transition hover:text-[#a98211]" href="{{ route('advisory') }}">Asesoría</a>
                        <a class="transition hover:text-[#a98211]" href="{{ route('client-portal') }}">Área clientes</a>
                        <a class="transition hover:text-[#a98211]" href="{{ route('contact') }}">Contacto</a>
                    </nav>

                    <div class="flex items-center gap-2">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="hidden rounded-md border border-[#b88c16]/35 px-4 py-2 text-sm font-normal text-[#75560a] transition hover:border-[#b88c16] hover:bg-white sm:inline-flex">Panel</a>
                        @else
                            <a href="{{ route('login') }}" class="hidden rounded-md border border-[#b88c16]/35 px-4 py-2 text-sm font-normal text-[#75560a] transition hover:border-[#b88c16] hover:bg-white sm:inline-flex">Acceso clientes</a>
                        @endauth
                        <a href="{{ route('contact') }}" class="rounded-md bg-[#a98211] px-4 py-2 text-sm font-normal text-white shadow-sm transition hover:bg-[#8d6b0d]">Solicitar propuesta</a>
                    </div>
                </div>
                <nav class="flex gap-4 overflow-x-auto border-t border-[#d8d0bd]/70 px-5 py-3 text-sm font-normal text-[#415154] sm:px-6 lg:hidden">
                    <a class="shrink-0 hover:text-[#a98211]" href="{{ route('services') }}">Servicios</a>
                    <a class="shrink-0 hover:text-[#a98211]" href="{{ route('property-management') }}">Fincas</a>
                    <a class="shrink-0 hover:text-[#a98211]" href="{{ route('advisory') }}">Asesoría</a>
                    <a class="shrink-0 hover:text-[#a98211]" href="{{ route('client-portal') }}">Clientes</a>
                    <a class="shrink-0 hover:text-[#a98211]" href="{{ route('contact') }}">Contacto</a>
                </nav>
            </header>

            <main>
                {{ $slot }}
            </main>

            <footer class="border-t border-[#d8d0bd] bg-[#213639] text-white">
                <div class="mx-auto grid max-w-7xl gap-10 px-5 py-12 sm:px-6 lg:grid-cols-[1.3fr_1fr_1fr] lg:px-8">
                    <div>
                        <img src="{{ asset('images/gesticobarbanza.png') }}" alt="Gestico Barbanza" class="h-16 w-auto brightness-125">
                        <p class="mt-5 max-w-md text-sm leading-6 text-[#d9e3e4]">Gestión integral de comunidades con criterio profesional, trazabilidad financiera y comunicación clara para presidentes, juntas y propietarios.</p>
                    </div>
                    <div>
                        <p class="font-gestico-serif text-xl font-semibold text-[#d4a824]">Web</p>
                        <div class="mt-4 grid gap-2 text-sm text-[#d9e3e4]">
                            <a href="{{ route('services') }}" class="hover:text-white">Servicios</a>
                            <a href="{{ route('property-management') }}" class="hover:text-white">Administración de fincas</a>
                            <a href="{{ route('advisory') }}" class="hover:text-white">Asesoría</a>
                            <a href="{{ route('client-portal') }}" class="hover:text-white">Área clientes</a>
                        </div>
                    </div>
                    <div>
                        <p class="font-gestico-serif text-xl font-semibold text-[#d4a824]">Contacto</p>
                        <div class="mt-4 grid gap-2 text-sm text-[#d9e3e4]">
                            <span>{{ config('gestico.address_line_1') }}</span>
                            <span>{{ config('gestico.address_line_2') }}</span>
                            <a href="mailto:{{ config('gestico.email') }}" class="hover:text-white">{{ config('gestico.email') }}</a>
                            <a href="tel:{{ config('gestico.phone_href') }}" class="hover:text-white">{{ config('gestico.phone') }}</a>
                            <a href="{{ route('contact') }}" class="hover:text-white">Pedir información</a>
                        </div>
                    </div>
                </div>
                <div class="border-t border-white/10 px-5 py-5 text-center text-xs text-[#b8c8ca]">© {{ date('Y') }} Gestico Barbanza. Gestión integral de comunidades.</div>
            </footer>
        </div>
    </body>
</html>
