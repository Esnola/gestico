@props([
    'eyebrow',
    'title',
    'text' => null,
    'items' => [],
    'sectionClass' => 'bg-brand-ink-panel py-24 text-white dark:bg-brand-night',
    'containerClass' => 'mx-auto grid max-w-7xl gap-10 px-5 sm:px-6 lg:grid-cols-[.8fr_1.2fr] lg:px-8',
    'gridClass' => 'grid gap-4 sm:grid-cols-3',
    'cardClass' => 'rounded-lg border border-white/15 bg-white/6 p-5 dark:border-brand-night-border dark:bg-brand-night-raised',
    'eyebrowClass' => 'text-sm font-normal uppercase tracking-[0.04em] text-brand-gold-bright dark:text-brand-night-gold',
    'titleClass' => 'mt-3 font-gestico-serif text-3xl font-semibold sm:text-4xl',
    'introTextClass' => 'mt-5 text-lg leading-7 text-brand-frost',
    'stepClass' => 'font-gestico-serif text-xl font-semibold text-brand-gold-bright dark:text-brand-night-gold',
    'itemTitleClass' => 'mt-4 font-gestico-serif text-2xl font-semibold',
    'textClass' => 'mt-3 text-sm leading-6 text-brand-frost',
    'gsap' => 'data-gsap-stagger'
])

<section {{ $attributes->class($sectionClass) }} {{$gsap ? 'data-gsap-reveal' : '' }}>
    <div class="{{ $containerClass }}">
        <div>
            <p class="{{ $eyebrowClass }}">{{ $eyebrow }}</p>
            <h2 class="{{ $titleClass }}">{{ $title }}</h2>
            @if (filled($text))
                <p class="{{ $introTextClass }}">{{ $text }}</p>
            @endif
        </div>

        <div class="{{ $gridClass }}"  {{ $gsap }}>
            @foreach ($items as $item)
                @php
                    $step = $item['step'] ?? $item[0] ?? '';
                    $itemTitle = $item['title'] ?? $item[1] ?? '';
                    $text = $item['text'] ?? $item[2] ?? '';
                    $itemTextClass = $item['textClass'] ?? $textClass;
                    $itemTitleClassOverride = $item['titleClass'] ?? $itemTitleClass;
                    $itemStepClass = $item['stepClass'] ?? $stepClass;
                @endphp
                <div data-metodo-card class="{{ $cardClass }}" {{ $gsap ? 'data-gsap-stagger-item' : '' }} >
                    <p class="{{ $itemStepClass }}">{{ $step }}</p>
                    <h3 class="{{ $itemTitleClassOverride }}">{{ $itemTitle }}</h3>
                    <p class="{{ $itemTextClass }}">{{ $text }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
