<?php

namespace Tests\Feature;

use Tests\TestCase;

class TypographyFontTest extends TestCase
{
    public function test_the_font_stack_uses_local_fonts_for_public_pages(): void
    {
        $css = file_get_contents(resource_path('css/app.css'));

        expect($css)
            ->toContain("src: url('../fonts/gestico/nunito-sans-latin.woff2') format('woff2')")
            ->toContain("--font-gestico-serif: 'Nunito Sans'")
            ->not->toContain('fonts.googleapis.com')
            ->not->toContain('Cormorant Garamond');
    }
}
