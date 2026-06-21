@props([
    'eyebrow',
    'title',
    'intro',
    'badges' => [],
    'sectionClass' => '',
    'primaryCtaLabel',
    'primaryCtaHref',
    'secondaryCtaLabel',
    'secondaryCtaHref',
    'datos' => '',
])

<section class="relative grid lg:grid-cols-2 min-h-dvh overflow-hidden bg-brand-mist dark:bg-brand-night mx-auto mt-4 gap-12 px-4 sm:px-6
  lg:items-center justify-center lg:px-28 {{ $sectionClass }}">
        <div class="max-w-4xl">
            <p class="text-sm font-normal uppercase text-brand-gold dark:text-brand-night-gold">{{ $eyebrow }}</p>
            <h1 data-typewriter
                class="mt-5 font-gestico-serif text-4xl font-semibold tracking-tighter text-brand-ink dark:text-brand-night-text sm:text-5xl lg:text-6xl">
                {{ $title }}
            </h1>
            <div class="mt-8 flex flex-col gap-3">
                <p animated-paragraph
                   class="m-6 max-w-2xl text-lg leading-7 text-brand-text-hero dark:text-brand-night-muted">
                    {{ $intro }}
                </p>
                @if (filled($badges))
                    <div class="mx-auto">
                    <div class="grid grid-cols-2 gap-3 py-12 items-center justify-center ">
                        @foreach ($badges as $badge)
                            @php
                                $badgeLabel = is_array($badge) ? ($badge['label'] ?? '') : $badge;
                                $badgeIcon = is_array($badge) ? ($badge['icon'] ?? null) : null;
                            @endphp
                            <span class="inline-flex items-center gap-2 rounded-md border border-brand-border-warm bg-white px-4 py-2 text-sm text-brand-text-strong dark:border-brand-night-border dark:bg-brand-night-raised dark:text-brand-night-text">
                                @if ($badgeIcon)
                                    <x-service-icon :type="$badgeIcon" class="size-4 shrink-0" data-hero-badge-icon="true"/>
                                @endif
                                <span>{{ $badgeLabel }}</span>
                            </span>
                        @endforeach
                    </div>
                    </div>
                @endif
                <div class="flex items-center justify-center gap-6 mb-16 ">
                    <a href="{{ route($primaryCtaHref) }}"
                       class="inline-flex items-center justify-center px-6 py-3 rounded-md bg-brand-gold hover:bg-brand-gold-hover dark:bg-brand-night-gold dark:hover:bg-brand-gold-bright text-sm font-normal text-white dark:text-brand-night shadow-sm transition">
                        {{ $primaryCtaLabel }}
                    </a>
                    <a href="{{ route($secondaryCtaHref) }}"
                       class="inline-flex items-center justify-center rounded-md border border-brand-stone bg-white/70 px-6 py-3 text-sm font-normal text-brand-text-strong transition hover:border-brand-gold dark:border-brand-night-border dark:bg-brand-night-raised dark:text-brand-night-text dark:hover:border-brand-night-gold">
                        {{ $secondaryCtaLabel }}
                    </a>
                </div>
            </div>

            @if (filled($datos))
                <div class="mt-10 grid gap-4 sm:grid-cols-3">
                    @foreach (config($datos) as $stat)
                        <div class="rounded-lg border border-brand-border-muted bg-white/70 p-4 dark:border-brand-night-border dark:bg-brand-night-panel">
                            <p class="font-gestico-serif text-3xl font-semibold text-brand-gold dark:text-brand-night-gold">{{ $stat['value'] }}</p>
                            <p class="mt-1 text-xs font-normal text-brand-text-light dark:text-brand-night-muted">{{ $stat['text'] }}</p>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        {{ $art ?? '' }}
</section>
