<?php

namespace Tests\Feature;

use Tests\TestCase;

class TypographyFontTest extends TestCase
{
    public function test_the_serif_font_stack_uses_baskerville_like_system_fonts(): void
    {
        $css = file_get_contents(resource_path('css/app.css'));

        expect($css)
            ->toContain('family=IBM+Plex+Sans')
            ->toContain('--font-gestico-serif: \'IBM Plex Sans\'')
            ->not->toContain('Cormorant Garamond');
    }
}
