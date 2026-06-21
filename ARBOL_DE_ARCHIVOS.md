# Arbol de archivos y componentes por pagina

## Arbol principal

```text
gestico/
├── routes/
│   ├── web.php
│   └── settings.php
├── resources/
│   ├── views/
│   │   ├── home.blade.php
│   │   ├── dashboard.blade.php
│   │   ├── layouts/
│   │   │   ├── app.blade.php
│   │   │   ├── app/
│   │   │   │   ├── sidebar.blade.php
│   │   │   │   └── header.blade.php
│   │   │   ├── auth.blade.php
│   │   │   └── auth/
│   │   │       ├── simple.blade.php
│   │   │       ├── card.blade.php
│   │   │       └── split.blade.php
│   │   ├── pages/
│   │   │   ├── servicios.blade.php
│   │   │   ├── fincas.blade.php
│   │   │   ├── asesoria.blade.php
│   │   │   ├── contact.blade.php
│   │   │   ├── ubicacion.blade.php
│   │   │   ├── client-portal.blade.php
│   │   │   ├── font-compare.blade.php
│   │   │   ├── auth/
│   │   │   │   ├── login.blade.php
│   │   │   │   ├── register.blade.php
│   │   │   │   ├── forgot-password.blade.php
│   │   │   │   ├── reset-password.blade.php
│   │   │   │   ├── confirm-password.blade.php
│   │   │   │   ├── verify-email.blade.php
│   │   │   │   └── two-factor-challenge.blade.php
│   │   │   └── settings/
│   │   │       ├── layout.blade.php
│   │   │       ├── ⚡profile.blade.php
│   │   │       ├── ⚡security.blade.php
│   │   │       ├── ⚡appearance.blade.php
│   │   │       ├── ⚡delete-user-form.blade.php
│   │   │       ├── ⚡delete-user-modal.blade.php
│   │   │       ├── ⚡two-factor-setup-modal.blade.php
│   │   │       └── two-factor/
│   │   │           └── ⚡recovery-codes.blade.php
│   │   ├── components/
│   │   │   ├── layouts/
│   │   │   │   ├── public.blade.php
│   │   │   │   └── public/
│   │   │   │       ├── header.blade.php
│   │   │   │       └── footer.blade.php
│   │   │   ├── sections/
│   │   │   │   ├── hero.blade.php
│   │   │   │   ├── hero-art.blade.php
│   │   │   │   ├── hero-art-card-one.blade.php
│   │   │   │   ├── hero-art-card-two.blade.php
│   │   │   │   ├── features.blade.php
│   │   │   │   ├── steps.blade.php
│   │   │   │   └── client-portal.blade.php
│   │   │   ├── main-links.blade.php
│   │   │   ├── header-link.blade.php
│   │   │   ├── mobile-menu-button.blade.php
│   │   │   ├── toggle-theme.blade.php
│   │   │   ├── protected-email-link.blade.php
│   │   │   ├── aux-icon.blade.php
│   │   │   ├── service-icon.blade.php
│   │   │   ├── cookies.blade.php
│   │   │   ├── head.blade.php
│   │   │   ├── app-logo.blade.php
│   │   │   ├── app-logo-icon.blade.php
│   │   │   ├── auth-header.blade.php
│   │   │   ├── auth-session-status.blade.php
│   │   │   ├── passkey-registration.blade.php
│   │   │   ├── passkey-verify.blade.php
│   │   │   ├── desktop-user-menu.blade.php
│   │   │   └── placeholder-pattern.blade.php
│   │   ├── partials/
│   │   │   └── settings-heading.blade.php
│   │   └── flux/
│   │       ├── navlist/group.blade.php
│   │       └── icon/
│   │           ├── book-open-text.blade.php
│   │           ├── chevrons-up-down.blade.php
│   │           ├── folder-git-2.blade.php
│   │           └── layout-grid.blade.php
│   ├── js/
│   │   ├── app.js
│   │   ├── menu.js
│   │   ├── theme.js
│   │   ├── cookies.js
│   │   ├── email-form.js
│   │   ├── home-gsap.js
│   │   ├── home-svg.js
│   │   ├── home-card-headings.js
│   │   ├── passkeys.js
│   │   └── text.js
│   └── css/
│       └── app.css
├── config/
│   ├── gestico.php
│   ├── gestico/
│   │   ├── content.php
│   │   ├── icons.php
│   │   └── activations.php
│   └── fortify.php
└── public/
    ├── images/
    │   ├── gesticobarbanza.png
    │   ├── gesticobarbanza.svg
    │   ├── portal.png
    │   ├── desk.png
    │   ├── cookie.png
    │   ├── home-community-care.svg
    │   └── home-document-management.svg
    └── fonts/
        └── gestico/
```

