<x-layouts.public title="Servicios">
    <section class="bg-[#eef1ec] py-16 sm:py-20">
        <div class="mx-auto max-w-7xl px-5 sm:px-6 lg:px-8">
            <p class="text-sm font-normal uppercase tracking-[0.04em] text-[#a98211]">Servicios</p>
            <h1 class="mt-4 max-w-4xl font-gestico-serif text-4xl font-semibold leading-tight text-[#1f3336] sm:text-5xl">Gestión integral para comunidades que quieren funcionar con menos fricción.</h1>
            <p class="mt-6 max-w-3xl text-lg leading-8 text-[#536467]">Nos ocupamos de la administración ordinaria y extraordinaria de la comunidad: economía, fiscalidad, laboral, proveedores, documentación y comunicación con propietarios.</p>
        </div>
    </section>

    <section class="bg-white py-16">
        <div class="mx-auto grid max-w-7xl gap-5 px-5 sm:px-6 md:grid-cols-2 lg:px-8">
            @foreach ([
                ['Gestión económico-financiera', 'Presupuestos anuales, contabilidad, remesas, conciliación bancaria, pagos a proveedores, estados de cuentas e informes de seguimiento.'],
                ['Obligaciones fiscales y laborales', 'Presentación y control de obligaciones fiscales, gestión laboral, nóminas, seguros sociales y archivo documental.'],
                ['Administración y juntas', 'Convocatorias, actas, ejecución de acuerdos, custodia documental, atención a propietarios y acompañamiento a la presidencia.'],
                ['Proveedores e incidencias', 'Solicitud de presupuestos, coordinación de reparaciones, seguimiento de siniestros, mantenimiento y control de contratos.'],
                ['Transparencia documental', 'Organización de contratos, facturas, presupuestos, informes y documentación clave para facilitar la consulta.'],
                ['Asesoramiento continuo', 'Criterio profesional para decisiones de gasto, derramas, morosidad, contratación y planificación de obras.'],
            ] as [$title, $text])
                <article class="rounded-lg border border-[#e2dacb] bg-[#fbfaf6] p-6">
                    <h2 class="font-gestico-serif text-2xl font-semibold text-[#253b3e]">{{ $title }}</h2>
                    <p class="mt-4 leading-7 text-[#5d6f72]">{{ $text }}</p>
                </article>
            @endforeach
        </div>
    </section>
</x-layouts.public>
