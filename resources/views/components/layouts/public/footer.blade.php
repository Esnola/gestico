<footer class="border-t border-brand-border bg-brand-ink-panel text-white dark:border-brand-night-border dark:bg-brand-night-panel">
    <div class="mx-auto grid max-w-7xl gap-10 px-5 py-12 sm:px-6 lg:grid-cols-[1.3fr_1fr_1fr] lg:px-8">
        <div>
            <img src="{{ asset('images/gesticobarbanza.png') }}" alt="Gestico Barbanza" width="600" height="258" loading="lazy" decoding="async" class="h-16 w-auto brightness-125">
            <p class="mt-5 max-w-md text-sm leading-6 text-brand-frost">Gestión integral de comunidades con criterio
                profesional, trazabilidad financiera y comunicación clara para presidentes, juntas y propietarios.</p>
        </div>

        <div>
            <p class="font-gestico-serif text-xl font-semibold text-brand-gold-bright">Web</p>
            {{--<div class="mt-4 grid grid-cols-2 gap-2 text-sm text-brand-frost">--}}
                <x-main-links :isfooter="true"/>
           {{-- </div>--}}
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
