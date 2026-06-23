<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Design Pattern Library</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="m-0">
<div class="flex min-h-[832px] min-w-[1280px] w-full overflow-hidden border border-black bg-white">

    {{-- SIDEBAR --}}
    <aside
        class="relative z-30 flex min-h-[832px] w-[119px] shrink-0 flex-col items-center bg-[#252525]"
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
                           bg-clip-text font-['Work_Sans-Regular'] text-[26px]
                           leading-none text-transparent"
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
                            class="mb-[7px] block h-[36px] w-[36px]"
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
                            class="mb-[7px] block h-[36px] w-[36px]"
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
                            class="mb-[7px] block h-[36px] w-[36px]"
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
                            class="mb-[7px] block h-[36px] w-[36px]"
                        >
                        <span class="px-[6px] text-center font-['Work_Sans-Regular'] text-[11px]">
                            Success Criteria
                        </span>
                    </a>
                </li>

                <li class="flex w-full justify-center">
                    <a
                        href="{{ route('design-pattern') }}"
                        aria-current="page"
                        class="flex h-[89px] w-[95px] flex-col items-center
                               justify-center rounded-[10px] bg-[#3b3b3b] text-white"
                    >
                        <img
                            src="{{ asset('img/design-pattern.png') }}"
                            alt=""
                            class="mb-[7px] block h-[36px] w-[36px]"
                        >
                        <span class="px-[6px] text-center font-['Work_Sans-Regular'] text-[11px]">
                            Design Pattern
                        </span>
                    </a>
                </li>

            </ul>
        </nav>
    </aside>

    {{-- CONTENUTO --}}
    <main class="relative min-h-[832px] flex-1 overflow-hidden bg-white">

        <img
            src="{{ asset('img/frame-1.svg') }}"
            alt=""
            class="pointer-events-none absolute left-0 top-0 h-[832px] w-[1280px]"
            aria-hidden="true"
        >

        {{-- HEADER --}}
        <header class="absolute left-[14px] right-[31px] top-[25px]">

            <a
                href="{{ route('home') }}"
                class="absolute left-0 top-[38px] flex h-[28px] w-[28px]
                       items-center justify-center rounded-[4px] text-black"
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

            <div class="absolute left-[41px] top-0 flex items-center gap-[11px]">
                <div class="h-[48px] w-[54px]" aria-hidden="true"></div>

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
            </div>
        </header>

        <section class="absolute left-[14px] top-[93px] h-[739px] w-[1084px]">

            {{-- FILTRI --}}
            <aside
                class="absolute left-0 top-0 h-[552px] w-[161px]"
                aria-label="Pattern filters and guidelines"
            >
                <div
                    class="absolute left-0 top-[9px] flex h-[34px] w-[161px]
                           items-center border-l-2 border-black bg-[#efefef]"
                >
                    <button
                        type="button"
                        class="ml-[9px] h-[27px] min-w-[29px] rounded-[4px]
                               bg-[#5f5f5f] px-[8px] text-[10px]
                               leading-[27px] text-white"
                        aria-pressed="true"
                    >
                        All
                    </button>

                    <div class="ml-[10px]">
                        <p class="m-0 text-[11px] leading-[14px] text-[#2b2b2b]">
                            All Design Pattern
                        </p>
                        <p class="m-0 mt-[4px] text-[9px] leading-[11px] text-[#9f9f9f]">
                            15 Design Pattern
                        </p>
                    </div>
                </div>

                <div
                    class="absolute left-0 top-[128px] h-[424px]
                           w-[161px] border-r border-[#d0d0d0]"
                >
                    @php
                        $guidelines = [
                            ['code' => 'G1', 'name' => 'Guideline 1', 'count' => '3 Design Pattern'],
                            ['code' => 'G2', 'name' => 'Guideline 2', 'count' => '2 Design Pattern'],
                            ['code' => 'G3', 'name' => 'Guideline 3', 'count' => '3 Design Pattern'],
                            ['code' => 'G4', 'name' => 'Guideline 4', 'count' => '2 Design Pattern'],
                            ['code' => 'G5', 'name' => 'Guideline 5', 'count' => '5 Design Pattern'],
                        ];
                    @endphp

                    <ul class="m-0 flex list-none flex-col gap-[12px] px-[34px] pt-[17px]">
                        @foreach ($guidelines as $guideline)
                            <li class="flex items-start gap-[9px]">
                                <button
                                    type="button"
                                    class="h-[30px] w-[30px] shrink-0 rounded-[5px]
                                           border border-black bg-transparent text-center
                                           text-[11px] leading-[30px] text-black"
                                >
                                    {{ $guideline['code'] }}
                                </button>

                                <div class="whitespace-nowrap pt-[2px]">
                                    <p class="m-0 text-[11px] leading-[14px] text-black">
                                        {{ $guideline['name'] }}
                                    </p>
                                    <p class="m-0 mt-[4px] text-[9px] leading-[11px] text-[#9f9f9f]">
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
                class="absolute left-[173px] top-0 w-[911px]"
                aria-labelledby="description-heading"
            >
                <div
                    class="relative h-[167px] w-[711px] rounded-[14px]
                           bg-[linear-gradient(180deg,#5a51a5_0%,#755b8c_58%,#7b5d87_100%)]"
                >
                    <div
                        class="absolute inset-0 rounded-[14px]
                               bg-[radial-gradient(circle_at_65%_80%,rgba(211,88,130,0.35),transparent_26%)]"
                        aria-hidden="true"
                    ></div>

                    <h2
                        id="description-heading"
                        class="absolute left-[53px] top-[43px] m-0 w-[447px]
                               text-center text-[33px] font-normal
                               leading-[1.02] text-white"
                    >
                        Design Pattern Description and the utility
                    </h2>

                    <p
                        class="absolute right-[42px] top-[34px] m-0
                               text-right text-[31px] leading-[1.18] text-white"
                    >
                        15 dp<br>TOTAL
                    </p>
                </div>

                <section class="mt-[37px]" aria-labelledby="available-patterns-heading">
                    <h2
                        id="available-patterns-heading"
                        class="m-0 text-[27px] font-semibold
                               leading-[1.15] text-[#232323]"
                    >
                        AVAILABLE PATTERNS
                    </h2>

                    <div class="mt-[18px] flex gap-[23px]">

                        {{-- DP1 --}}
                        <article
                            class="relative min-h-[296px] w-[347px]
                                   rounded-[13px] bg-[#f6f6f6]
                                   px-[21px] pb-[13px] pt-[14px]"
                        >
                            <div
                                class="absolute right-[13px] top-[16px]
                                       rounded-[4px] bg-[#eadff3]
                                       px-[11px] py-[4px]
                                       text-[11px] leading-none text-[#7e26ff]"
                            >
                                DP1
                            </div>

                            <h3
                                class="m-0 pr-[72px] text-[18px]
                                       font-semibold leading-[1.2] text-[#1f1f1f]"
                            >
                                Supervise the AI System
                            </h3>

                            <p class="m-0 mt-[8px] text-[12px] leading-[1.2] text-[#676767]">
                                Problem: Allow users supervise
                            </p>

                            <p class="m-0 mt-[30px] text-center text-[18px] leading-[1.03] text-[#1f1f1f]">
                                Design Suggestion Design<br>
                                Suggestion Design<br>
                                Suggestion Design<br>
                                Suggestion
                            </p>

                            <div class="mt-[42px]">
                                <p class="m-0 text-[14px] leading-[1.2] text-[#8c8c8c]">
                                    LINKED GUIDELINES
                                </p>

                                <button
                                    type="button"
                                    class="mt-[10px] rounded-[5px] border
                                           border-[#c8afe8] bg-[#eadff3]
                                           px-[5px] py-[1px] text-[11px]
                                           leading-none text-[#2e2e2e]"
                                >
                                    Guideline 5
                                </button>
                            </div>

                            <div class="mt-[22px] flex items-center justify-between">
                                <p class="m-0 text-[12px] leading-[1.2] text-[#b2b2b2]">
                                    1 example
                                </p>

                                <a
                                    href="{{ route('design-pattern.show', ['pattern' => '1']) }}"
                                    class="rounded-sm text-[14px] font-semibold
                                           leading-[1.2] text-[#2a21ff]
                                           focus-visible:outline focus-visible:outline-2
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
                        </article>

                        {{-- DP2 --}}
                        <article
                            class="relative min-h-[296px] w-[347px]
                                   rounded-[13px] bg-[#f6f6f6]
                                   px-[21px] pb-[13px] pt-[14px]"
                        >
                            <div
                                class="absolute right-[13px] top-[16px]
                                       rounded-[4px] bg-[#eadff3]
                                       px-[11px] py-[4px]
                                       text-[11px] leading-none text-[#7e26ff]"
                            >
                                DP2
                            </div>

                            <h3
                                class="m-0 pr-[72px] text-[18px]
                                       font-semibold leading-[1.2] text-[#1f1f1f]"
                            >
                                Understand Model's Architecture
                            </h3>

                            <p class="m-0 mt-[8px] text-[12px] leading-[1.2] text-[#676767]">
                                Problem: How can users
                            </p>

                            <p class="m-0 mt-[36px] text-center text-[18px] leading-[1.03] text-[#1f1f1f]">
                                Design Suggestion Design<br>
                                Suggestion Design Suggestion<br>
                                Design Suggestion Design<br>
                                Suggestion
                            </p>

                            <div class="mt-[39px]">
                                <p class="m-0 text-[14px] leading-[1.2] text-[#8c8c8c]">
                                    LINKED GUIDELINES
                                </p>

                                <button
                                    type="button"
                                    class="mt-[10px] rounded-[5px] border
                                           border-[#c8afe8] bg-[#eadff3]
                                           px-[5px] py-[1px] text-[11px]
                                           leading-none text-[#2e2e2e]"
                                >
                                    Guideline 2
                                </button>
                            </div>

                            <div class="mt-[22px] flex items-center justify-between">
                                <p class="m-0 text-[12px] leading-[1.2] text-[#b2b2b2]">
                                    1 example
                                </p>

                                <a
                                    href="{{ route('design-pattern.show', ['pattern' => '2']) }}"
                                    class="rounded-sm text-[14px] font-semibold
                                           leading-[1.2] text-[#2a21ff]
                                           focus-visible:outline focus-visible:outline-2
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
                        </article>
                    </div>
                </section>
            </section>

            {{-- SCROLL DECORATIVO --}}
            <div
                class="pointer-events-none absolute right-[7px] top-0
                       h-[501px] w-[19px] rounded-[10px] bg-[#7f7f7f]"
                aria-hidden="true"
            >
                <div
                    class="absolute left-1/2 top-[-24px] h-0 w-0
                           -translate-x-1/2 border-b-[17px]
                           border-l-[10px] border-r-[10px]
                           border-b-[#5f5f5f]
                           border-l-transparent border-r-transparent"
                ></div>

                <div
                    class="absolute bottom-[-24px] left-1/2 h-0 w-0
                           -translate-x-1/2 border-l-[10px]
                           border-r-[10px] border-t-[17px]
                           border-l-transparent border-r-transparent
                           border-t-[#5f5f5f]"
                ></div>
            </div>
        </section>
    </main>
</div>
</body>
</html>