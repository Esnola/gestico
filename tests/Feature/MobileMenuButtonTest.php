<?php

it('renders the open mobile menu button with menu controls', function (): void {
    $view = $this->blade(
        '<x-mobile-menu-button action="open" aria-controls="mobile-menu" aria-expanded="false"/>'
    );

    $view
        ->assertSee('data-mobile-menu-open', false)
        ->assertDontSee('data-mobile-menu-close', false)
        ->assertSee('aria-label="Abrir menú"', false)
        ->assertSee('aria-controls="mobile-menu"', false)
        ->assertSee('aria-expanded="false"', false)
        ->assertSee('lg:hidden', false)
        ->assertSee('M4 7h16M4 12h16M4 17h16', false);
});

it('renders the close mobile menu button', function (): void {
    $view = $this->blade('<x-mobile-menu-button action="close"/>');

    $view
        ->assertSee('data-mobile-menu-close', false)
        ->assertDontSee('data-mobile-menu-open', false)
        ->assertSee('aria-label="Cerrar menú"', false)
        ->assertSee('bg-brand-surface', false)
        ->assertSee('m6 6 12 12M18 6 6 18', false);
});
