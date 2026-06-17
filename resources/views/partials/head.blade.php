<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>
    {{ filled($title ?? null) ? $title.' - '.config('app.name', 'Laravel') : config('app.name', 'Laravel') }}
</title>

@php
    $faviconVersion = filemtime(public_path('favicon.ico'));
@endphp

<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}?v={{ $faviconVersion }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}?v={{ $faviconVersion }}">
<link rel="icon" href="{{ asset('favicon.svg') }}?v={{ $faviconVersion }}" type="image/svg+xml">
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}?v={{ $faviconVersion }}" sizes="any">
<link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}?v={{ $faviconVersion }}">

@vite(['resources/css/app.css', 'resources/js/app.js'])
@fluxAppearance
