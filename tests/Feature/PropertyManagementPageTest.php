<?php

namespace Tests\Feature;

use Tests\TestCase;

class PropertyManagementPageTest extends TestCase
{
    public function test_property_management_page_shows_the_main_sections(): void
    {
        $response = $this->get(route('property-management'));

        $response
            ->assertOk()
            ->assertSeeText('Administración de fincas pensada para resolver el día a día de la comunidad.')
            ->assertSeeText('La comunidad necesita alguien que ordene, explique y dé seguimiento.')
            ->assertSeeText('Vecino moroso')
            ->assertSeeText('Obras y derramas')
            ->assertSee('data-service-icon', false);
    }
}
