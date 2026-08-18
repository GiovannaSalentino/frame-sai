@extends('layouts.app', ['activeSection' => 'home'])

@section('title', 'Toolkit — Responsible AI Design Framework')
@section('meta_description', 'Explore principles, guidelines, success criteria and interaction design patterns for symbiotic artificial intelligence.')
@section('main_class', 'min-w-0 flex-1 bg-[#ececec]')

@section('content')
    <div class="content-shell flex min-h-[calc(100vh-72px)] items-center lg:min-h-screen">
        <section class="grid w-full items-center gap-10 py-8 md:grid-cols-[1.05fr_0.95fr] lg:py-14">
            <div class="max-w-2xl">
                <p class="mb-3 text-sm font-semibold uppercase tracking-[0.18em] text-[#765b9c]">Symbiotic Artificial Intelligence</p>
                <h1 class="m-0 bg-gradient-to-r from-[#d4008f] via-[#7653e7] to-[#2f8ee5] bg-clip-text text-5xl font-semibold leading-none text-transparent sm:text-6xl mb-4">A Toolkit to Create Symbiotic AI Sistem</h1>

                <p class="mt-6 max-w-xl text-lg leading-relaxed text-[#4d4d4d] sm:text-xl">
                    A design framework that translates responsible AI principles into guidelines,
                    measurable success criteria and reusable interaction patterns.
                </p>

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
                   <!-- Rombo superiore (Azzurro/Ciano) -->
                    <div class="absolute w-[200px] h-[200px] rounded-[24px] rotate-45 left-1/2 -ml-[40px] top-[50px] z-30 bg-gradient-to-r from-[#67d8e8] via-[#13bcea] to-[#4476d7] shadow-[0_8px_20px_rgba(19,188,234,0.4)]"></div>

                    <!-- Rombo centrale (Viola) -->
                    <div class="absolute w-[200px] h-[200px] rounded-[24px] rotate-45 left-1/2 -ml-[40px] top-[100px] z-20 bg-gradient-to-r from-[#eb8db9] via-[#a96bc8] to-[#5f4478] shadow-[0_8px_20px_rgba(169,107,200,0.4)]"></div>

                    <!-- Rombo inferiore (Rosa/Magenta) -->
                    <div class="absolute w-[200px] h-[200px] rounded-[24px] rotate-45 left-1/2 -ml-[40px] top-[150px] z-10 bg-gradient-to-r from-[#ff4e80] via-[#ff006a] to-[#c4004f] shadow-[0_8px_20px_rgba(255,0,106,0.4)]"></div>
            </div>
        </section>
    </div>
@endsection
