<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Design Pattern Library</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="m-0 bg-white">
@php
    $patterns = [
        [
            'number' => 'DP1',
            'title' => 'Supervise the AI System',
            'problem' => 'Allow users to supervise the behavior of the system.',
            'suggestion' => 'Enable users to oversee its decision-making process by allowing them to check, monitor, and supervise its behavior and output. It can be ensured through the implementation of proper mechanisms that make the processes and architecture transparent to users.',
            'guideline' => 'Guideline 5',
            'route' => '1',
        ],
        [
            'number' => 'DP2',
            'title' => "Understand Model's Architecture",
            'problem' => 'Enable users to form their own judgment of the model’s response.',
            'suggestion' => 'Provide an overview of the structure of the model that powers it, or textually describe how its functioning works.',
            'guideline' => 'Guideline 2',
            'route' => '2',
        ],
    ];

    $guidelines = [
        ['code' => 'G1', 'name' => 'Guideline 1', 'count' => '3 Design Pattern'],
        ['code' => 'G2', 'name' => 'Guideline 2', 'count' => '2 Design Pattern'],
        ['code' => 'G3', 'name' => 'Guideline 3', 'count' => '3 Design Pattern'],
        ['code' => 'G4', 'name' => 'Guideline 4', 'count' => '2 Design Pattern'],
        ['code' => 'G5', 'name' => 'Guideline 5', 'count' => '5 Design Pattern'],
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
                class="flex flex-col items-center justify-center gap-[6px] rounded-[4px]"
                aria-label="FrameSAI home"
            >
                <img
                    src="{{ asset('img/group.png') }}"
                    alt="FrameSAI"
                    class="block h-[67px] w-[61px]"
                >

                <span
                    class="bg-[linear-gradient(90deg,#ff2f92_0%,#635bff_50%,#00c2ff_100%)]
                           bg-clip-text font-['Work_Sans-Regular']
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
                        <span class="font-['Work_Sans-Regular'] text-[11px]">
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
                        <span class="font-['Work_Sans-Regular'] text-[11px]">
                            Principles
                        </span>
                    </a>
                </li>

                <li class="flex w-full justify-center">
                    <a
                        href="{{ url('/guidelines') }}"
                        class="flex h-[89px] w-[95px] flex-col items-center
                               justify-center rounded-[10px] text-white"
                    >
                        <img
                            src="{{ asset('img/guidelines.png') }}"
                            alt=""
                            class="mb-[7px] h-[36px] w-[36px]"
                        >
                        <span class="font-['Work_Sans-Regular'] text-[11px]">
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
                                   font-['Work_Sans-Regular'] text-[11px]"
                        >
                            Success Criteria
                        </span>
                    </a>
                </li>

                <li class="flex w-full justify-center">
                    <a
                        href="{{ route('design-pattern') }}"
                        aria-current="page"
                        class="flex h-[89px] w-[95px] flex-col items-center
                               justify-center rounded-[10px] bg-[#3b3b3b]
                               text-white"
                    >
                        <img
                            src="{{ asset('img/design-pattern.png') }}"
                            alt=""
                            class="mb-[7px] h-[36px] w-[36px]"
                        >
                        <span
                            class="px-[6px] text-center
                                   font-['Work_Sans-Regular'] text-[11px]"
                        >
                            Design Pattern
                        </span>
                    </a>
                </li>

            </ul>
        </nav>
    </aside>

    {{-- CONTENUTO --}}
    <main class="relative min-h-screen flex-1 bg-white">
        

        {{-- HEADER --}}
        <header class="relative z-10 flex items-center gap-[14px] px-[20px] pt-[25px]">
            <a
                href="{{ route('home') }}"
                class="flex h-[28px] w-[28px] shrink-0 items-center
                       justify-center rounded-[4px] text-black"
                aria-label="Torna alla homepage"
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

            <div class="relative h-[48px] w-[54px] shrink-0">
    <img
        src="{{ asset('img/carta-viola.png') }}"
        alt=""
        class="absolute left-1/2 top-1/2 h-[48px] w-[54px]
               max-w-none -translate-x-1/2 -translate-y-1/2
               scale-[2] object-contain"
    >
</div>

            <div class="flex flex-col">
                <h1 class="m-0 text-[26px] font-normal leading-[1.1]">
                    <span class="text-[#6b1bb4]">Design Pattern </span>
                    <span class="text-[#3f8fd8]">Library</span>
                </h1>

                <div
                    class="mt-[5px] h-[3px] w-[260px]
                           bg-gradient-to-r from-[#f53696]
                           via-[#8c2ae8] to-[#54d2f4]
                           shadow-[0_1px_4px_0_rgba(84,210,244,0.85)]"
                ></div>
            </div>
        </header>

        <div class="relative z-10 flex gap-[12px] px-[14px] pb-[60px] pt-[20px]">

            {{-- FILTRI --}}
            <aside
                class="w-[161px] shrink-0"
                aria-label="Pattern filters and guidelines"
            >
                <div
                    class="flex h-[42px] items-center border-l-2
                           border-black bg-[#efefef]"
                >
                    <button
                        type="button"
                        class="ml-[9px] h-[27px] min-w-[29px]
                               rounded-[4px] bg-[#5f5f5f] px-[8px]
                               text-[10px] leading-[27px] text-white"
                        aria-pressed="true"
                    >
                        All
                    </button>

                    <div class="ml-[10px]">
                        <p class="m-0 text-[11px] leading-[14px] text-[#2b2b2b]">
                            All Design Pattern
                        </p>
                        <p class="m-0 mt-[3px] text-[9px] text-[#9f9f9f]">
                            15 Design Pattern
                        </p>
                    </div>
                </div>

                <div class="mt-[85px] min-h-[424px] border-r border-[#d0d0d0]">
                    <ul class="m-0 flex list-none flex-col gap-[12px] px-[34px] pt-[17px]">
                        @foreach ($guidelines as $guideline)
                            <li class="flex items-start gap-[9px]">
                                <button
                                    type="button"
                                    class="h-[30px] w-[30px] shrink-0
                                           rounded-[5px] border border-black
                                           bg-transparent text-[11px]"
                                >
                                    {{ $guideline['code'] }}
                                </button>

                                <div class="whitespace-nowrap pt-[2px]">
                                    <p class="m-0 text-[11px] leading-[14px] text-black">
                                        {{ $guideline['name'] }}
                                    </p>
                                    <p class="m-0 mt-[4px] text-[9px] text-[#9f9f9f]">
                                        {{ $guideline['count'] }}
                                    </p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </aside>

            {{-- AREA PRINCIPALE --}}
            <section
                class="w-full max-w-[911px]"
                aria-labelledby="description-heading"
            >
                <div
                    class="relative flex h-[167px] w-[711px]
                           items-center rounded-[14px]
                           bg-[linear-gradient(180deg,#5a51a5_0%,#755b8c_58%,#7b5d87_100%)]"
                >
                    <div
                        class="absolute inset-0 rounded-[14px]
                               bg-[radial-gradient(circle_at_65%_80%,rgba(211,88,130,0.35),transparent_26%)]"
                        aria-hidden="true"
                    ></div>

                    <h2
                        id="description-heading"
                        class="relative m-0 ml-[42px] w-[470px]
                               text-center text-[25px] font-normal
                               leading-[1.15] text-white"
                    >
                        Patterns for Interaction Design in Symbiotic Artificial Intelligence
                    </h2>

                    <p
                        class="absolute right-[35px] top-[38px] m-0
                               text-right text-[29px] leading-[1.15] text-white"
                    >
                        15 dp<br>TOTAL
                    </p>
                </div>

                <section class="mt-[32px]" aria-labelledby="available-patterns-heading">
                    <h2
                        id="available-patterns-heading"
                        class="m-0 text-[25px] font-semibold
                               leading-[1.15] text-[#232323]"
                    >
                        AVAILABLE PATTERNS
                    </h2>

                    <div class="mt-[18px] flex items-stretch gap-[23px]">
                        @foreach ($patterns as $pattern)
                            <article
                                class="flex min-h-[390px] w-[347px]
                                       flex-col rounded-[8px] bg-[#f6f6f6]
                                       px-[21px] pb-[14px] pt-[14px]"
                            >
                                <div class="relative pr-[65px]">
                                    <div
                                        class="absolute right-0 top-[2px]
                                               rounded-[4px] bg-[#eadff3]
                                               px-[11px] py-[4px]
                                               text-[11px] leading-none text-[#7e26ff]"
                                    >
                                        {{ $pattern['number'] }}
                                    </div>

                                    <h3
                                        class="m-0 text-[18px] font-semibold
                                               leading-[1.2] text-[#1f1f1f]"
                                    >
                                        {{ $pattern['title'] }}
                                    </h3>
                                </div>

                                <div class="mt-[14px]">
                                    <h4
                                        class="m-0 text-[12px] font-semibold
                                               uppercase text-[#8c8c8c]"
                                    >
                                        Problem
                                    </h4>

                                    <p
                                        class="mb-0 mt-[5px] text-[13px]
                                               leading-[1.35] text-[#505050]"
                                    >
                                        {{ $pattern['problem'] }}
                                    </p>
                                </div>

                                <div class="mt-[18px]">
                                    <h4
                                        class="m-0 text-[12px] font-semibold
                                               uppercase text-[#8c8c8c]"
                                    >
                                        Design Suggestion
                                    </h4>

                                    <p
                                        class="mb-0 mt-[5px] text-[13px]
                                               leading-[1.35] text-[#505050]"
                                    >
                                        {{ $pattern['suggestion'] }}
                                    </p>
                                </div>

                                <div class="mt-auto pt-[20px]">
                                    <p
                                        class="m-0 text-[12px] leading-[1.2]
                                               text-[#8c8c8c]"
                                    >
                                        LINKED GUIDELINES
                                    </p>

                                    <button
                                        type="button"
                                        class="mt-[8px] rounded-[5px] border
                                               border-[#c8afe8] bg-[#eadff3]
                                               px-[5px] py-[2px]
                                               text-[11px] text-[#2e2e2e]"
                                    >
                                        {{ $pattern['guideline'] }}
                                    </button>

                                    <div class="mt-[18px] flex items-center justify-between">
                                        <p class="m-0 text-[12px] text-[#b2b2b2]">
                                            1 example
                                        </p>

                                        <a
                                            href="{{ route('design-pattern.show', ['pattern' => $pattern['route']]) }}"
                                            class="rounded-sm text-[14px]
                                                   font-semibold text-[#2a21ff]
                                                   focus-visible:outline
                                                   focus-visible:outline-2
                                                   focus-visible:outline-offset-2
                                                   focus-visible:outline-[#4a90e2]"
                                        >
                                            Explore
                                            <span
                                                aria-hidden="true"
                                                class="ml-[3px] align-[-4px]
                                                       text-[26px] leading-none"
                                            >
                                                &rsaquo;
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </section>
            </section>
        </div>
    </main>
</div>
</body>
</html>