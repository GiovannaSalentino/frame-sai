@extends('layouts.app', ['activeSection' => 'success-criteria'])

@section('title', 'Toolkit — Valutation Success Criteria')

@section('content')
    @php $principleColors = collect($principles)->keyBy('code'); @endphp
    <div class="content-shell">
        <x-page-header title="Valutation Success Criteria"  icon="tape-viola.png" />

        <div class="mt-8 grid gap-6 lg:grid-cols-[210px_minmax(0,1fr)]">
            <aside class="surface-card h-fit p-4" aria-label="Success criteria filters">
                <button type="button" class="filter-button " data-criterion-filter="all" aria-pressed="true">
                    <span class="flex h-8 min-w-10 items-center justify-center rounded-md bg-[#32834b] px-2 text-xs text-white">All</span>
                    <span><strong class="block text-sm font-medium">All criteria</strong><small class="text-[#777]">{{ count($criteria) }} available</small></span>
                </button>
                <div class="my-4 h-px bg-black/10"></div>
                <p class="mb-2 px-2 text-[10px] font-semibold uppercase tracking-wide text-[#888]">Principles</p>
                @foreach ($principles as $principle)
                    <button type="button" class="filter-button" data-criterion-filter="{{ $principle['code'] }}" aria-pressed="false">
                        <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-md text-xs" style="background-color: {{ $principle['color'] }}">{{ $principle['code'] }}</span>
                        <span><strong class="block text-sm font-medium">{{ $principle['name'] }}</strong><small class="text-[#777]">{{ $principle['count'] }} Success Criteria</small></span>
                    </button>
                @endforeach
                <div class="my-4 h-px bg-black/10"></div>
                <p class="mb-2 px-2 text-[10px] font-semibold uppercase tracking-wide text-[#888]">Guidelines</p>
                <div class="flex flex-col space-y-0.5">
                    @foreach ($guidelines as $guideline)
                        <button type="button" class="filter-button" data-criterion-filter="{{ $guideline['code'] }}" aria-pressed="false">
                            <span class="flex h-8 w-9 shrink-0 items-center justify-center rounded-md border border-black/50 text-xs">{{ $guideline['code'] }}</span>
                            <span><strong class="block text-xs font-medium">Guideline {{ substr($guideline['code'], 1) }}</strong><small class="text-[10px] text-[#777]">{{ $guideline['count'] }} Success Criteria</small></span>
                        </button>
                    @endforeach
                </div>
            </aside>

            <section>
                <p class="max-w-3xl text-base leading-relaxed text-[#4d4d4d] sm:text-lg">The 16 Success Criteria are atomic, verifiable conditions used to assess whether a system satisfies the requirements of symbiotic artificial intelligence.</p>
                <div class="mt-7 grid gap-4 md:grid-cols-2">
                    @foreach ($criteria as $criterion)
                       <article class="surface-card relative overflow-hidden p-6" data-criterion="{{ implode(' ', [...$criterion['principles'], $criterion['guideline']]) }}" data-code="{{ $criterion['code'] }}">
                            <div class="absolute inset-y-0 left-0 w-1 bg-[#32834b]"></div>
                            <div class="flex items-start justify-between gap-4">

                                <span class="flex h-8 min-w-[58px] shrink-0 items-center justify-center rounded-md bg-[#32834b] px-2 text-xs font-semibold text-white">
                                    {{ $criterion['code'] }}
                                </span>


                                <div class="flex flex-wrap items-center justify-end gap-1.5">
                                    @foreach ($criterion['principles'] as $code)
                                        @php
                                            $principle = $principleColors[$code] ?? null;
                                            $slug = $principle['slug'] ?? null;
                                            $color = $principle['color'] ?? '#ccc';
                                        @endphp
                                        @if ($slug)
                                            <a href="{{ route('principles.show', ['principle' => $slug]) }}"
                                            class="inline-block rounded-md px-2 py-1 text-[10px] font-semibold no-underline transition hover:opacity-80 hover:shadow-sm"
                                            style="background-color: {{ $color }}"
                                            title="Go to {{ $principle['name'] ?? $code }}">
                                                {{ $code }}
                                            </a>
                                        @else
                                            <span class="inline-block rounded-md px-2 py-1 text-[10px] font-semibold"
                                                style="background-color: {{ $color }}">
                                                {{ $code }}
                                            </span>
                                        @endif
                                    @endforeach

                                    <a href="{{ route('guidelines', ['guideline' => $criterion['guideline']]) }}"
                                    class="rounded-md border border-black/40 px-2 py-1 text-[10px] font-semibold transition hover:border-[#7254b7] hover:text-[#7254b7] hover:bg-[#faf7ff]">
                                        {{ $criterion['guideline'] }}
                                    </a>
                                </div>
                            </div>

                            <div class="flex flex-1 items-center">
                                <p class="mt-4 text-sm leading-relaxed text-[#404040]">
                                    {{ $criterion['title'] }}
                                </p>
                            </div>
                        </article>
                    @endforeach
                </div>
                <p id="criteria-empty" class="surface-card mt-4 hidden p-6 text-center text-[#666]">No success criteria match this filter.</p>
            </section>
        </div>
    </div>
