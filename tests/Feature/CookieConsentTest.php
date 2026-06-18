<?php

test('public pages render the cookie consent controls', function () {
    $response = $this->get(route('home'));

    $response
        ->assertOk()
        ->assertSee('data-cookie-consent-banner', false)
        ->assertSee('data-cookie-consent-accept', false)
        ->assertSee('data-cookie-consent-deny', false)
        ->assertDontSee('x-data', false);
});

test('cookie consent actions are registered in the application script', function () {
    $script = file_get_contents(resource_path('js/app.js'));

    expect($script)
        ->toContain("remember('accepted')")
        ->toContain("remember('denied')")
        ->toContain('localStorage.setItem')
        ->toContain('document.cookie');
});

test('contact spam protections are registered in the application script', function () {
    $script = file_get_contents(resource_path('js/app.js'));

    expect($script)
        ->toContain('decodeProtectedEmail')
        ->toContain('data-contact-form')
        ->toContain('minimumContactFormAge')
        ->toContain("formData.get('website')");
});
