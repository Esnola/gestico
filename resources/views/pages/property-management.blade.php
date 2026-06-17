<x-layouts.public title="Administración de fincas">
    <section class="bg-[#213639] py-16 text-white sm:py-20">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <p class="text-sm font-normal uppercase tracking-[0.04em] text-[#d4a824]">Administración de fincas</p>
            <h1 class="mt-4 max-w-4xl font-gestico-serif text-4xl font-semibold leading-tight sm:text-5xl">Acompañamos a presidentes y juntas con gestión diaria, criterio y documentación preparada.</h1>
            <p class="mt-6 max-w-3xl text-lg leading-8 text-[#d9e3e4]">Una comunidad funciona mejor cuando cada acuerdo tiene seguimiento, cada incidencia tiene responsable y cada euro está explicado.</p>
        </div>
    </section>

    <section class="bg-[#f7f4ed] py-16">
        <div class="mx-auto grid max-w-7xl gap-8 px-5 sm:px-6 lg:grid-cols-[.9fr_1.1fr] lg:px-8">
            <div>
                <h2 class="font-gestico-serif text-3xl font-semibold text-[#1f3336]">Gestión ordinaria y extraordinaria</h2>
                <p class="mt-5 leading-8 text-[#536467]">Nos encargamos del ciclo completo de administración: preparación de juntas, ejecución de acuerdos, atención a consultas, control de proveedores, reclamación de cuotas y seguimiento de incidencias.</p>
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                @foreach (['Juntas y actas', 'Mantenimiento', 'Seguros y siniestros', 'Morosidad', 'Contratos', 'Obras y derramas'] as $item)
                    <div class="rounded-md border border-[#d8d0bd] bg-white p-5 font-gestico-serif text-xl font-semibold text-[#294044]">{{ $item }}</div>
                @endforeach
            </div>
        </div>
    </section>
</x-layouts.public>
