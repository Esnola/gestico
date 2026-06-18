<?php

namespace Tests\Feature;

use Tests\TestCase;

class ServicesPageTest extends TestCase
{
    public function test_services_page_shows_the_main_service_sections(): void
    {
        $response = $this->get(route('servicios'));

        $response
            ->assertOk()
            ->assertSeeText('Gestión con visión práctica, control económico y respuesta ágil.')
            ->assertSeeText('Gestión económico-financiera')
            ->assertSeeText('Juntas, actas y acuerdos')
            ->assertSeeText('Morosidad y reclamaciones')
            ->assertSeeText('Convertimos las obligaciones de la comunidad en tareas visibles y controladas.')
            ->assertSeeText('Libro de acuerdos')
            ->assertSee('data-service-icon', false)
            ->assertSeeText('La transparencia importa tanto como la gestión.');
    }
}
