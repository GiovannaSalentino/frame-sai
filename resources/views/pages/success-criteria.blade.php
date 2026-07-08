@extends('layouts.app', ['activeSection' => 'success-criteria'])

@section('title', 'FrameSAI — Valutation Success Criteria')

@section('content')
    @php $principleColors = collect($principles)->keyBy('code'); @endphp
    <div class="content-shell">
        <x-page-header title="Valutation Success Criteria" eyebrow="Verifiable evaluation conditions" icon="tape-viola.png" :back-route="route('home')" back-label="Back to homepage" />

        <div class="mt-8 grid gap-6 lg:grid-cols-[260px_minmax(0,1fr)]">
            <aside class="surface-card h-fit p-4" aria-label="Success criteria filters">
                <button type="button" class="filter-button bg-black/5" data-criterion-filter="all" aria-pressed="true">
                    <span class="flex h-8 min-w-10 items-center justify-center rounded-md bg-[#32834b] px-2 text-xs text-white">All</span>
                    <span><strong class="block text-sm">All criteria</strong><small class="text-[#777]">{{ count($criteria) }} available</small></span>
                </button>
                <div class="my-4 h-px bg-black/10"></div>
                <p class="mb-2 px-2 text-[10px] font-semibold uppercase tracking-wide text-[#888]">Principles</p>
                @foreach ($principles as $principle)
                    <button type="button" class="filter-button" data-criterion-filter="{{ $principle['code'] }}" aria-pressed="false">
                        <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-md text-xs" style="background-color: {{ $principle['color'] }}">{{ $principle['code'] }}</span>
                        <span class="text-sm">{{ $principle['name'] }}</span>
                    </button>
                @endforeach
                <div class="my-4 h-px bg-black/10"></div>
                <p class="mb-2 px-2 text-[10px] font-semibold uppercase tracking-wide text-[#888]">Guidelines</p>
                <div class="grid grid-cols-2 gap-1">
                    @foreach ($guidelines as $guideline)
                        <button type="button" class="filter-button" data-criterion-filter="{{ $guideline['code'] }}" aria-pressed="false">
                            <span class="flex h-8 w-9 shrink-0 items-center justify-center rounded-md border border-black/50 text-xs">{{ $guideline['code'] }}</span>
                            <span><strong class="block text-xs font-medium">Guideline {{ substr($guideline['code'], 1) }}</strong><small class="text-[10px] text-[#777]">{{ $guideline['count'] }} SC</small></span>
                        </button>
                    @endforeach
                </div>
            </aside>

            <section>
                <p class="max-w-3xl text-base leading-relaxed text-[#4d4d4d] sm:text-lg">The 16 Success Criteria are atomic, verifiable conditions used to assess whether a system satisfies the requirements of symbiotic artificial intelligence.</p>
                <div class="mt-7 grid gap-4 xl:grid-cols-2">
                    @foreach ($criteria as $criterion)
                        <article class="surface-card overflow-hidden" data-criterion="{{ implode(' ', [...$criterion['principles'], $criterion['guideline']]) }}" data-code="{{ $criterion['code'] }}">
                            <button type="button" class="criterion-toggle flex w-full items-start gap-3 p-4 text-left" aria-expanded="false">
                                <span class="flex h-9 min-w-[58px] shrink-0 items-center justify-center rounded-md bg-[#69a978] px-2 text-xs font-semibold">{{ $criterion['code'] }}</span>
                                <span class="min-w-0 flex-1 text-sm font-medium leading-relaxed text-[#303030]">{{ $criterion['title'] }}</span>
                                <svg class="mt-2 h-5 w-5 shrink-0 text-[#666] transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
                            </button>
                            <div class="criterion-detail hidden border-t border-black/10 bg-[#fafafa] px-4 py-4">
                                <p class="m-0 text-sm leading-relaxed text-[#4d4d4d]">{{ $criterion['description'] }}</p>
                                <div class="mt-4 flex flex-wrap gap-2">
                                    @foreach ($criterion['principles'] as $code)
                                        <span class="rounded-md px-2 py-1 text-[10px] font-semibold" style="background-color: {{ $principleColors[$code]['color'] }}">{{ $code }}</span>
                                    @endforeach
                                    <a href="{{ route('guidelines', ['guideline' => $criterion['guideline']]) }}" class="rounded-md border border-black/40 px-2 py-1 text-[10px] font-semibold">{{ $criterion['guideline'] }}</a>
                                </div>
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
        document.querySelectorAll('.criterion-toggle').forEach((button) => {
            button.addEventListener('click', () => {
                const detail = button.nextElementSibling;
                const isOpen = button.getAttribute('aria-expanded') === 'true';
                button.setAttribute('aria-expanded', String(!isOpen));
                detail.classList.toggle('hidden', isOpen);
                button.querySelector('svg').classList.toggle('rotate-180', !isOpen);
            });
        });
        const criterionButtons = [...document.querySelectorAll('[data-criterion-filter]')];
        const criterionCards = [...document.querySelectorAll('[data-criterion]')];
        function filterCriteria(selected) {
            let visible = 0;
            criterionButtons.forEach((item) => {
                const active = item.dataset.criterionFilter === selected;
                item.setAttribute('aria-pressed', String(active));
                item.classList.toggle('bg-black/5', active);
            });
            criterionCards.forEach((card) => {
                const show = selected === 'all' || card.dataset.criterion.split(' ').includes(selected);
                card.classList.toggle('hidden', !show);
                if (show) visible++;
            });
            document.getElementById('criteria-empty').classList.toggle('hidden', visible !== 0);
        }
        criterionButtons.forEach((button) => button.addEventListener('click', () => filterCriteria(button.dataset.criterionFilter)));
        const params = new URLSearchParams(window.location.search);
        const requestedCriterion = params.get('criterion');
        const requestedGuideline = params.get('guideline');
        const requestedPattern = params.get('pattern');
        if (requestedCriterion) {
            filterCriteria('all');
            const card = criterionCards.find((item) => item.dataset.code === requestedCriterion);
            if (card) {
                card.querySelector('.criterion-toggle').click();
                card.scrollIntoView({block: 'center'});
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
        } else {
            filterCriteria(requestedGuideline || 'all');
        }
    </script>
@endpush
