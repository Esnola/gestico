<?php

it('makes gestico configuration available to blade views', function (): void {
    $view = $this->blade(
        '{{ config("gestico.name") }} - {{ config("gestico.contact.1.title") }}'
    );

    $view
        ->assertSee('Gestico Barbanza')
        ->assertSee('Situación económica');
});
