<?php

it('renders the new service badge icons', function (string $type): void {
    $html = view('components.service-icon', ['type' => $type])->render();

    expect($html)
        ->toContain('data-service-icon')
        ->toContain('<path');
})->with([
    'clipboard-list',
    'coins',
    'house',
    'file-lines',
]);
