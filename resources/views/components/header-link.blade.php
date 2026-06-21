@props([
    'texto',
    'destino',
    'variant' => 'desktop',
])

<a @class([
    ' ',
    'flex items-center gap-3 bg-brand-surface px-4 py-3 text-brand-text dark:bg-brand-night-panel dark:text-brand-night-muted' => $variant === 'mobile',
    'transition-colors max-w-fit px-2 py-1 dark:hover:bg-brand-night-surfac hover:text-brand-gold hover:bg-brand-frost dark:hover:bg-brand-night-surface dark:hover:text-brand-night-gold' => $variant !== 'mobile',
    'bg-brand-surface-warm! font-bold! text-brand-gold-bright! dark:bg-brand-night-surface dark:text-brand-night-gold' => request()->routeIs($destino) ,
    'rounded-md' => $variant !== 'footer',
])
   href="{{ route($destino) }}">
  @if($variant === 'mobile' )
    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
         class="size-6  text-brand-gold-text dark:text-brand-night-gold-hover">{!! config('gesticonos.' .$destino) !!}
    </svg>
  @endif
  {{ $texto }}
</a>
