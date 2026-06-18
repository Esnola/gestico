<?php

it('shows the typography comparison page', function (): void {
    $response = $this->get(route('font-compare'));

    $response
        ->assertOk()
        ->assertSeeText('Tres sans-serif para decidir cuál acompaña mejor los titulares de Gestico.')
        ->assertSeeText('IBM Plex Sans')
        ->assertSeeText('Source Sans 3')
        ->assertSeeText('Sora')
        ->assertSee('data-font-compare-card="ibm"', false)
        ->assertSee('data-font-compare-card="source"', false)
        ->assertSee('data-font-compare-card="sora"', false)
        ->assertSeeText('IBM Plex Sans es la fuente elegida para títulos y subtítulos.');
});
