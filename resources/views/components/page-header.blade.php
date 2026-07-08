@props([
    'title',
    'eyebrow' => null,
    'icon' => null,
    'backRoute' => null,
    'backLabel' => 'Go back',
])

<header class="relative flex items-center gap-3">
    @if ($backRoute)
        <a
            href="{{ $backRoute }}"
            class="relative z-20 flex h-10 w-10 shrink-0 items-center justify-center rounded-lg text-[#252525] transition hover:bg-black/5 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#5b65d8]"
            aria-label="{{ $backLabel }}"
        >
            <svg viewBox="0 0 25 17" fill="none" class="h-[17px] w-[25px]" aria-hidden="true">
                <path d="M24 8.5H1.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                <path d="M8.5 1.5L1.5 8.5L8.5 15.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    @endif

    @if ($icon)
        <img src="{{ asset('img/'.$icon) }}" alt="" class="pointer-events-none h-20 w-20 shrink-0 scale-[2] object-contain sm:h-24 sm:w-24">
    @endif

    <div class="min-w-0">
        @if ($eyebrow)
            <p class="mb-1 text-xs font-semibold uppercase tracking-[0.16em] text-[#766f86]">{{ $eyebrow }}</p>
        @endif

        <h1 class="m-0 bg-gradient-to-r from-[#d6008f] via-[#654fda] to-[#248ed4] bg-clip-text text-2xl font-semibold leading-tight text-transparent sm:text-3xl">
            {{ $title }}
        </h1>

        <div class="mt-2 h-[3px] w-full max-w-[320px] rounded-full bg-gradient-to-r from-[#f53696] via-[#8c2ae8] to-[#54d2f4]"></div>
    </div>
</header>
