@extends('layouts.app', ['activeSection' => 'home'])

@section('title', 'FrameSAI — Responsible AI Design Framework')
@section('meta_description', 'Explore principles, guidelines, success criteria and interaction design patterns for symbiotic artificial intelligence.')
@section('main_class', 'min-w-0 flex-1 bg-[#ececec]')

@section('content')
    <div class="content-shell flex min-h-[calc(100vh-72px)] items-center lg:min-h-screen">
        <section class="grid w-full items-center gap-10 py-8 md:grid-cols-[1.05fr_0.95fr] lg:py-14">
            <div class="max-w-2xl">
                <p class="mb-3 text-sm font-semibold uppercase tracking-[0.18em] text-[#765b9c]">Symbiotic Artificial Intelligence</p>
                <h1 class="m-0 bg-gradient-to-r from-[#d4008f] via-[#7653e7] to-[#2f8ee5] bg-clip-text text-5xl font-semibold leading-none text-transparent sm:text-6xl">FrameSAI</h1>
                <p class="mt-6 max-w-xl text-lg leading-relaxed text-[#4d4d4d] sm:text-xl">
                    A design framework that translates responsible AI principles into guidelines,
                    measurable success criteria and reusable interaction patterns.
                </p>

                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="{{ route('library-principles') }}" class="rounded-lg bg-[#252525] px-5 py-3 text-sm font-semibold text-white transition hover:bg-[#414141] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#5b65d8]">Explore the framework</a>
                    <a href="{{ route('design-pattern') }}" class="rounded-lg border border-[#252525]/20 bg-white px-5 py-3 text-sm font-semibold text-[#252525] transition hover:border-[#5b65d8] hover:text-[#5b65d8] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#5b65d8]">Browse design patterns</a>
                </div>

                <dl class="mt-10 grid max-w-xl grid-cols-2 gap-3 sm:grid-cols-4">
                    @foreach ([['4', 'Principles'], ['12', 'Guidelines'], ['16', 'Criteria'], ['14', 'Patterns']] as [$value, $label])
                        <div class="surface-card px-4 py-3">
                            <dt class="text-xs text-[#747474]">{{ $label }}</dt>
                            <dd class="mt-1 text-2xl font-semibold text-[#252525]">{{ $value }}</dd>
                        </div>
                    @endforeach
                </dl>
            </div>

            <div class="relative mx-auto flex aspect-square w-full max-w-[430px] items-center justify-center" aria-hidden="true">
                <div class="absolute h-[44%] w-[78%] -translate-y-[42%] rounded-[24px] bg-gradient-to-r from-[#67d8e8] via-[#13bcea] to-[#4476d7] shadow-xl [clip-path:polygon(50%_0%,100%_47%,50%_100%,0%_47%)]"></div>
                <div class="absolute h-[44%] w-[78%] translate-y-[5%] rounded-[24px] bg-gradient-to-r from-[#eb8db9] via-[#a96bc8] to-[#5f4478] shadow-xl [clip-path:polygon(50%_0%,100%_47%,50%_100%,0%_47%)]"></div>
                <div class="absolute h-[44%] w-[78%] translate-y-[52%] rounded-[24px] bg-gradient-to-r from-[#ff4e80] via-[#ff006a] to-[#c4004f] shadow-xl [clip-path:polygon(50%_0%,100%_47%,50%_100%,0%_47%)]"></div>
            </div>
        </section>
    </div>
@endsection
