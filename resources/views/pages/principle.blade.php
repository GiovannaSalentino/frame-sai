@extends('layouts.app', ['activeSection' => 'principles'])

@section('title', 'Toolkit — '.$principle['title'])

@section('content')
    <div class="content-shell">
        <x-page-header
            :title="$principle['title']"
            icon="brick-viola.png"
        />

        <div class="mt-9 max-w-8xl">
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
                <!-- Guidelines -->
                <div class="rounded-lg bg-gradient-to-r from-[#d4008f] via-[#7653e7] to-[#2f8ee5] p-[1px] transition-all duration-200 hover:-translate-y-0.5 hover:scale-[1.02] hover:shadow-md">
                    <a href="{{ route('guidelines', ['principle' => $principle['code']]) }}"
                    class="group block rounded-[calc(0.5rem-1.5px)] bg-white p-5 transition-colors">
                        <div class="flex items-center justify-between">
                            <span class="font-semibold text-[#5b4a85] group-hover:text-[#3a2a5a] transition-colors">Related guidelines</span>
                            <span class="text-xl text-[#7653e7] transition-transform duration-200 group-hover:translate-x-1" aria-hidden="true">→</span>
                        </div>
                    </a>
                </div>

                <!-- Success Criteria -->
                <div class="rounded-lg bg-gradient-to-r from-[#d4008f] via-[#7653e7] to-[#2f8ee5] p-[1px] transition-all duration-200 hover:-translate-y-0.5 hover:scale-[1.02] hover:shadow-md">
                    <a href="{{ route('success-criteria', ['principle' => $principle['code']]) }}"
                    class="group block rounded-[calc(0.5rem-1.5px)] bg-white p-5 transition-colors">
                        <div class="flex items-center justify-between">
                            <span class="font-semibold text-[#5b4a85] group-hover:text-[#3a2a5a] transition-colors">Related Success criteria</span>
                            <span class="text-xl text-[#7653e7] transition-transform duration-200 group-hover:translate-x-1" aria-hidden="true">→</span>
                        </div>
                    </a>
                </div>

                <!-- Design Patterns -->
                <div class="rounded-lg bg-gradient-to-r from-[#d4008f] via-[#7653e7] to-[#2f8ee5] p-[1px] transition-all duration-200 hover:-translate-y-0.5 hover:scale-[1.02] hover:shadow-md">
                    <a href="{{ route('design-pattern')}}"
                    class="group block rounded-[calc(0.5rem-1.5px)] bg-white p-5 transition-colors">
                        <div class="flex items-center justify-between">
                            <span class="font-semibold text-[#5b4a85] group-hover:text-[#3a2a5a] transition-colors">Design patterns</span>
                            <span class="text-xl text-[#7653e7] transition-transform duration-200 group-hover:translate-x-1" aria-hidden="true">→</span>
                        </div>
                    </a>
                </div>
            </nav>

        </div>
    </div>
@endsection
