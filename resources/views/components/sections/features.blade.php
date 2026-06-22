@props([
    'eyebrow',
    'title',
    'text' => null,
    'items' => [],
    'containerClass' => '',
    'gridClass' => 'mt-10 grid gap-4 md:grid-cols-2 ',
    'cardClass' => 'rounded-md border border-brand-border-soft bg-brand-surface p-6 dark:border-brand-night-border dark:bg-brand-night-raised',
    'eyebrowClass' => 'mt-6',
    'titleClass' => 'mt-3 font-gestico-serif text-3xl font-semibold text-brand-ink dark:text-brand-night-text sm:text-4xl',
    'introTextClass' => 'mt-5 text-lg text-brand-text-muted dark:text-brand-night-muted',
    'stepClass' => 'font-gestico-serif text-xl font-semibold text-brand-gold-bright dark:text-brand-night-gold',
    'itemTitleClass' => 'font-gestico-serif text-xl font-semibold text-brand-ink-soft dark:text-brand-night-text',
    'textClass' => 'mt-3 text-sm leading-6 text-brand-text-soft dark:text-brand-night-muted',
    'iconWrapperClass' => 'mb-4 flex items-center rounded-md border border-brand-border-warm bg-white/80 text-brand-gold dark:border-brand-night-border dark:bg-brand-night-raised/90 dark:text-brand-night-gold',
    'iconInLine' => false,
    'animateCards' => false,
])

@php
    $resolvedItems = is_string($items) ? config($items, []) : $items;
    $renderCount = (int) request()->attributes->get('gestico.features.render_count', 0) + 1;
    request()->attributes->set('gestico.features.render_count', $renderCount);

    $resolvedSectionClass = $renderCount % 2 === 1
        ? 'bg-white py-24 dark:bg-brand-night-panel'
        : 'bg-brand-cream py-20 sm:py-24 dark:bg-brand-night';
@endphp

<section {{ $attributes->class($resolvedSectionClass) }}>
    <div class="mx-auto grid  max-w-7xl gap-8 px-5 sm:px-6 lg:px-8 lg:flex  {{ $containerClass }}">
        <div class="max-w-2xl pt-24">
            <p class="text-sm font-normal uppercase tracking-[0.04em] text-brand-gold dark:text-brand-night-gold {{ $eyebrowClass }}">{{ $eyebrow }}</p>
            <h2 class="{{ $titleClass }}">
                {{ $title }}
            </h2>
            @if (filled($text))
                <p class="{{ $introTextClass }}">{{ $text }}</p>
            @endif
        </div>

        <div @if ($animateCards) data-gsap-stagger @endif class="mt-10 grid gap-4 md:grid-cols-2 {{ $gridClass }}">
            @foreach ($resolvedItems as $item)
                @php
                    $isIndexedTriplet = array_is_list($item) && count($item) === 3;
                    $step = $item['step'] ?? (is_string($item[0] ?? null) && preg_match('/^\d+$/', (string) $item[0]) ? $item[0] : null);
                    $itemTitle = $item['title'] ?? ($step !== null ? ($item[1] ?? '') : ($isIndexedTriplet ? $item[1] : ($item[0] ?? '')));
                    $text = $item['text'] ?? ($step !== null ? ($item[2] ?? '') : ($isIndexedTriplet ? $item[2] : ($item[1] ?? '')));
                    $icon = $item['icon'] ?? ($step === null && $isIndexedTriplet ? $item[0] : null);
                    $itemTitleClassOverride = $item['titleClass'] ?? ($step !== null ? 'mt-4 font-gestico-serif text-2xl font-semibold' : $itemTitleClass);
                    $itemStepClass = $item['stepClass'] ?? $stepClass;
                    $itemTextClass = $item['textClass'] ?? ($step !== null ? 'mt-3 text-sm leading-6 text-brand-frost' : $textClass);
                @endphp
                <div @if ($animateCards) data-gsap-stagger-item @endif class="{{ $cardClass }}">
                    @if ($step)
                        <p data-gsap-card-emphasis-number class="{{ $itemStepClass }}">{{ $step }}</p>
                    @endif
                    @if ($icon)
                        <div class="{{ $iconWrapperClass }} {{$iconInLine ? 'gap-4 border-0  ' : 'justify-center size-11'}}">
                            <x-service-icon :type="$icon" class="size-8 stroke-1" data-gsap-card-emphasis-icon/>
                            @if ($iconInLine)
                                <h3 class="{{ $itemTitleClassOverride }} {{$iconInLine ? 'mt-0!' : ''}}">
                                    {{ $itemTitle }}</h3>
                            @endif
                        </div>
                    @endif
                   @if (!$iconInLine)
                    <h3 class="{{ $itemTitleClassOverride }}">{{ $itemTitle }}</h3>
                        @endif
                    <p class="{{ $itemTextClass }}">{{ $text }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
