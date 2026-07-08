@extends('layouts.app', ['activeSection' => 'guidelines'])

@section('title', 'FrameSAI — Design Guidelines')

@section('content')
    @php $principleColors = collect($principles)->keyBy('code'); @endphp
    <div class="content-shell">
        <x-page-header title="Design Guidelines" eyebrow="From principles to design direction" icon="compasso-viola.png" :back-route="route('home')" back-label="Back to homepage" />

        <div class="mt-8 grid gap-6 lg:grid-cols-[250px_minmax(0,1fr)]">
            <aside class="surface-card h-fit p-4" aria-label="Guideline filters">
                <button type="button" class="filter-button bg-black/5" data-guideline-filter="all" aria-pressed="true">
                    <span class="flex h-8 w-10 items-center justify-center rounded-md bg-[#4d4d4d] text-xs text-white">All</span>
                    <span><strong class="block text-sm">All Guidelines</strong><small class="text-[#777]">{{ count($guidelines) }} available</small></span>
                </button>
                <div class="my-4 h-px bg-black/10"></div>
                @foreach ($principles as $principle)
                    <button type="button" class="filter-button" data-guideline-filter="{{ $principle['code'] }}" aria-pressed="false">
                        <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-md text-xs" style="background-color: {{ $principle['color'] }}">{{ $principle['code'] }}</span>
                        <span><strong class="block text-sm font-medium">{{ $principle['name'] }}</strong><small class="text-[#777]">{{ $principle['count'] }} guidelines</small></span>
                    </button>
                @endforeach
            </aside>

            <section>
                <p class="max-w-3xl text-base leading-relaxed text-[#4d4d4d] sm:text-lg">Guidelines translate the framework principles into concrete directions for the behavior and functionality of human-AI interactions.</p>
                <div class="mt-7 grid gap-4 xl:grid-cols-2">
                    @foreach ($guidelines as $guideline)
                        <article class="surface-card relative overflow-hidden p-5" data-guideline="{{ $guideline['code'] }}" data-principles="{{ implode(' ', $guideline['principles']) }}">
                            <div class="absolute inset-y-0 left-0 w-1 bg-[#252525]"></div>
                            <div class="flex items-start justify-between gap-4">
                                <span class="flex h-8 w-12 shrink-0 items-center justify-center rounded-md border border-black/50 text-sm font-semibold">{{ $guideline['code'] }}</span>
                                <div class="flex flex-wrap justify-end gap-1.5">
                                    @foreach ($guideline['principles'] as $code)
                                        <span class="rounded-full px-2.5 py-1 text-[10px] font-semibold" style="background-color: {{ $principleColors[$code]['color'] }}">{{ $code }}</span>
                                    @endforeach
                                </div>
                            </div>
                            <p class="mt-4 text-sm leading-relaxed text-[#404040]">{{ $guideline['description'] }}</p>
                            <div class="mt-5 flex flex-wrap gap-2 border-t border-black/10 pt-4">
                                <a href="{{ route('design-pattern', ['guideline' => $guideline['code']]) }}" class="rounded-md bg-[#f2eafb] px-2.5 py-1.5 text-xs font-semibold text-[#56358e]">{{ $guideline['pattern_count'] }} design patterns</a>
                                <a href="{{ route('success-criteria', ['guideline' => $guideline['code']]) }}" class="rounded-md bg-[#e8f4eb] px-2.5 py-1.5 text-xs font-semibold text-[#326342]">{{ $guideline['criteria_count'] }} success criteria</a>
                            </div>
                        </article>
                    @endforeach
                </div>
                <p id="guidelines-empty" class="surface-card mt-4 hidden p-6 text-center text-[#666]">No guidelines match this filter.</p>
            </section>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        const guidelineButtons = [...document.querySelectorAll('[data-guideline-filter]')];
        const guidelineCards = [...document.querySelectorAll('[data-guideline]')];
        function filterGuidelines(selected) {
            let visible = 0;
            guidelineButtons.forEach((item) => {
                const active = item.dataset.guidelineFilter === selected;
                item.setAttribute('aria-pressed', String(active));
                item.classList.toggle('bg-black/5', active);
            });
            guidelineCards.forEach((card) => {
                const show = selected === 'all' || card.dataset.principles.split(' ').includes(selected) || card.dataset.guideline === selected;
                card.classList.toggle('hidden', !show);
                if (show) visible++;
            });
            document.getElementById('guidelines-empty').classList.toggle('hidden', visible !== 0);
        }
        guidelineButtons.forEach((button) => button.addEventListener('click', () => filterGuidelines(button.dataset.guidelineFilter)));
        const requestedGuideline = new URLSearchParams(window.location.search).get('guideline');
        filterGuidelines(requestedGuideline && guidelineCards.some((card) => card.dataset.guideline === requestedGuideline) ? requestedGuideline : 'all');
    </script>
@endpush
