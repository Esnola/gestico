@props([
    'texto',
    'destino',
    'variant' => 'desktop',
])

<a @class([
    ' ',
    'flex items-center gap-3 bg-brand-surface px-4 py-3 text-brand-text dark:bg-brand-night-panel dark:text-brand-night-muted' => $variant === 'mobile',
    'transition-colors rounded-md max-w-fit px-2 py-1 hover:text-brand-gold hover:bg-brand-frost dark:hover:bg-brand-night-surface dark:hover:text-brand-night-gold' => $variant !== 'mobile',
    'font-bold! text-brand-gold bg-brand-frost dark:bg-brand-night-surface dark:text-brand-night-gold' => request()->routeIs($destino) ,

])
   href="{{ route($destino) }}">
  @if($variant === 'mobile' )
    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
         class="size-6 ">{!! config('gesticonos.' .$destino) !!}
    </svg>
  @endif
  {{ $texto }}
</a>
