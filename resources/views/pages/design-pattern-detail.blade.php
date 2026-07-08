@extends('layouts.app', ['activeSection' => 'design-patterns'])

@section('title', 'FrameSAI — '.$pattern['title'])

@section('content')
    <div class="content-shell">
        <x-page-header :title="$pattern['title']" :eyebrow="$pattern['code']" icon="carta-viola.png" :back-route="route('design-pattern')" back-label="Back to the design pattern library" />

        <div class="mt-8 grid max-w-6xl gap-6 xl:grid-cols-[minmax(0,1fr)_260px]">
            <div class="space-y-4">
                <article class="surface-card relative overflow-hidden p-6">
                    <div class="absolute inset-y-0 left-0 w-1 bg-[#ff0f7b]"></div>
                    <h2 class="m-0 text-xl font-semibold">Problem</h2>
                    <p class="mt-3 leading-relaxed text-[#555]">{{ $pattern['problem'] }}</p>
                </article>
                <article class="surface-card relative overflow-hidden p-6">
                    <div class="absolute inset-y-0 left-0 w-1 bg-[#a000ff]"></div>
                    <h2 class="m-0 text-xl font-semibold">Design suggestion</h2>
                    <p class="mt-3 leading-relaxed text-[#555]">{{ $pattern['suggestion'] }}</p>
                </article>
                <article class="rounded-xl border border-[#61b0ff] bg-white p-6">
                    <h2 class="m-0 text-xl font-semibold">Solution</h2>
                    <ul class="mt-4 space-y-3 pl-5 text-[#555]">
                        @foreach ($pattern['solution'] as $solution)
                            <li class="pl-1 leading-relaxed">{{ $solution }}</li>
                        @endforeach
                    </ul>
                </article>
                <details class="surface-card group overflow-hidden">
                    <summary class="flex cursor-pointer list-none items-center justify-between px-6 py-5 font-semibold">
                        <span>Context and motivations</span>
                        <svg class="h-5 w-5 transition-transform group-open:rotate-180" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
                    </summary>
                    <p class="m-0 border-t border-black/10 bg-[#fafafa] px-6 py-5 leading-relaxed text-[#555]">{{ $pattern['context'] }}</p>
                </details>
                <article class="surface-card relative overflow-hidden p-6">
                    <div class="absolute inset-y-0 left-0 w-1 bg-[#1f95f3]"></div>
                    <h2 class="m-0 text-xl font-semibold">Examples</h2>
                    <p class="mt-3 leading-relaxed text-[#555]">{{ $pattern['examples'] }}</p>

                    @if (isset($pattern['example_image']))
                        <figure class="mx-auto mb-0 mt-5 w-fit max-w-full">
                            <div class="overflow-hidden rounded-lg border border-black/10 bg-white p-2 shadow-sm sm:p-3">
                                <img
                                    src="{{ asset($pattern['example_image']) }}"
                                    alt="{{ $pattern['example_caption'] }}"
                                    class="mx-auto block h-auto max-h-[460px] w-auto max-w-full rounded-md object-contain"
                                >
                            </div>
                            <figcaption class="mt-2 text-right text-[11px] leading-snug text-[#8a8a8a]">
                                {{ $pattern['example_caption'] }}
                            </figcaption>
                        </figure>
                    @endif
                </article>
            </div>

            <aside>
                <section class="surface-card p-5">
                    <h2 class="m-0 text-sm font-semibold uppercase tracking-wide text-[#666]">Linked guidelines</h2>
                    <div class="mt-4 space-y-3">
                        @foreach ($pattern['guidelines'] as $code)
                            <a href="{{ route('guidelines', ['guideline' => $code]) }}" class="block rounded-lg border border-black/10 p-3 transition hover:border-[#7254b7] hover:bg-[#faf7ff]">
                                <strong class="block text-sm text-[#56358e]">{{ $code }}</strong>
                                <span class="mt-1 block text-xs leading-relaxed text-[#666]">{{ $guidelines[$code]['description'] }}</span>
                            </a>
                        @endforeach
                    </div>
                </section>
            </aside>
        </div>
    </div>
@endsection
