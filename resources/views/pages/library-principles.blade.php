<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Library of Principles</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="m-0 bg-white">
@php
    $principles = [
        [
            'number' => 'P 1',
            'name' => 'Transparency',
            'slug' => 'transparency',
            'description' => 'Transparency serves as an umbrella term.',
            'gradient' => 'from-[#ff5b67] to-[#f91d5e]',
        ],
        [
            'number' => 'P 2',
            'name' => 'Fairness',
            'slug' => 'fairness',
            'description' => 'Fairness as an approach.',
            'gradient' => 'from-[#f36cb5] to-[#d666a0]',
        ],
        [
            'number' => 'P 3',
            'name' => 'Automation Level',
            'slug' => 'automation-level',
            'description' => 'Automation Level is characterized by two dimensions: Human-on-the-loop and Human-in-the-loop.',
            'gradient' => 'from-[#bf79ea] to-[#8d5ac2]',
        ],
        [
            'number' => 'P 4',
            'name' => 'Protection',
            'slug' => 'protection',
            'description' => 'Protection lays its ground in cybersecurity.',
            'gradient' => 'from-[#83d6ec] to-[#6098d7]',
        ],
    ];
@endphp



<div class="flex min-h-screen w-full items-stretch bg-white">

    {{-- SIDEBAR --}}
    <aside
        class="relative z-30 flex w-[119px] shrink-0 self-stretch
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
                        aria-current="page"
                        class="flex h-[89px] w-[95px] flex-col items-center
                               justify-center rounded-[10px] bg-[#3b3b3b]
                               text-white"
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
    <main
        class="relative min-h-screen flex-1 bg-white"
        aria-label="Library of Principles content"
    >
       

        <div class="relative z-10 px-[42px] pb-[60px] pt-[30px]">

            {{-- HEADER --}}
            <header class="flex items-center gap-[14px]">

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

                {{-- Spazio per la futura icona PNG --}}
                <div class="relative h-[42px] w-[46px] shrink-0">
    <img
        src="{{ asset('img/brick-viola.png') }}"
        alt=""
        class="absolute left-1/2 top-1/2 h-[42px] w-[46px]
               max-w-none -translate-x-1/2 -translate-y-1/2
               scale-[2] object-contain"
    >
</div>

                <div class="flex flex-col">
                    <h1
                        class="m-0 bg-gradient-to-r from-[#8c2ae8]
                               via-[#f53696] to-[#1676c8] bg-clip-text
                               font-['Work_Sans-ExtraBold','Arial',sans-serif]
                               text-[25px] leading-none text-transparent"
                    >
                        Library of Principles
                    </h1>

                    <div
                        class="mt-[4px] h-[3px] w-[235px]
                               bg-gradient-to-r from-[#f53696]
                               via-[#8c2ae8] to-[#54d2f4]
                               shadow-[0_1px_4px_0_rgba(84,210,244,0.85)]"
                    ></div>
                </div>
            </header>

            {{-- DESCRIZIONE --}}
            <section
                class="ml-[74px] mt-[28px] max-w-[950px]"
                aria-labelledby="principles-description"
            >
                <h2 id="principles-description" class="sr-only">
                    Description
                </h2>

                <p
                    class="m-0 font-['Work_Sans-Regular','Arial',sans-serif]
                           text-[17px] leading-[1.35] text-black"
                >
                    The principles are the core of the framework, representing the
                    guiding pillars that characterize the symbiosis between the human
                    and AI. They are: Automation Level, Transparency, Fairness, and
                    Protection. The principles dictate the main requirements for SAI
                    systems, which must guarantee an appropriate level of automation
                    to humans, be properly transparent and explain the motivations
                    behind their outputs while exhibiting a fair and non-discriminatory
                    behavior, protecting humans’ privacy, safety, and security.
                </p>
            </section>

            {{-- CARDS --}}
            <section
                class="ml-[98px] mt-[75px] flex items-stretch gap-[48px]"
                aria-label="Principles cards"
            >
                @foreach ($principles as $principle)
                    <a
                        href="{{ route('principles.show', ['principle' => $principle['slug']]) }}"
                        class="flex w-[156px] flex-col overflow-hidden
                               rounded-[6px] bg-[#f2f2f2] shadow-none
                               transition hover:-translate-y-[2px]
                               hover:shadow-md focus-visible:outline
                               focus-visible:outline-2
                               focus-visible:outline-offset-2
                               focus-visible:outline-[#4a90e2]"
                        aria-label="Explore {{ $principle['name'] }}"
                    >
                        <div
                            class="relative h-[106px] shrink-0
                                   bg-gradient-to-b {{ $principle['gradient'] }}"
                        >
                            <span
                                class="absolute right-[11px] top-[12px]
                                       font-['Work_Sans-ExtraBold','Arial',sans-serif]
                                       text-[26px] leading-none text-white/30"
                            >
                                {{ $principle['number'] }}
                            </span>
                        </div>

                        <div
                            class="flex min-h-[150px] flex-1 flex-col
                                   bg-[#f6f6f6] px-[18px] pb-[18px] pt-[15px]"
                        >
                            <h3
                                class="m-0
                                       font-['Work_Sans-ExtraBold','Arial',sans-serif]
                                       text-[15px] uppercase leading-[1.1]
                                       text-[#161616]"
                            >
                                {{ $principle['name'] }}
                            </h3>

                            <p
                                class="mb-0 mt-[16px]
                                       font-['Work_Sans-Regular','Arial',sans-serif]
                                       text-[11px] leading-[1.35] text-[#5e5e5e]"
                            >
                                {{ $principle['description'] }}
                            </p>
                        </div>

                        <footer
                            class="flex h-[27px] shrink-0 items-center
                                   justify-end bg-[#efefef] px-[8px]"
                        >
                            <span
                                class="font-['Work_Sans-Regular','Arial',sans-serif]
                                       text-[11px] uppercase leading-none
                                       tracking-[0.01em] text-[#8d70bc]"
                            >
                                Explore &rarr;
                            </span>
                        </footer>
                    </a>
                @endforeach
            </section>
        </div>
    </main>
</div>
</body>
</html>