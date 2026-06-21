@props([
    'action' => 'open',
])

@php
    $isOpenAction = $action === 'open';
    $label = $isOpenAction ? 'Abrir menú' : 'Cerrar menú';
@endphp

<button
    {{ $attributes
        ->class([
            'inline-flex size-10 shrink-0 cursor-pointer items-center justify-center rounded-md border border-brand-gold-border/35 text-brand-gold-text transition hover:border-brand-gold-border hover:bg-white dark:border-brand-night-border dark:bg-brand-night-raised dark:text-brand-night-gold dark:hover:border-brand-night-gold dark:hover:bg-brand-night-surface',
            'bg-white/70 lg:hidden' => $isOpenAction,
            'bg-brand-surface' => ! $isOpenAction,
        ])
        ->merge([
            'type' => 'button',
            'aria-label' => $label,
        ]) }}
    @if ($isOpenAction)
        data-mobile-menu-open
    @else
        data-mobile-menu-close
    @endif
>
    <svg class="size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
         aria-hidden="true">
        @if ($isOpenAction)
            <path d="M4 7h16M4 12h16M4 17h16" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
        @else
            <path d="m6 6 12 12M18 6 6 18" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
        @endif
    </svg>
</button>
