@php
    $navigation = [
        [
            'key' => 'home',
            'label' => 'Homepage',
            'route' => 'home',
            'icon' => 'homepage.png',
        ],
        [
            'key' => 'principles',
            'label' => 'Principles',
            'route' => 'library-principles',
            'icon' => 'principles.png',
        ],
        [
            'key' => 'guidelines',
            'label' => 'Guidelines',
            'route' => 'guidelines',
            'icon' => 'guidelines.png',
        ],
        [
            'key' => 'success-criteria',
            'label' => 'Success Criteria',
            'route' => 'success-criteria',
            'icon' => 'success-criteria.png',
        ],
        [
            'key' => 'design-patterns',
            'label' => 'Design Patterns',
            'route' => 'design-pattern',
            'icon' => 'design-pattern.png',
        ],
    ];
@endphp

<aside
    class="sticky top-0 z-30 flex w-full shrink-0 flex-col items-stretch bg-[#252525] px-3 py-3 lg:fixed lg:inset-y-0 lg:left-0 lg:h-screen lg:w-[132px] lg:items-center lg:overflow-hidden lg:px-2 lg:py-3"
    aria-label="Primary navigation"
>
    <a
        href="{{ route('home') }}"
        class="relative mb-2 h-16 w-16 shrink-0 self-start overflow-hidden rounded-md focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#73cfff] lg:mb-0 lg:h-20 lg:w-20 lg:self-auto"
        aria-label="FrameSAI homepage"
    >
        <img src="{{ asset('img/group.png') }}" alt="" class="pointer-events-none absolute inset-0 h-full w-full scale-[1.6] object-contain">
    </a>

    <nav class="min-w-0 flex-1 lg:mt-4 lg:w-full" aria-label="Main sections">
        <ul class="grid min-w-0 grid-cols-5 items-center gap-1 lg:flex lg:flex-col lg:gap-1">
            @foreach ($navigation as $item)
                @php $isActive = ($active ?? null) === $item['key']; @endphp
                <li class="min-w-0 lg:w-full">
                    <a
                        href="{{ route($item['route']) }}"
                        @if ($isActive) aria-current="page" @endif
                        class="flex h-[64px] min-w-0 flex-col items-center justify-center gap-1 rounded-lg px-1 text-white transition hover:bg-white/10 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#73cfff] lg:h-[78px] lg:w-full {{ $isActive ? 'bg-white/10' : '' }}"
                    >
                        <img src="{{ asset('img/'.$item['icon']) }}" alt="" class="pointer-events-none h-8 w-8 object-contain lg:h-12 lg:w-12">
                        <span class="text-center text-[9px] leading-tight sm:text-[10px] lg:text-[11px]">{{ $item['label'] }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
</aside>
