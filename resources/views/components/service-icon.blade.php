@props([
    'type',
])

@php
    $svg = match ($type) {
        'wallet' => <<<'SVG'
            <path d="M3 7.5h14a2.5 2.5 0 0 1 2.5 2.5v7A2.5 2.5 0 0 1 17 19.5H5.5A2.5 2.5 0 0 1 3 17V7.5Z" />
            <path d="M17 11.5h4v4h-4a2 2 0 0 1 0-4Z" />
            <circle cx="18.8" cy="13.5" r="0.8" fill="currentColor" stroke="none" />
SVG,
        'clipboard' => <<<'SVG'
            <rect x="5.5" y="4.5" width="13" height="15" rx="1.5" />
            <path d="M9 4.5h6a1 1 0 0 1 1 1V7H8V5.5a1 1 0 0 1 1-1Z" />
            <path d="M9 10h6M9 13.5h6M9 17h3" />
SVG,
        'scale' => <<<'SVG'
            <path d="M12 4.5v15" />
            <path d="M7 8.5h10" />
            <path d="M7 8.5 4.5 13h5L7 8.5Z" />
            <path d="M17 8.5 14.5 13h5L17 8.5Z" />
            <path d="M9 19.5h6" />
SVG,
        'wrench' => <<<'SVG'
            <path d="M15.5 4.8a4 4 0 0 0-4.7 5.1L4.5 16.2a1.7 1.7 0 1 0 2.4 2.4l6.3-6.3a4 4 0 0 0 5.1-4.7l-2.8 2.8-2.1-.5-.5-2.1 2.8-2.8Z" />
SVG,
        'users' => <<<'SVG'
            <circle cx="9" cy="8" r="2.5" />
            <path d="M4.5 19a4.5 4.5 0 0 1 9 0" />
            <circle cx="16.5" cy="9" r="2" />
            <path d="M13.5 19a4 4 0 0 1 6.5-2.8" />
SVG,
        'folder' => <<<'SVG'
            <path d="M3.5 7.5A2.5 2.5 0 0 1 6 5h4l2 2H18a2.5 2.5 0 0 1 2.5 2.5v7A2.5 2.5 0 0 1 18 19H6a2.5 2.5 0 0 1-2.5-2.5v-9Z" />
            <path d="M3.5 9h17" />
SVG,
        default => '',
    };
@endphp

<svg
    {{ $attributes->class('size-5 shrink-0') }}
    data-service-icon
    xmlns="http://www.w3.org/2000/svg"
    viewBox="0 0 24 24"
    fill="none"
    stroke="currentColor"
    stroke-width="2"
    stroke-linecap="round"
    stroke-linejoin="round"
    aria-hidden="true"
>
    {!! $svg !!}
</svg>
