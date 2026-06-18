@props([
    'texto',
    'destino',
    'variant' => 'desktop',
])

<a @class([
    'transition-colors',
    'max-w-fit px-2 py-1 hover:text-brand-gold dark:hover:text-brand-night-gold' => $variant !== 'mobile',
    'flex items-center gap-3 rounded-md bg-brand-surface px-4 py-3 text-brand-text hover:bg-brand-surface-warm hover:text-brand-gold dark:bg-brand-night-panel dark:text-brand-night-muted dark:hover:bg-brand-night-surface dark:hover:text-brand-night-gold' => $variant === 'mobile',
    'bg-brand-surface-warm font-bold text-brand-gold-bright dark:bg-brand-night-surface dark:text-brand-night-gold' => request()->routeIs($destino) && $variant === 'mobile',
    'bg-brand-frost font-bold text-brand-gold-bright dark:bg-brand-night-surface dark:text-brand-night-gold' => request()->routeIs($destino) && $variant !== 'mobile',
])
   href="{{ route($destino) }}">
  @if($variant === 'mobile' )
    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
         class="size-6 shrink-0 text-brand-gold dark:text-brand-night-gold">{!! config('gesticonos.' .$destino) !!}
    </svg>
  @endif
  {{ $texto }}
</a>
