<?php

use Illuminate\Support\Facades\Blade;

it('alternates the section class automatically as the component is rendered', function (): void {
    $view = <<<'BLADE'
<x-sections.features eyebrow="Uno" title="Primero" :items="$items" />
<x-sections.features eyebrow="Dos" title="Segundo" :items="$items" />
<x-sections.features eyebrow="Tres" title="Tercero" :items="$items" />
BLADE;

    $items = [
        [
            'step' => '01',
            'title' => 'Diagnóstico',
            'text' => 'Revisamos la situación de la comunidad.',
        ],
    ];

    $html = Blade::render($view, [
        'items' => $items,
    ]);

    expect($html)->toContain('bg-white py-24 dark:bg-brand-night-panel');
    expect($html)->toContain('bg-brand-cream py-20 sm:py-24 dark:bg-brand-night');
    expect(substr_count($html, 'bg-white py-24 dark:bg-brand-night-panel'))->toBe(2);
    expect(substr_count($html, 'bg-brand-cream py-20 sm:py-24 dark:bg-brand-night'))->toBe(1);
});
