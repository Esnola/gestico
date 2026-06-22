<?php

it('shows the advisory page with expanded economic and labor content', function (): void {
    $response = $this->get(route('asesoria'));

    $response
        ->assertOk()
        ->assertSee('home-gsap', false)
        ->assertSee('min-h-dvh', false)
        ->assertSee('data-typewriter', false)
        ->assertSeeText('Cuentas, impuestos y obligaciones laborales con una lectura clara.')
        ->assertSeeText('Vista rápida')
        ->assertSeeText('Control económico con contexto')
        ->assertSee('data-hero-badge-icon', false)
        ->assertSeeText('Orden')
        ->assertSeeText('Mensual y trimestral')
        ->assertSeeText('Contabilidad y cierres')
        ->assertSeeText('Fiscalidad y modelos')
        ->assertSeeText('Laboral y Seguridad Social')
        ->assertSee('data-service-icon', false)
        ->assertSee('data-gsap-stagger', false)
        ->assertSee('data-gsap-stagger-item', false)
        ->assertSee('data-gsap-card-emphasis-icon', false)
        ->assertSee('data-gsap-card-emphasis-number', false)
        ->assertSeeText('La cifra correcta importa, pero también la explicación que la acompaña.');
});
