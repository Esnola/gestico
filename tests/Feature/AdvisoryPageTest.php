<?php

it('shows the advisory page with expanded economic and labor content', function (): void {
    $response = $this->get(route('asesoria'));

    $response
        ->assertOk()
        ->assertSee('min-h-dvh', false)
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
        ->assertSeeText('La cifra correcta importa, pero también la explicación que la acompaña.');
});
