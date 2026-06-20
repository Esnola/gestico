@props([
    'eyebrow',
    'title',
    'text' => null,
    'items' => [],
    'sectionClass' => 'bg-white py-24 dark:bg-brand-night-panel',
    'containerClass' => 'mx-auto max-w-7xl px-5 sm:px-6 lg:px-8',
    'gridClass' => 'mt-10 grid gap-4 md:grid-cols-2 lg:grid-cols-4',
    'cardClass' => 'rounded-md border border-brand-border-soft bg-brand-surface p-6 dark:border-brand-night-border dark:bg-brand-night-raised',
    'eyebrowClass' => 'text-sm font-normal uppercase tracking-[0.04em] text-brand-gold dark:text-brand-night-gold',
    'titleClass' => 'mt-3 font-gestico-serif text-3xl font-semibold text-brand-ink dark:text-brand-night-text sm:text-4xl',
    'introTextClass' => 'mt-5 text-lg text-brand-text-muted dark:text-brand-night-muted',
    'itemTitleClass' => 'font-gestico-serif text-xl font-semibold text-brand-ink-soft dark:text-brand-night-text',
    'textClass' => 'mt-3 text-sm leading-6 text-brand-text-soft dark:text-brand-night-muted',
    'iconWrapperClass' => 'mb-4 flex items-center rounded-md border border-brand-border-warm bg-white/80 text-brand-gold dark:border-brand-night-border dark:bg-brand-night-raised/90 dark:text-brand-night-gold',
    'gsap' => 'data-gsap-stagger',
    'iconInLine' => false
])

<section {{ $attributes->class($sectionClass) }} {{$gsap ? 'data-gsap-reveal' : '' }}>
    <div class="{{ $containerClass }}">
        <div class="max-w-2xl">
            <p class="{{ $eyebrowClass }}">{{ $eyebrow }}</p>
            <h2 class="{{ $titleClass }}">
                {{ $title }}
            </h2>
            @if (filled($text))
                <p class="{{ $introTextClass }}">{{ $text }}</p>
            @endif
        </div>

        <div class="{{ $gridClass }}" {{ $gsap }}>
            @foreach ($items as $item)
                @php
                    $isIndexedTriplet = array_is_list($item) && count($item) === 3;
                    $itemTitle = $item['title'] ?? ($isIndexedTriplet ? $item[1] : ($item[0] ?? ''));
                    $text = $item['text'] ?? ($isIndexedTriplet ? $item[2] : ($item[1] ?? ''));
                    $icon = $item['icon'] ?? ($isIndexedTriplet ? $item[0] : null);
                    $itemTextClass = $item['textClass'] ?? $textClass;
                    $itemTitleClassOverride = $item['titleClass'] ?? $itemTitleClass;
                @endphp
                <div data-home-card class="{{ $cardClass }}" {{ $gsap ? 'data-gsap-stagger-item' : '' }} >
                    @if ($icon)
                        <div class="{{ $iconWrapperClass }} {{$iconInLine ? 'gap-4 border-0  ' : 'justify-center size-11'}}">
                            <x-service-icon :type="$icon" class="size-8 stroke-1"/>
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
