<?php

test('public header renders a light and dark theme toggle', function () {
    $response = $this->get(route('home'));

    $response
        ->assertOk()
        ->assertSee('data-theme-toggle', false)
        ->assertSee('Cambiar modo oscuro')
        ->assertSee('dark:bg-brand-night', false);
});

test('theme script only accepts light and dark preferences', function () {
    $script = file_get_contents(resource_path('js/app.js'));
    $head = file_get_contents(resource_path('views/components/head.blade.php'));

    expect($script)
        ->toContain('const initializeInteractiveFeatures = () => {')
        ->toContain('initializeThemeToggle();')
        ->toContain('initializeDeferredGsapAnimations();')
        ->toContain("document.addEventListener('DOMContentLoaded', initializeInteractiveFeatures, {once: true})")
        ->and($head)
        ->toContain('@fluxAppearance')
        ->not->toContain("window.localStorage.getItem('flux.appearance') || 'system'");
});

test('appearance settings do not include the system option', function () {
    $view = file_get_contents(resource_path('views/pages/settings/⚡appearance.blade.php'));

    expect($view)
        ->toContain('value="light"')
        ->toContain('value="dark"')
        ->not->toContain('value="system"')
        ->not->toContain('computer-desktop');
});

test('dark mode palette tokens are available to tailwind', function () {
    $css = file_get_contents(resource_path('css/app.css'));

    expect($css)
        ->toContain('--color-brand-night:')
        ->toContain('--color-brand-night-panel:')
        ->toContain('--color-brand-night-border:')
        ->toContain('--color-brand-night-gold: #c9a53d;');
});
