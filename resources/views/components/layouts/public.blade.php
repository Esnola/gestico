<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<x-head title="{{ $title ?? null }}"/>

<body class="bg-brand-cream font-gestico-sans font-light text-brand-ink-dark antialiased dark:bg-brand-night dark:text-brand-night-text">
<div class="min-h-screen">
  <x-layouts.public.header/>

  <main class="overflow-x-clip" data-gsap-page>
    {{ $slot }}
  </main>

  <x-layouts.public.footer/>
</div>
<x-cookies/>
</body>
</html>
