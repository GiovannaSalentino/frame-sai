@extends('layouts.app', ['activeSection' => 'design-patterns'])

@section('title', 'FrameSAI — Design Pattern Library')

@section('content')
    <div class="content-shell max-w-[1500px]">
        <x-page-header title="Design Pattern Library" eyebrow="Reusable interaction solutions" icon="carta-viola.png" :back-route="route('home')" back-label="Back to homepage" />

        <div class="mt-8 grid gap-6 lg:grid-cols-[190px_minmax(0,1fr)]">
            <aside class="surface-card h-fit p-3" aria-label="Pattern filters">
                <button type="button" class="filter-button bg-black/5" data-pattern-filter="all" aria-pressed="true">
                    <span class="flex h-8 min-w-10 items-center justify-center rounded-md bg-[#4d4d4d] px-2 text-xs text-white">All</span>
                    <span><strong class="block text-sm">All patterns</strong><small class="text-[#777]">{{ count($patterns) }} available</small></span>
                </button>
                <div class="my-3 h-px bg-black/10"></div>
                <div class="grid grid-cols-2 gap-1 lg:grid-cols-1">
                    @foreach ($guidelines as $guideline)
                        <button type="button" class="filter-button" data-pattern-filter="{{ $guideline['code'] }}" aria-pressed="false">
                            <span class="flex h-8 w-9 shrink-0 items-center justify-center rounded-md border border-black/50 text-xs">{{ $guideline['code'] }}</span>
                            <span><strong class="block text-xs font-medium">Guideline {{ substr($guideline['code'], 1) }}</strong><small class="text-[10px] text-[#777]">{{ $guideline['count'] }} {{ $guideline['count'] === 1 ? 'Pattern' : 'Patterns' }}</small></span>
                        </button>
                    @endforeach
                </div>
            </aside>

            <section>
                <div class="rounded-2xl bg-gradient-to-br from-[#5a51a5] via-[#755b8c] to-[#9d527b] p-6 text-white shadow-lg">
                    <div class="flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
                        <h2 class="m-0 max-w-2xl text-xl font-medium leading-tight sm:text-2xl">Patterns for Interaction Design in Symbiotic Artificial Intelligence</h2>
                        <p class="m-0 shrink-0 text-xs uppercase tracking-[0.16em] text-white/80">{{ count($patterns) }} documented patterns</p>
                    </div>
                </div>

                <div class="mt-5 grid gap-4 md:grid-cols-2 xl:grid-cols-3">
                    @foreach ($patterns as $pattern)
                        <article class="surface-card flex min-h-[330px] flex-col p-4" data-pattern="{{ implode(' ', $pattern['guidelines']) }}">
                            <div class="flex items-start justify-between gap-3">
                                <h2 class="m-0 text-base font-semibold leading-snug text-[#252525]">{{ $pattern['title'] }}</h2>
                                <span class="shrink-0 rounded-md bg-[#eadff3] px-2 py-1 text-[10px] font-semibold text-[#6b28b8]">{{ $pattern['code'] }}</span>
                            </div>
                            <div class="mt-4">
                                <h3 class="m-0 text-[10px] font-semibold uppercase tracking-wide text-[#858585]">Problem</h3>
                                <p class="mt-1.5 text-xs leading-relaxed text-[#505050]">{{ $pattern['problem'] }}</p>
                            </div>
                            <div class="mt-3">
                                <h3 class="m-0 text-[10px] font-semibold uppercase tracking-wide text-[#858585]">Design suggestion</h3>
                                <p class="mt-1.5 text-xs leading-relaxed text-[#505050]">{{ $pattern['suggestion'] }}</p>
                            </div>
                            <div class="mt-auto pt-4">
                                <p class="mb-2 text-[10px] font-semibold uppercase tracking-wide text-[#858585]">Linked guidelines</p>
                                <div class="flex flex-wrap gap-1.5">
                                    @foreach ($pattern['guidelines'] as $guideline)
                                        <a href="{{ route('guidelines', ['guideline' => $guideline]) }}" class="rounded-md border border-[#c8afe8] bg-[#f2eafb] px-2 py-1 text-[10px] hover:border-[#7254b7]">{{ $guideline }}</a>
                                    @endforeach
                                </div>
                                <div class="mt-4 flex items-center justify-between gap-3">
                                    <span class="text-[11px] text-[#777]">1 example</span>
                                    <a href="{{ route('design-pattern.show', $pattern['slug']) }}" class="text-sm font-semibold text-[#3d31d8] hover:underline">Explore <span aria-hidden="true">→</span></a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
                <p id="patterns-empty" class="surface-card mt-5 hidden p-6 text-center text-[#666]">No patterns currently match this guideline.</p>
            </section>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        const patternButtons = [...document.querySelectorAll('[data-pattern-filter]')];
        const patternCards = [...document.querySelectorAll('[data-pattern]')];
        function filterPatterns(selected) {
            let visible = 0;
            patternButtons.forEach((item) => {
                const active = item.dataset.patternFilter === selected;
                item.setAttribute('aria-pressed', String(active));
                item.classList.toggle('bg-black/5', active);
            });
            patternCards.forEach((card) => {
                const show = selected === 'all' || card.dataset.pattern.split(' ').includes(selected);
                card.classList.toggle('hidden', !show);
                if (show) visible++;
            });
            document.getElementById('patterns-empty').classList.toggle('hidden', visible !== 0);
        }
        patternButtons.forEach((button) => button.addEventListener('click', () => filterPatterns(button.dataset.patternFilter)));
        const initialGuideline = new URLSearchParams(window.location.search).get('guideline');
        filterPatterns(patternButtons.some((button) => button.dataset.patternFilter === initialGuideline) ? initialGuideline : 'all');
    </script>
@endpush