## Layouts compartidos

### Publico: `resources/views/components/layouts/public.blade.php`

- `x-head`
- `x-layouts.public.header`
  - logo `public/images/gesticobarbanza.png`
  - `x-main-links`
  - `x-mobile-menu-button`
  - `x-toggle-theme`
- `main`
  - contenido de cada pagina publica
- `x-layouts.public.footer`
  - logo
  - `x-main-links`
  - `x-aux-icon`
  - `x-protected-email-link`
- `x-cookies`
- Vite: `resources/js/home-card-headings.js`

### Auth: `resources/views/layouts/auth.blade.php`

- Usa `x-layouts::auth.simple`
- `x-app-logo-icon`
- `flux:toast.group`
- `flux:toast`
- `@fluxScripts`

### App privada: `resources/views/layouts/app.blade.php`

- Usa `x-layouts::app.sidebar`
- `flux:main`
- El layout sidebar incluye:
  - `flux:sidebar`
  - `x-app-logo`
  - navegacion Dashboard
  - enlaces Repository / Documentation
  - `x-desktop-user-menu`
  - menu movil con `flux:header`, `flux:dropdown`, `flux:profile`, `flux:menu`
  - `flux:toast.group`

## Paginas publicas

### `/` - Home

Archivo: `resources/views/home.blade.php`

- Layout: `x-layouts.public`
- Secciones:
  - Hero: `x-sections.hero`
    - Arte: `x-sections.hero-art`
      - `x-sections.hero-art-card-one`
      - `x-sections.hero-art-card-two`
    - Datos: `config('gestico.home_hero')`
  - Que resolvemos: `x-sections.features`
    - Datos: `config('gestico.home-resolver')`
    - Iconos: `x-service-icon`
  - Metodo: `x-sections.steps`
    - Datos: `config('gestico.home-metodo')`
  - Area de clientes: `x-sections.client-portal`
    - Datos: `config('gestico.home-client-portal')`
- Scripts: `resources/js/home-gsap.js`

### `/servicios` - Servicios

Archivo: `resources/views/pages/servicios.blade.php`

- Layout: `x-layouts.public`
- Secciones:
  - Hero: `x-sections.hero`
    - Badges con `x-service-icon`
    - Arte inline: tarjeta "Todo el servicio en un mismo circuito"
  - Que hacemos: `x-sections.features`
    - Datos: `config('gestico.servicios-hacemos')`
  - Base normativa: `x-sections.steps`
    - Datos: `config('gestico.servicios-normativa')`
  - Como trabajamos: `x-sections.steps`
    - Datos: `config('gestico.servicios-trabajo')`
  - CTA final inline: "La transparencia importa tanto como la gestion"

### `/fincas` - Administracion de fincas

Archivo: `resources/views/pages/fincas.blade.php`

- Layout: `x-layouts.public`
- Secciones:
  - Hero: `x-sections.hero`
    - Badges con `x-service-icon`
    - Arte inline: tarjeta "Seguimiento claro para cada asunto"
  - Que hacemos: `x-sections.features`
    - Datos: `config('gestico.fincas-hacemos')`
  - Situaciones habituales: `x-sections.steps`
    - Datos: `config('gestico.fincas-situaciones')`
  - Gestion documentada: `x-sections.features`
    - Datos: `config('gestico.fincas-gestion')`
  - CTA final inline: "La comunidad gana estabilidad..."

### `/asesoria` - Asesoria

Archivo: `resources/views/pages/asesoria.blade.php`

- Layout: `x-layouts.public`
- Secciones:
  - Hero: `x-sections.hero`
    - Badges con `x-service-icon`
    - Arte inline: tarjeta "Control economico con contexto"
  - Que cubrimos: `x-sections.features`
    - Datos: `config('gestico.asesoria-cubrimos')`
  - Como trabajamos: `x-sections.steps`
    - Datos: `config('gestico.asesoria-trabajamos')`
  - CTA final inline: "La cifra correcta importa..."

