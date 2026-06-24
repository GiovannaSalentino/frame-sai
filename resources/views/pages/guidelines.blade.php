<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Design Guidelines</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="m-0 bg-white">
@php
    $principles = [
        [
            'code' => 'P1',
            'name' => 'Transparency',
            'count' => '4 Guidelines',
            'color' => 'bg-[#ff476b]',
        ],
        [
            'code' => 'P2',
            'name' => 'Fairness',
            'count' => '1 Guideline',
            'color' => 'bg-[#f06cb2]',
        ],
        [
            'code' => 'P3',
            'name' => 'Automation Level',
            'count' => '3 Guidelines',
            'color' => 'bg-[#a966d6]',
        ],
        [
            'code' => 'P4',
            'name' => 'Protection',
            'count' => '1 Guideline',
            'color' => 'bg-[#68aee1]',
        ],
    ];

    $guidelines = [
        [
            'code' => 'G1',
            'description' => 'The human must be able to check, monitor, and supervise the AI system’s behavior, taking into account how it functions and the decisions it makes.',
            'principles' => [
                ['code' => 'P1', 'color' => 'bg-[#ff476b]'],
                ['code' => 'P3', 'color' => 'bg-[#a966d6]'],
            ],
        ],
        [
            'code' => 'G2',
            'description' => 'The human must be enabled to assign proper meaning to the AI model’s outputs, whose presentation varies depending on task, processes, and structure to eventually modify its behavior.',
            'principles' => [
                ['code' => 'P1', 'color' => 'bg-[#ff476b]'],
                ['code' => 'P3', 'color' => 'bg-[#a966d6]'],
            ],
        ],
        [
            'code' => 'G3',
            'description' => 'The human must be enabled to control the AI system’s behavior and functioning through proper interaction mechanisms.',
            'principles' => [
                ['code' => 'P1', 'color' => 'bg-[#ff476b]'],
                ['code' => 'P3', 'color' => 'bg-[#a966d6]'],
            ],
        ],
        [
            'code' => 'G4',
            'description' => 'The human must be guided towards ethical behaviors when reconfiguring the AI model to avoid harms to both parties.',
            'principles' => [
                ['code' => 'P1', 'color' => 'bg-[#ff476b]'],
                ['code' => 'P2', 'color' => 'bg-[#f06cb2]'],
                ['code' => 'P4', 'color' => 'bg-[#68aee1]'],
            ],
        ],
    ];
@endphp

