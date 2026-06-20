<?php

namespace Tests\Feature;

use Tests\TestCase;

class PropertyManagementPageTest extends TestCase
{
    public function test_property_management_page_shows_the_main_sections(): void
    {
        $response = $this->get(route('fincas'));

        $response
            ->assertOk()
            ->assertSee('min-h-dvh', false)
            ->assertSeeText('Administración de fincas')
            ->assertSeeText('Administración pensada para resolver el día a día de la comunidad.')
            ->assertSeeText('Acuerdos y seguimiento')
            ->assertSeeText('Cuotas y proveedores')
            ->assertSeeText('Incidencias y mantenimiento')
            ->assertSeeText('Documentación en orden')
            ->assertSeeText('Seguimiento claro para cada asunto')
            ->assertSee('data-hero-badge-icon', false)
            ->assertSeeText('Solicitar información')
            ->assertSeeText('Ver servicios')
            ->assertSeeText('La comunidad necesita alguien que ordene, explique y proporcione seguimiento.')
            ->assertSeeText('Vecino moroso')
            ->assertSeeText('Obras y derramas')
            ->assertSeeText('Cada actuación queda conectada con un acuerdo, un gasto o una obligación concreta.')
            ->assertSeeText('Después de aprobar')
            ->assertSee('data-service-icon', false);
    }
}