### `/contacto` - Contacto

Archivo: `resources/views/pages/contact.blade.php`

- Layout: `x-layouts.public`
- Secciones:
  - Hero/contacto inline:
    - datos de contacto
    - `x-protected-email-link`
    - `x-aux-icon` para telefono y ubicacion
    - formulario HTML con `data-contact-form`
  - Para orientar la propuesta: `x-sections.features`
    - Datos: `config('gestico.contact')`
- JS relacionado: `resources/js/email-form.js`

### `/ubicacion` - Ubicacion

Archivo: `resources/views/pages/ubicacion.blade.php`

- Layout: `x-layouts.public`
- Secciones:
  - Hero/ubicacion inline:
    - direccion desde `config('gestico.*')`
    - CTA Google Maps
    - CTA Contactar
    - `x-aux-icon`
    - `x-protected-email-link`
  - Mapa inline:
    - iframe con `config('gestico.maps_satelite')`

### `/area-clientes` - Area clientes

Archivo: `resources/views/pages/client-portal.blade.php`

- Layout: `x-layouts.public`
- Secciones:
  - Hero inline: estado futuro de la zona privada
  - Modulos previstos inline:
    - Documentacion comunitaria
    - Estados de cuentas
    - Facturas y presupuestos
    - Avisos y comunicaciones

### `/comparativa-tipografia` - Comparativa tipografica

Archivo: `resources/views/pages/font-compare.blade.php`

- Layout: `x-layouts.public`
- Secciones:
  - Head push:
    - Google Fonts: IBM Plex Sans, Source Sans 3, Sora
    - estilos especificos `.font-compare-*`
  - Introduccion inline: objetivo de la comparativa
  - Cards de comparativa inline:
    - IBM Plex Sans
    - Source Sans 3
    - Sora
  - Recomendacion inline:
    - veredicto rapido
    - fuente elegida: IBM Plex Sans

## Paginas privadas

### `/dashboard` - Dashboard

Archivo: `resources/views/dashboard.blade.php`

- Middleware: `auth`, `verified`
- Layout: `x-layouts::app`
- Componentes:
  - `x-placeholder-pattern`
  - grid de tarjetas placeholder
  - layout privado con sidebar, menu de usuario y toasts

## Auth / Fortify

### `/login`

Archivo: `resources/views/pages/auth/login.blade.php`

- Layout: `x-layouts::auth`
- Componentes:
  - `x-auth-header`
  - `x-auth-session-status`
  - `x-passkey-verify`
  - `flux:input`
  - `flux:checkbox`
  - `flux:button`
  - `flux:link`

### `/register`

Archivo: `resources/views/pages/auth/register.blade.php`

- Layout: `x-layouts::auth`
- Componentes:
  - `x-auth-header`
  - `x-auth-session-status`
  - `flux:input`
  - `flux:button`
  - `flux:link`

### `/forgot-password`

Archivo: `resources/views/pages/auth/forgot-password.blade.php`

- Layout: `x-layouts::auth`
- Componentes:
  - `x-auth-header`
  - `x-auth-session-status`
  - `flux:input`
  - `flux:button`
  - `flux:link`

### `/reset-password`

Archivo: `resources/views/pages/auth/reset-password.blade.php`

- Layout: `x-layouts::auth`
- Componentes:
  - `x-auth-header`
  - `x-auth-session-status`
  - `flux:input`
  - `flux:button`

### `/confirm-password`

Archivo: `resources/views/pages/auth/confirm-password.blade.php`

- Layout: `x-layouts::auth`
- Componentes:
  - `x-auth-header`
  - `x-auth-session-status`
  - `x-passkey-verify`
  - `flux:input`
  - `flux:button`

### `/verify-email`

Archivo: `resources/views/pages/auth/verify-email.blade.php`

- Layout: `x-layouts::auth`
- Componentes:
  - `flux:text`
  - `flux:button`

### `/two-factor-challenge`

Archivo: `resources/views/pages/auth/two-factor-challenge.blade.php`

- Layout: `x-layouts::auth`
- Componentes:
  - `x-auth-header`
  - `flux:otp`
  - `flux:input`
  - `flux:text`
  - `flux:button`

