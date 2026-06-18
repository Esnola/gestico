<?php

it('shows the location page with address and google maps embed', function (): void {
    $response = $this->get(route('location'));

    $response
        ->assertOk()
        ->assertSeeText('Estamos en Ribeira, cerca de ti y de tu comunidad.')
        ->assertSeeText(config('gestico.full_address'))
        ->assertSeeText(config('gestico.address_line_1'))
        ->assertSeeText('Cómo llegar')
        ->assertSee('www.google.com/maps/embed', false)
        ->assertSee('Mapa de ubicación de Gestico Barbanza', false)
        ->assertSee('data-contact-icon="phone"', false)
        ->assertSee('data-contact-icon="email"', false)
        ->assertSee('data-contact-icon="location"', false)
        ->assertSee('data-protected-email', false)
        ->assertDontSee('mailto:', false)
        ->assertDontSee(config('gestico.email'), false);
});