<div class="flex min-h-screen min-w-[1180px] w-full border border-black bg-white">

    {{-- SIDEBAR --}}
    <aside
        class="relative z-30 flex min-h-screen w-[119px] shrink-0
               flex-col items-center bg-[#252525]"
        aria-label="Primary navigation"
    >
        <div class="flex w-full flex-col items-center pt-[18px]">
            <a
                href="{{ route('home') }}"
                class="flex flex-col items-center justify-center gap-[6px]
                       rounded-[4px] focus-visible:outline
                       focus-visible:outline-2 focus-visible:outline-offset-2
                       focus-visible:outline-[#4a90e2]"
                aria-label="FrameSAI home"
            >
                <img
                    src="{{ asset('img/group.png') }}"
                    alt="FrameSAI"
                    class="block h-[67px] w-[61px]"
                >

                <span
                    class="bg-[linear-gradient(90deg,#ff2f92_0%,#635bff_50%,#00c2ff_100%)]
                           bg-clip-text font-['Work_Sans-Regular','Arial',sans-serif]
                           text-[26px] leading-none text-transparent"
                >
                    FrameSAI
                </span>
            </a>
        </div>

        <nav class="mt-[45px] w-full" aria-label="Sections">
            <ul class="flex w-full flex-col items-center gap-[16px]">

                <li class="flex w-full justify-center">
                    <a
                        href="{{ route('home') }}"
                        class="flex h-[89px] w-[95px] flex-col items-center
                               justify-center rounded-[10px] text-white"
                    >
                        <img
                            src="{{ asset('img/homepage.png') }}"
                            alt=""
                            class="mb-[7px] h-[36px] w-[36px]"
                        >
                        <span class="font-['Work_Sans-Regular','Arial',sans-serif] text-[11px]">
                            Homepage
                        </span>
                    </a>
                </li>

                <li class="flex w-full justify-center">
                    <a
                        href="{{ route('library-principles') }}"
                        class="flex h-[89px] w-[95px] flex-col items-center
                               justify-center rounded-[10px] text-white"
                    >
                        <img
                            src="{{ asset('img/principles.png') }}"
                            alt=""
                            class="mb-[7px] h-[36px] w-[36px]"
                        >
                        <span class="font-['Work_Sans-Regular','Arial',sans-serif] text-[11px]">
                            Principles
                        </span>
                    </a>
                </li>

                <li class="flex w-full justify-center">
                    <a
                        href="{{ url('/guidelines') }}"
                        aria-current="page"
                        class="flex h-[89px] w-[95px] flex-col items-center
                               justify-center rounded-[10px] bg-[#3b3b3b]
                               text-white"
                    >
                        <img
                            src="{{ asset('img/guidelines.png') }}"
                            alt=""
                            class="mb-[7px] h-[36px] w-[36px]"
                        >
                        <span class="font-['Work_Sans-Regular','Arial',sans-serif] text-[11px]">
                            Guidelines
                        </span>
                    </a>
                </li>

                <li class="flex w-full justify-center">
                    <a
                        href="{{ route('success-criteria') }}"
                        class="flex h-[89px] w-[95px] flex-col items-center
                               justify-center rounded-[10px] text-white"
                    >
                        <img
                            src="{{ asset('img/success-criteria.png') }}"
                            alt=""
                            class="mb-[7px] h-[36px] w-[36px]"
                        >
                        <span
                            class="px-[6px] text-center
                                   font-['Work_Sans-Regular','Arial',sans-serif]
                                   text-[11px]"
                        >
                            Success Criteria
                        </span>
                    </a>
                </li>

                <li class="flex w-full justify-center">
                    <a
                        href="{{ route('design-pattern') }}"
                        class="flex h-[89px] w-[95px] flex-col items-center
                               justify-center rounded-[10px] text-white"
                    >
                        <img
                            src="{{ asset('img/design-pattern.png') }}"
                            alt=""
                            class="mb-[7px] h-[36px] w-[36px]"
                        >
                        <span
                            class="px-[6px] text-center
                                   font-['Work_Sans-Regular','Arial',sans-serif]
                                   text-[11px]"
                        >
                            Design Pattern
                        </span>
                    </a>
                </li>

            </ul>
        </nav>
    </aside>

    {{-- CONTENUTO --}}
    <main
        class="min-h-screen flex-1 bg-[#d9d9d9]"
        aria-label="Design Guidelines page"
    >
        <div class="px-[30px] pb-[60px] pt-[28px]">

            {{-- HEADER --}}
            <header class="flex items-center gap-[18px]">

                {{-- FRECCIA UNIVERSALE --}}
                <a
                    href="{{ url()->previous() }}"
                    onclick="event.preventDefault(); window.history.back();"
                    class="flex h-[28px] w-[28px] shrink-0 items-center
                           justify-center rounded-[4px] text-black
                           focus-visible:outline focus-visible:outline-2
                           focus-visible:outline-offset-2
                           focus-visible:outline-[#4a90e2]"
                    aria-label="Torna alla pagina precedente"
                >
                    <svg
                        viewBox="0 0 25 17"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-[17px] w-[25px]"
                        aria-hidden="true"
                    >
                        <path
                            d="M24 8.5H1.5"
                            stroke="black"
                            stroke-width="2"
                            stroke-linecap="round"
                        />
                        <path
                            d="M8.5 1.5L1.5 8.5L8.5 15.5"
                            stroke="black"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                    </svg>
                </a>

                <div class="relative h-[50px] w-[50px] shrink-0">
    <img
        src="{{ asset('img/compasso-viola.png') }}"
        alt=""
        class="absolute left-1/2 top-1/2 h-[100px] w-[100px]
               max-w-none -translate-x-1/2 -translate-y-1/2
               scale-[2] object-contain"
    >
</div>

                <div>
                    <h1
                        class="m-0 font-['Roboto_Slab-Regular','Georgia',serif]
                               text-[28px] font-normal leading-[34px] text-black"
                    >
                        Design
                        <span
                            class="font-['Work_Sans-Regular','Arial',sans-serif]
                                   italic font-semibold text-[#9625ff]"
                        >
                            Guidelines
                        </span>
                    </h1>

                    <div
                        class="mt-[2px] h-[3px] w-[269px]
                               bg-gradient-to-r from-[#f53696]
                               via-[#8c2ae8] to-[#54d2f4]
                               shadow-[0_1px_4px_0_rgba(84,210,244,0.85)]"
                    ></div>
                </div>
            </header>

            <div class="mt-[35px] flex items-start gap-[55px]">

                {{-- FILTRI PRINCIPI --}}
                <aside
                    class="w-[273px] shrink-0 border-r border-black/10 pb-[30px] pr-[20px]"
                    aria-label="Guideline filters"
                >
                    <div class="flex h-[51px] items-center bg-[#efefef]">
                        <div class="ml-[1px] mr-[18px] h-[39px] w-[3px] bg-black"></div>

                        <button
                            type="button"
                            class="h-[31px] w-[39px] rounded-[5px]
                                   bg-[#5e5e5e] text-[10px] text-white"
                            aria-pressed="true"
                        >
                            All
                        </button>

                        <div class="ml-[9px]">
                            <span
                                class="block font-['Work_Sans-Regular','Arial',sans-serif]
                                       text-[14px] leading-[16px] text-[#303030]"
                            >
                                All Guidelines
                            </span>
                            <span
                                class="mt-[3px] block
                                       font-['Work_Sans-Regular','Arial',sans-serif]
                                       text-[10px] leading-[12px] text-[#8d8d8d]"
                            >
                                4 Guidelines
                            </span>
                        </div>
                    </div>

                    <hr class="mx-[8px] mt-[22px] h-px border-0 bg-black/10">

                    <ul class="mt-[12px] space-y-[10px] px-[28px]" aria-label="Principles">
                        @foreach ($principles as $principle)
                            <li>
                                <button
                                    type="button"
                                    class="flex w-full items-center gap-[10px] text-left"
                                >
                                    <span
                                        class="h-[28px] w-[28px] shrink-0 rounded-[4px]
                                               text-center
                                               font-['Work_Sans-Regular','Arial',sans-serif]
                                               text-[10px] leading-[28px] text-black
                                               {{ $principle['color'] }}"
                                    >
                                        {{ $principle['code'] }}
                                    </span>

                                    <span class="min-w-0">
                                        <span
                                            class="block
                                                   font-['Work_Sans-Regular','Arial',sans-serif]
                                                   text-[12px] leading-[14px] text-black"
                                        >
                                            {{ $principle['name'] }}
                                        </span>

                                        <span
                                            class="block
                                                   font-['Work_Sans-Regular','Arial',sans-serif]
                                                   text-[10px] leading-[12px] text-black/40"
                                        >
                                            {{ $principle['count'] }}
                                        </span>
                                    </span>
                                </button>
                            </li>
                        @endforeach
                    </ul>
                </aside>

                {{-- GUIDELINES --}}
                <section
                    class="w-full max-w-[720px]"
                    aria-labelledby="guidelines-description-heading"
                >
                    <h2
                        id="guidelines-description-heading"
                        class="m-0 font-['Roboto_Slab-Regular','Georgia',serif]
                               text-[18px] font-normal leading-[24px] text-black"
                    >
                        The guidelines provide practitioners with a higher granularity
                        with respect to functionalities and expected behaviors,
                        considering humans in the interaction process. They
                        were defined starting from principles, whose aspects
                        were detailed and further specialized to provide more concrete
                        and specific instructions.
                    </h2>

                    <div class="mt-[32px] space-y-[12px]">
                        @foreach ($guidelines as $guideline)
                            <article
                                class="relative flex min-h-[112px] w-full
                                       items-center rounded-[4px] bg-[#f5f5f5]
                                       py-[18px] pl-[22px] pr-[18px]"
                            >
                                <div
                                    class="absolute inset-y-[4px] left-0
                                           w-[4px] rounded-[2px] bg-black"
                                ></div>

                                {{-- CODICE G --}}
                                <div
                                    class="flex h-[24px] w-[40px] shrink-0
                                           items-center justify-center rounded-[5px]
                                           border border-black
                                           font-['Work_Sans-Regular','Arial',sans-serif]
                                           text-[12px] text-black"
                                >
                                    {{ $guideline['code'] }}
                                </div>

                                {{-- DESCRIZIONE --}}
                                <p
                                    class="mb-0 ml-[18px] mr-[105px] mt-0
                                           font-['Work_Sans-Regular','Arial',sans-serif]
                                           text-[13px] leading-[1.4] text-[#303030]"
                                >
                                    {{ $guideline['description'] }}
                                </p>

                                {{-- PRINCIPI COLLEGATI --}}
                                <div
                                    class="absolute right-[14px] top-[12px]
                                           flex flex-wrap justify-end gap-[4px]"
                                    aria-label="Related principles"
                                >
                                    @foreach ($guideline['principles'] as $principle)
                                        <span
                                            class="flex h-[17px] min-w-[25px]
                                                   items-center justify-center
                                                   rounded-[8px] px-[6px]
                                                   font-['Work_Sans-Regular','Arial',sans-serif]
                                                   text-[10px] leading-none text-black
                                                   {{ $principle['color'] }}"
                                        >
                                            {{ $principle['code'] }}
                                        </span>
                                    @endforeach
                                </div>
                            </article>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </main>
</div>
</body>
</html>