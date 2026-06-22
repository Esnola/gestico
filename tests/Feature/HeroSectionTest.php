<?php

use Illuminate\Support\Facades\Blade;

it('renders the hero component with its contract intact', function (): void {
    $badges = [
        ['label' => 'Gestión económica', 'icon' => 'coins'],
        'Documentación transparente',
    ];

    $html = Blade::render(<<<'BLADE'
<x-sections.hero
    eyebrow="Administración de fincas y asesoría para comunidades"
    title="Tu comunidad, gestionada con cuentas claras y respuesta profesional."
    intro="Gestico Barbanza coordina la gestión administrativa, económico-financiera, fiscal y laboral de comunidades de propietarios para que la presidencia y la junta tengan control sin cargar con el trabajo diario."
    :badges="$badges"
    primary-cta-label="Solicitar una propuesta"
    primary-cta-href="contacto"
    secondary-cta-label="Ver servicios"
    secondary-cta-href="servicios"
    datos="gestico.home_hero"
>
    <x-slot:art>
        <div data-test-art="hero-art">Hero art</div>
    </x-slot:art>
</x-sections.hero>
BLADE, [
        'badges' => $badges,
    ]);

    expect($html)
        ->toContain('Administración de fincas y asesoría para comunidades')
        ->toContain('Tu comunidad, gestionada con cuentas claras y respuesta profesional.')
        ->toContain('Gestico Barbanza coordina la gestión administrativa, económico-financiera, fiscal y laboral de comunidades de propietarios para que la presidencia y la junta tengan control sin cargar con el trabajo diario.')
        ->toContain('data-typewriter')
        ->toContain('animated-paragraph')
        ->toContain('data-test-art="hero-art"')
        ->toContain(route('contacto'))
        ->toContain(route('servicios'))
        ->toContain('Gestión económica')
        ->toContain('Documentación transparente')
        ->toContain('data-hero-badge-icon="true"')
        ->toContain('24h')
        ->toContain('360°')
        ->toContain('1');
});
