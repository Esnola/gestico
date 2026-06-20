@props([
    'eyebrow',
    'title',
    'text',
    'ctaLabel',
    'ctaHref',
    'items' => [],
])

<section class="bg-brand-cream py-24 dark:bg-brand-night-panel">
    <div class="mx-auto grid max-w-7xl items-center gap-10 px-5 sm:px-6 lg:grid-cols-[1fr_.9fr] lg:px-8">
        <div>
            <p class="text-sm font-normal uppercase tracking-[0.04em] text-brand-gold dark:text-brand-night-gold">{{ $eyebrow }}</p>
            <h2 class="mt-3 font-gestico-serif text-3xl font-semibold text-brand-ink dark:text-brand-night-text sm:text-4xl">
                {{ $title }}
            </h2>
            <p class="mt-5 text-lg leading-7 text-brand-text-muted dark:text-brand-night-muted">{{ $text }}</p>
            <a href="{{ $ctaHref }}"
               class="mt-7 inline-flex rounded-md border border-brand-stone bg-white px-5 py-3 text-sm font-normal text-brand-text-strong transition hover:border-brand-gold dark:border-brand-night-border dark:bg-brand-night-raised dark:text-brand-night-text dark:hover:border-brand-night-gold">
                {{ $ctaLabel }}
            </a>
        </div>

        <div class="rounded-lg border border-brand-border bg-white p-6 dark:border-brand-night-border dark:bg-brand-night-raised">
            <div class="grid gap-3">
                @foreach ($items as [$itemText, $view, $icon])
                    <div data-clientes-card
                         class="flex items-center gap-4 rounded-md bg-brand-surface-warm px-4 py-3 text-sm font-normal text-brand-teal-card dark:bg-brand-night-surface dark:text-brand-night-text">
                        <svg xmlns="http://www.w3.org/2000/svg" stroke="none" fill="currentColor"
                             viewBox="{{ $view ? '0 0 24 24' : '0 0 384 512' }}" class="size-8 opacity-80">{!! $icon !!}</svg>
                        {{ $itemText }}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
