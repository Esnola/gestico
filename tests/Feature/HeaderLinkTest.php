<?php

it('marks the current header route as active', function (): void {
    $response = $this->get(route('servicios'));

    $response
        ->assertOk()
        ->assertSee('href="'.route('servicios').'"', false)
        ->assertSee('text-brand-gold-bright', false)
        ->assertDontSee('Servicios 1')
        ->assertDontSee('Servicios true');
});

it('renders the responsive menu modal with the shared header links', function (): void {
    $response = $this->get(route('home'));

    $response
        ->assertOk()
        ->assertSee('data-mobile-menu-open', false)
        ->assertSee('aria-controls="mobile-menu"', false)
        ->assertSee('data-mobile-menu', false)
        ->assertSee('z-[9999]', false)
        ->assertSee('bg-brand-cream dark:bg-brand-night', false)
        ->assertSee('bg-brand-surface', false)
        ->assertSee('dark:bg-brand-night-panel', false)
        ->assertSee('dark:border-brand-night-border', false)
        ->assertSee('-translate-x-full', false)
        ->assertSee('transition-transform duration-300 ease-out', false)
        ->assertSee('data-mobile-menu-close', false)
        ->assertSee('Menú')
        ->assertSee('Menú principal móvil', false)
        ->assertSee('href="'.route('servicios').'"', false)
        ->assertSee('href="'.route('fincas').'"', false)
        ->assertSee('href="'.route('asesoria').'"', false)
        ->assertSee('href="'.route('location').'"', false)
        ->assertSee('href="'.route('contacto').'"', false);
});

it('uses opaque theme backgrounds for responsive header links', function (): void {
    $headerLinks = file_get_contents(resource_path('views/components/header-links.blade.php'));
    $headerLink = file_get_contents(resource_path('views/components/header-link.blade.php'));

    expect($headerLinks)
        ->toContain('bg-brand-surface')
        ->toContain('dark:bg-brand-night-panel')
        ->and($headerLink)
        ->toContain('bg-brand-surface')
        ->toContain('bg-brand-surface-warm')
        ->toContain('dark:bg-brand-night-panel')
        ->toContain('dark:bg-brand-night-surface')
        ->not->toContain('/50');
});
