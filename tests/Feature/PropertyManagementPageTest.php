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
        ->assertSeeText('Administración pensada para resolver el día a día de la comunidad.')
        ->assertSeeText('La comunidad necesita alguien que ordene, explique y proporcione seguimiento.')
        ->assertSeeText('Vecino moroso')
        ->assertSeeText('Obras y derramas')
        ->assertSeeText('Cada actuación queda conectada con un acuerdo, un gasto o una obligación concreta.')
        ->assertSeeText('Después de aprobar')
        ->assertSee('data-service-icon', false);
    }
  }