## Settings / Livewire

### `/settings/profile`

Archivo: `resources/views/pages/settings/⚡profile.blade.php`

- Middleware: `auth`
- Livewire route: `pages::settings.profile`
- Componentes:
  - `x-pages::settings.layout`
  - `flux:heading`
  - `flux:input`
  - `flux:link`
  - `flux:text`
  - `flux:button`
  - `livewire:pages::settings.delete-user-form`

### `/settings/security`

Archivo: `resources/views/pages/settings/⚡security.blade.php`

- Middleware: `auth`, `verified`
- Livewire route: `pages::settings.security`
- Componentes y secciones:
  - Update password:
    - `x-pages::settings.layout`
    - `flux:input`
    - `flux:button`
  - Two-factor authentication:
    - `livewire:pages::settings.two-factor.recovery-codes`
    - `flux:modal.trigger`
    - `livewire:pages::settings.two-factor-setup-modal`
  - Passkeys:
    - `x-passkey-registration`
    - `flux:icon.key`
    - `flux:badge`
    - modal de eliminacion con `flux:modal`

### `/settings/appearance`

Archivo: `resources/views/pages/settings/⚡appearance.blade.php`

- Middleware: `auth`, `verified`
- Livewire route: `pages::settings.appearance`
- Componentes:
  - `x-pages::settings.layout`
  - `flux:heading`
  - `flux:radio.group`
  - `flux:radio`

### Componentes Livewire auxiliares de settings

- `resources/views/pages/settings/layout.blade.php`
  - `flux:navlist`
  - `flux:navlist.item`
  - `flux:separator`
  - `flux:heading`
  - `flux:subheading`
- `resources/views/pages/settings/⚡delete-user-form.blade.php`
  - `flux:heading`
  - `flux:subheading`
  - `flux:modal.trigger`
  - `flux:button`
  - `livewire:pages::settings.delete-user-modal`
- `resources/views/pages/settings/⚡delete-user-modal.blade.php`
  - `flux:modal`
  - `flux:heading`
  - `flux:subheading`
  - `flux:input`
  - `flux:modal.close`
  - `flux:button`
- `resources/views/pages/settings/⚡two-factor-setup-modal.blade.php`
  - `flux:modal`
  - `flux:icon.qr-code`
  - `flux:heading`
  - `flux:text`
  - `flux:otp`
  - `flux:button`
  - `flux:callout`
  - `flux:icon.loading`
  - `flux:icon.document-duplicate`
  - `flux:icon.check`
- `resources/views/pages/settings/two-factor/⚡recovery-codes.blade.php`
  - `flux:icon.lock-closed`
  - `flux:heading`
  - `flux:text`
  - `flux:button`
  - `flux:callout`

## Componentes base reutilizados

- `x-sections.hero`: hero con eyebrow, titulo, intro, CTAs, badges/stats y slot `art`.
- `x-sections.features`: seccion de cards con items de configuracion e iconos opcionales.
- `x-sections.steps`: seccion de pasos/cards.
- `x-sections.client-portal`: bloque de area cliente previsto.
- `x-service-icon`: iconos de servicios desde `config/gestico/icons.php`.
- `x-aux-icon`: iconos auxiliares de contacto, telefono, ubicacion y email.
- `x-main-links`: navegacion principal publica.
- `x-header-link`: enlace individual de navegacion.
- `x-mobile-menu-button`: apertura/cierre de menu movil.
- `x-toggle-theme`: cambio de tema claro/oscuro.
- `x-protected-email-link`: enlace de email protegido.
- `x-cookies`: aviso de cookies.
- `x-passkey-registration`: registro de passkeys.
- `x-passkey-verify`: verificacion con passkey.
- `x-desktop-user-menu`: menu privado de usuario.
- `x-placeholder-pattern`: patron grafico para placeholders del dashboard.

## Configuracion de contenido

- `config/gestico.php`: datos de contacto, direccion, mapas y arrays usados por paginas publicas.
- `config/gestico/content.php`: contenido estructurado del sitio.
- `config/gestico/icons.php`: mapa de iconos para `x-service-icon`.
- `config/gestico/activations.php`: activaciones/configuracion de marca o funcionalidades.
