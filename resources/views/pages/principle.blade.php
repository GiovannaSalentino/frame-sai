@extends('layouts.app', ['activeSection' => 'principles'])

@section('title', 'FrameSAI — '.$principle['title'])

@section('content')
    <div class="content-shell">
        <x-page-header
            :title="$principle['title']"
            eyebrow="Framework principle"
            icon="brick-viola.png"
            :back-route="route('library-principles')"
            back-label="Back to the principles"
        />

        <div class="mt-9 max-w-4xl">
            <section class="surface-card p-6 sm:p-8" aria-labelledby="principle-description">
                <h2 id="principle-description" class="m-0 text-xl font-semibold text-[#303030]">Description</h2>
                <p class="mt-4 text-base leading-relaxed text-[#555] sm:text-lg">{{ $principle['description'] }}</p>
            </section>

            <section class="mt-6 rounded-xl border border-[#88cfff] bg-white p-6 sm:p-8" aria-labelledby="application-example">
                <div class="flex items-center gap-3">
                    <span class="flex h-10 w-10 items-center justify-center rounded-full bg-[#e9f6ff] text-[#247bb4]" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="h-5 w-5"><path d="M9 18h6"/><path d="M10 22h4"/><path d="M15.09 14c.18-.69.66-1.24 1.2-1.79A6 6 0 1 0 7.7 12.2c.54.54 1.03 1.1 1.21 1.8"/></svg>
                    </span>
                    <h2 id="application-example" class="m-0 text-xl font-semibold text-[#303030]">Application example</h2>
                </div>
                <p class="mt-4 text-base leading-relaxed text-[#555] sm:text-lg">{{ $principle['example'] }}</p>
            </section>

            <nav class="mt-7 grid gap-4 sm:grid-cols-3" aria-label="Related framework sections">
                <a href="{{ route('guidelines') }}" class="surface-card p-5 font-semibold text-[#5b4a85] transition hover:-translate-y-0.5 hover:shadow-md">Related guidelines <span aria-hidden="true">→</span></a>
                <a href="{{ route('success-criteria') }}" class="surface-card p-5 font-semibold text-[#5b4a85] transition hover:-translate-y-0.5 hover:shadow-md">Success criteria <span aria-hidden="true">→</span></a>
                <a href="{{ route('design-pattern') }}" class="surface-card p-5 font-semibold text-[#5b4a85] transition hover:-translate-y-0.5 hover:shadow-md">Design patterns <span aria-hidden="true">→</span></a>
            </nav>
        </div>
    </div>
@endsection
