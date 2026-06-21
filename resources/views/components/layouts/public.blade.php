<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<x-head title="{{ $title ?? null }}"/>

<body class="bg-brand-cream font-gestico-sans font-light text-brand-ink-dark antialiased dark:bg-brand-night dark:text-brand-night-text">
<div class="min-h-screen">
  <x-layouts.public.header/>

  <main class="overflow-x-clip" data-gsap-page>

    <h3 class="text-6xl font-bold w-full border text-center py-12">IGUALAR SECTIONS STEPS Y FEATURES</h3>
    {{ $slot }}
  </main>

  <x-layouts.public.footer/>
</div>
<x-cookies/>
@vite(['resources/js/home-card-headings.js', ])
</body>
</html>
