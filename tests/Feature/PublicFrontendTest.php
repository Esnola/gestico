<?php

it('renders the public pages that make up the frontend', function (string $routeName, string $expectedText): void {
    $response = $this->get(route($routeName));

    $response
        ->assertOk()
        ->assertSeeText($expectedText);
})->with([
    ['home', 'Tu comunidad, gestionada con cuentas claras y respuesta profesional.'],
    ['servicios', 'Gestión con visión práctica, control económico y respuesta ágil.'],
    ['asesoria', 'Cuentas, impuestos y obligaciones laborales con una lectura clara.'],
    ['fincas', 'Administración pensada para resolver el día a día de la comunidad.'],
    ['location', 'Estamos en Ribeira, cerca de ti y de tu comunidad.'],
    ['contacto', 'Cuéntanos qué necesita tu comunidad.'],
    ['client-portal', 'La zona privada se construirá después; la web ya deja preparada la entrada.'],
]);

it('keeps the public client area focused on contact instead of login', function (): void {
    $response = $this->get(route('client-portal'));

    $response
        ->assertOk()
        ->assertSeeText('Hablar con nosotros')
        ->assertDontSeeText('Ir al acceso')
        ->assertDontSee('route(\'login\')', false);
});
