<?php

test('public pages render the cookie consent controls', function () {
    $response = $this->get(route('home'));

    $response
        ->assertOk()
        ->assertSee('data-cookie-consent-banner', false)
        ->assertSee('data-cookie-consent-accept', false)
        ->assertSee('data-cookie-consent-deny', false)
        ->assertSee('border-brand-border', false)
        ->assertSee('dark:border-brand-night-border', false)
        ->assertSee('bg-brand-surface/95', false)
        ->assertSee('dark:bg-brand-night-panel/95', false)
        ->assertSee('bg-brand-gold', false)
        ->assertSee('dark:bg-brand-night-gold', false)
        ->assertDontSee('x-data', false);
});

test('cookie consent actions are registered in the application script', function () {
    $script = file_get_contents(resource_path('js/app.js'));

    expect($script)
        ->toContain('initializeCookieConsent')
        ->toContain('initializeThemeToggle')
        ->toContain('initializeMobileMenu')
        ->toContain('initializeProtection');
});

test('contact spam protections are registered in the application script', function () {
    $script = file_get_contents(resource_path('js/email-form.js'));

    expect($script)
        ->toContain('initializeProtection')
        ->toContain('initializeContactForms')
        ->toContain('minimumContactFormAge')
        ->toContain('decodeProtectedEmail');
});
