<x-layouts.public title="Área clientes">
    <section class="bg-[#213639] py-16 text-white sm:py-20">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <p class="text-sm font-bold uppercase text-[#d4a824]">Área clientes</p>
            <h1 class="mt-4 max-w-4xl text-4xl font-black leading-tight sm:text-5xl">La zona privada se construirá después; la web ya deja preparada la entrada.</h1>
            <p class="mt-6 max-w-3xl text-lg leading-8 text-[#d9e3e4]">Más adelante incorporaremos acceso seguro para consultar información de la comunidad. Por ahora mantenemos el frontend público y la estructura técnica lista.</p>
            <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                <a href="{{ route('login') }}" class="inline-flex justify-center rounded-md bg-[#d4a824] px-6 py-3 text-sm font-bold text-[#1f3336] transition hover:bg-[#e2bd3b]">Ir al acceso</a>
                <a href="{{ route('contact') }}" class="inline-flex justify-center rounded-md border border-white/25 px-6 py-3 text-sm font-bold text-white transition hover:bg-white/10">Consultar implantación</a>
            </div>
        </div>
    </section>

    <section class="bg-[#f7f4ed] py-16">
        <div class="mx-auto grid max-w-7xl gap-4 px-5 sm:px-6 md:grid-cols-2 lg:px-8">
            @foreach (['Documentación comunitaria', 'Estados de cuentas', 'Facturas y presupuestos', 'Avisos y comunicaciones'] as $item)
                <div class="rounded-lg border border-[#d8d0bd] bg-white p-6">
                    <h2 class="text-xl font-black text-[#253b3e]">{{ $item }}</h2>
                    <p class="mt-3 leading-7 text-[#5d6f72]">Módulo previsto para la siguiente fase del proyecto, con permisos y acceso privado por cliente.</p>
                </div>
            @endforeach
        </div>
    </section>
</x-layouts.public>
