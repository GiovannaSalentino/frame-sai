@extends('layouts.app', ['activeSection' => 'principles'])

@section('title', 'FrameSAI — Principles')

@section('content')
    <div class="content-shell">
        <x-page-header
            title="Library of Principles"
            eyebrow="Framework foundations"
            icon="brick-viola.png"
            :back-route="route('home')"
            back-label="Back to homepage"
        />

        <p class="mt-8 max-w-4xl text-base leading-relaxed text-[#4d4d4d] sm:text-lg">
            The principles are the foundation of FrameSAI. They describe the essential
            qualities of a responsible relationship between people and artificial intelligence:
            transparency, fairness, appropriate automation and protection.
        </p>

        <section class="mt-10 grid gap-5 sm:grid-cols-2 xl:grid-cols-4" aria-label="Principles">
            @foreach ($principles as $principle)
                <a
                    href="{{ route('principles.show', $principle['slug']) }}"
                    class="group surface-card flex min-h-[310px] flex-col overflow-hidden transition hover:-translate-y-1 hover:shadow-lg focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#5b65d8]"
                    aria-label="Explore {{ $principle['name'] }}"
                >
                    <div class="relative h-28 bg-gradient-to-br {{ $principle['gradient'] }}">
                        <span class="absolute right-4 top-4 text-3xl font-bold text-white/35">{{ $principle['number'] }}</span>
                    </div>
                    <div class="flex flex-1 flex-col p-5">
                        <h2 class="m-0 text-lg font-semibold uppercase text-[#202020]">{{ $principle['name'] }}</h2>
                        <p class="mt-4 text-sm leading-relaxed text-[#626262]">{{ $principle['description'] }}</p>
                        <span class="mt-auto pt-6 text-sm font-semibold text-[#7254b7]">Explore <span aria-hidden="true">→</span></span>
                    </div>
                </a>
            @endforeach
        </section>
    </div>
@endsection