@endsection

@push('scripts')
    <script>

        const criterionButtons = [...document.querySelectorAll('[data-criterion-filter]')];
        const criterionCards = [...document.querySelectorAll('[data-criterion]')];

        function filterCriteria(selected) {
            let visible = 0;
            criterionButtons.forEach((item) => {
                const active = item.dataset.criterionFilter === selected;
                item.setAttribute('aria-pressed', String(active));
                item.classList.toggle('is-active', active);
            });
            criterionCards.forEach((card) => {
                const show = selected === 'all' || card.dataset.criterion.split(' ').includes(selected);
                card.classList.toggle('hidden', !show);
                if (show) visible++;
            });
            document.getElementById('criteria-empty').classList.toggle('hidden', visible !== 0);
        }


        criterionButtons.forEach((button) => button.addEventListener('click', () => {
            const clicked = button.dataset.criterionFilter;
            const isActive = button.getAttribute('aria-pressed') === 'true';

            if (clicked === 'all') {
                filterCriteria('all');
                return;
            }

            filterCriteria(isActive ? 'all' : clicked);
        }));

        const params = new URLSearchParams(window.location.search);
        const requestedCriterion = params.get('criterion');
        const requestedGuideline = params.get('guideline');
        const requestedPattern = params.get('pattern');
        const requestedPrinciple = params.get('principle');

        if (requestedCriterion) {
            filterCriteria('all');
            const card = criterionCards.find((item) => item.dataset.code === requestedCriterion);
            if (card) {
                card.scrollIntoView({ block: 'center' });
            }
        } else if (requestedPattern) {
            const patterns = @json(config('framesai.design_patterns'));
            const codes = patterns[requestedPattern]?.criteria ?? [];
            let visible = 0;
            criterionCards.forEach((card) => {
                const show = codes.includes(card.dataset.code);
                card.classList.toggle('hidden', !show);
                if (show) visible++;
            });
            document.getElementById('criteria-empty').classList.toggle('hidden', visible !== 0);
        } else if (requestedPrinciple) {
            let visible = 0;
            criterionCards.forEach((card) => {
                const principles = card.dataset.criterion.split(' ');
                const show = principles.includes(requestedPrinciple);
                card.classList.toggle('hidden', !show);
                if (show) visible++;
            });
            document.getElementById('criteria-empty').classList.toggle('hidden', visible !== 0);
            criterionButtons.forEach((item) => {
                const active = item.dataset.criterionFilter === requestedPrinciple;
                item.setAttribute('aria-pressed', String(active));
                item.classList.toggle('is-active', active);
            });
        } else {
            filterCriteria(requestedGuideline || 'all');
        }
    </script>
@endpush
