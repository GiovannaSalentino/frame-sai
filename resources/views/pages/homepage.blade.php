@extends('layouts.app', ['activeSection' => 'home'])

@section('title', 'Toolkit — Responsible AI Design Framework')
@section('meta_description', 'Explore principles, guidelines, success criteria and interaction design patterns for symbiotic artificial intelligence.')
@section('main_class', 'min-w-0 flex-1 bg-[#ececec]')

@section('content')
    <div class="content-shell flex min-h-[calc(100vh-72px)] items-center lg:min-h-screen overflow-y-clip">
        <section class="grid w-full items-center gap-10 py-8 md:grid-cols-[1.05fr_0.95fr] lg:py-14 ">
            <div class="max-w-2xl">
                <h1 class="m-0 text-5xl leading-none sm:text-6xl mb-4 text-[#3a3a3a]">A
                    <span class="font-semibold bg-gradient-to-r from-[#d4008f] via-[#7653e7] to-[#2f8ee5] bg-clip-text text-transparent">
                        Toolkit
                    </span>
                    to Create Symbiotic AI System
                </h1>
                <p class="mt-6 max-w-xl text-lg leading-relaxed text-[#4d4d4d] sm:text-l">
                    A design framework that translates the Principles of Symbiotic AI into Guidelines, Success Criteria and Design Patterns.
                </p>

                <dl class="mt-10 grid max-w-xl grid-cols-2 gap-3 sm:grid-cols-4">
                    @foreach ([
                        ['value' => '4',  'label' => 'Principles', 'route' => 'library-principles', 'border' => 'border-[#2f8ee5]', 'shadow' => 'hover:shadow-[0_8px_20px_rgba(47,142,229,0.25)]'],
                        ['value' => '12', 'label' => 'Guidelines',  'route' => 'guidelines',         'border' => 'border-[#7653e7]', 'shadow' => 'hover:shadow-[0_8px_20px_rgba(118,83,231,0.25)]'],
                        ['value' => '16', 'label' => 'Criteria',    'route' => 'success-criteria',   'border' => 'border-[#a96bc8]', 'shadow' => 'hover:shadow-[0_8px_20px_rgba(169,107,200,0.25)]'],
                        ['value' => '14', 'label' => 'Patterns',    'route' => 'design-pattern',     'border' => 'border-[#d4008f]', 'shadow' => 'hover:shadow-[0_8px_20px_rgba(212,0,143,0.25)]'],
                    ] as $card)
                        <a href="{{ route($card['route']) }}" class="surface-card group block px-4 py-3 border-1 {{ $card['border'] }} {{ $card['shadow'] }} transition-all duration-200 ease-out hover:scale-[1.04] hover:-translate-y-0.5 active:scale-[0.97]">
                            <dt class="text-xs text-[#747474] group-hover:text-[#252525] transition-colors">{{ $card['label'] }}</dt>
                            <dd class="mt-1 text-2xl font-semibold text-[#252525]">{{ $card['value'] }}</dd>
                        </a>
                    @endforeach
                </dl>
            </div>


            <div class="relative mx-auto mb-16 flex aspect-square w-full max-w-[430px] items-center justify-center md:mb-0"
                 aria-hidden="true">

                <div class="pointer-events-none absolute left-1/2 top-1/2 h-[430px] w-[430px] origin-center
                            -translate-x-1/2 -translate-y-1/2
                            scale-[0.5] sm:scale-[0.65] md:scale-[0.85] lg:scale-100
                            transition-transform duration-300 ease-out">

                    <!-- Cerchio Magenta -->
                    <div class="absolute w-[60px] h-[60px] rounded-[30px] rotate-45 left-1/2 -ml-[990px] top-[500px] z-0
                                bg-transparent border-2 border-[#ff006a]/60 shadow-[0_8px_20px_rgba(255,0,106,0.1)]"></div>

                    <!-- Cerchio Viola -->
                    <div class="absolute w-[100px] h-[100px] rounded-[50px] rotate-45 left-1/2 -ml-[800px] top-[-110px] z-10
                                bg-transparent border-2 border-[#a96bc8]/60 shadow-[0_8px_20px_rgba(169,107,200,0.1)]"></div>

                    <!-- Cerchio Ciano -->
                    <div class="absolute w-[30px] h-[30px] rounded-[50px] rotate-45 left-1/2 -ml-[600px] top-[420px] z-20
                                bg-transparent border-2 border-[#13bcea]/60 shadow-[0_8px_20px_rgba(19,188,234,0.1)]"></div>

                    <!-- Rombo trasparente Magenta -->
                    <div class="absolute w-[250px] h-[250px] rounded-[24px] rotate-45 left-1/2 -ml-[280px] top-[400px] z-0
                                bg-transparent border-2 border-[#ff006a]/60 shadow-[0_8px_20px_rgba(255,0,106,0.1)]"></div>

                    <!-- Rombo trasparente Viola -->
                    <div class="absolute w-[380px] h-[380px] rounded-[24px] rotate-45 left-1/2 -ml-[200px] top-[-10px] z-10
                                bg-transparent border-2 border-[#a96bc8]/60 shadow-[0_8px_20px_rgba(169,107,200,0.1)]"></div>

                    <!-- Rombo trasparente Ciano -->
                    <div class="absolute w-[170px] h-[170px] rounded-[24px] rotate-45 left-1/2 ml-[50px] top-[390px] z-20
                                bg-transparent border-2 border-[#13bcea]/60 shadow-[0_8px_20px_rgba(19,188,234,0.1)]"></div>

                    <!-- Rombo (Rosa/Magenta) -->
                    <div class="absolute w-[260px] h-[260px] rounded-[24px] rotate-45 left-1/2 -ml-[60px] top-[-50px] z-30
                                bg-[#c4004f] bg-gradient-to-br from-[#fbcfe8] via-[#ff006a] to-[#c4004f]
                                shadow-[0_8px_20px_rgba(255,0,106,0.4)]"></div>

                    <!-- Rombo (Viola) -->
                    <div class="absolute w-[290px] h-[290px] rounded-[24px] rotate-45 left-1/2 ml-[25px] top-[180px] z-40
                                bg-[#5f4478] bg-gradient-to-br from-[#f3e8ff] via-[#a96bc8] to-[#5f4478]
                                shadow-[0_8px_20px_rgba(169,107,200,0.4)]"></div>

                    <!-- Rombo (Azzurro/Ciano) -->
                    <div class="absolute w-[180px] h-[180px] rounded-[24px] rotate-45 left-1/2 -ml-[170px] top-[260px] z-50
                                bg-[#4476d7] bg-gradient-to-br from-[#a5f3fc] via-[#13bcea] to-[#4476d7]
                                shadow-[0_8px_20px_rgba(19,188,234,0.4)]"></div>

                </div>
            </div>
        </section>
    </div>
@endsection
