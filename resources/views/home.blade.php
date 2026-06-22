<x-layouts.public title="Gestión integral de comunidades">
  <x-sections.hero
          eyebrow="Administración de fincas y asesoría para comunidades"
          title="Tu comunidad, gestionada con cuentas claras y respuesta profesional."
          intro="Gestico Barbanza coordina la gestión administrativa, económico-financiera, fiscal y laboral de comunidades de propietarios para que la presidencia y la junta tengan control sin cargar con el trabajo diario."
          primary-cta-label="Solicitar una propuesta"
          primary-cta-href="contacto"
          secondary-cta-label="Ver servicios"
          secondary-cta-href="servicios"
          datos="gestico.home_hero"
  >
    <x-slot:art>
        <div class="transform -translate-y-16">
            <x-sections.hero-art-card-one/>
        </div>
    </x-slot:art>

  </x-sections.hero>

  <x-sections.features
          eyebrow="Qué resolvemos"
          title="Una administración pensada para comunidades que necesitan orden, transparencia y continuidad."
          items='gestico.home-resolver'
          :iconInLine="true"
  />

  <x-sections.features
          container-class="lg:flex-row-reverse"
          eyebrow="Método"
          title="Primero entendemos la comunidad. Después ponemos rutina y control."
          items='gestico.home-metodo'
  />

  <x-sections.client-portal
          eyebrow="Área de clientes"
          title="Esto se montará o no, depende de las exigencias."
          text="Dejamos preparada la puerta de acceso para que presidentes, juntas y propietarios puedan consultar documentación, movimientos, informes y comunicaciones cuando construyamos la zona privada."
          cta-label="Ver planteamiento del portal"
          :cta-href="route('client-portal')"
          :items="config('gestico.home-client-portal')"
  />

</x-layouts.public>

@vite(['resources/js/home-gsap.js'])
