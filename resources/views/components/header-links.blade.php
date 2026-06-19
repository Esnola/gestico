@props([
    'isfooter' => false,
    'variant' => null,
])

@php
  $navigationVariant = $variant ?? ($isfooter ? 'footer' : 'desktop');
@endphp

<nav {{ $attributes->class([
    'hidden items-center gap-2 text-md font-bold text-brand-text dark:text-brand-night-muted lg:flex' => $navigationVariant === 'desktop',
    'grid gap-2 px-5 pb-5 text-base font-bold text-brand-text dark:bg-brand-night-panel dark:text-brand-night-muted' => $navigationVariant === 'mobile',
    'mt-4 grid gap-2 text-sm text-brand-frost' => $navigationVariant === 'footer',
]) }}>
  <x-header-link texto="Home" destino="home" :variant="$navigationVariant"/>
  <x-header-link texto="Servicios" destino="servicios" :variant="$navigationVariant"/>
  <x-header-link texto="Fincas" destino="fincas" :variant="$navigationVariant"/>
  <x-header-link texto="Asesoría" destino="asesoria" :variant="$navigationVariant"/>
  <x-header-link texto="Ubicación" destino="location" :variant="$navigationVariant"/>
  <x-header-link texto="Contacto" destino="contacto" :variant="$navigationVariant"/>
</nav>
