<?php
  
  it('shows the contact page with proposal orientation details', function (): void {
    $response = $this->get(route('contacto'));
    
    $response
      ->assertOk()
      ->assertSeeText('Cuéntanos qué necesita tu comunidad.')
      ->assertSeeText('Para orientar la propuesta')
      ->assertSeeText('Situación económica')
      ->assertSeeText('Documentación')
      ->assertSeeText('Incidencias')
      ->assertSee('data-contact-icon="email"', false)
      ->assertSee('data-contact-icon="phone"', false)
      ->assertSee('data-contact-icon="location"', false)
      ->assertSee('data-contact-form', false)
      ->assertSee('name="website"', false)
      ->assertSee('data-protected-email', false)
      ->assertDontSee('mailto:', false)
      ->assertDontSee(config('gestico.email'), false);
  });
