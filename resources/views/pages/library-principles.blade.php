<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Library of Principles</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="m-0">
<div class="relative min-h-[832px] min-w-[1280px] w-full overflow-hidden border border-black bg-white">

    <img
        src="{{ asset('img/frame-1.svg') }}"
        alt=""
        class="pointer-events-none absolute left-0 top-0 h-[832px] w-[1280px]"
        aria-hidden="true"
    >

    {{-- SIDEBAR --}}
    <aside
        class="relative z-30 flex min-h-[832px] w-[119px] shrink-0 flex-col items-center bg-[#252525]"
        aria-label="Primary navigation"
    >
        <div class="flex w-full flex-col items-center pt-[18px]">
            <a
                href="{{ route('home') }}"
                class="flex flex-col items-center justify-center gap-[6px] rounded-[4px]
                       focus-visible:outline focus-visible:outline-2
                       focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2]"
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
                        aria-current="page"
                        class="flex h-[89px] w-[95px] flex-col items-center
                               justify-center rounded-[10px] bg-[#3b3b3b] text-white"
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
                        class="flex h-[89px] w-[95px] flex-col items-center
                               justify-center rounded-[10px] text-white"
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
    <main
        class="absolute inset-0 z-10"
        aria-label="Library of Principles content"
    >
        <header class="absolute left-[110px] top-[40px] flex items-center gap-[14px]">

            {{-- FRECCIA BACK UNIVERSALE --}}
            <a
                href="{{ url()->previous() }}"
                onclick="event.preventDefault(); window.history.back();"
                class="flex h-[28px] w-[28px] items-center justify-center
                       rounded-[4px] text-black focus-visible:outline
                       focus-visible:outline-2 focus-visible:outline-offset-2
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

            <div class="flex items-center gap-[12px]">
                <div class="relative h-[42px] w-[46px]" aria-hidden="true">
                    <div class="absolute left-[3px] top-0 h-[20px] w-[36px] rotate-[-28deg] rounded-[2px] border border-[#c6a7ce]"></div>
                    <div class="absolute left-[11px] top-[16px] h-[24px] w-[22px] rounded-[1px] border border-[#c6a7ce]"></div>
                    <div class="absolute left-0 top-[6px] h-[24px] w-[22px] rotate-[28deg] rounded-[1px] border border-[#c6a7ce]"></div>
                    <div class="absolute left-[17px] top-[8px] h-[4px] w-[4px] rounded-full border border-[#c6a7ce]"></div>
                    <div class="absolute left-[23px] top-[6px] h-[4px] w-[4px] rounded-full border border-[#c6a7ce]"></div>
                    <div class="absolute left-[29px] top-[4px] h-[4px] w-[4px] rounded-full border border-[#c6a7ce]"></div>
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
            </div>
        </header>

        {{-- DESCRIZIONE --}}
        <section
            class="absolute left-[142px] top-[110px] w-[990px]"
            aria-labelledby="principles-description"
        >
            <h2 id="principles-description" class="sr-only">Description</h2>

            <p
                class="font-['Work_Sans-Regular','Arial',sans-serif]
                       text-[18px] leading-[1.15] text-black"
            >
                Description of the principles. Description of the principles.
                Description of the principles. Description of the principles.
                Description of the principles. Description of the principles.
                Description of the principles. Description of the principles.
            </p>

            <p
                class="mt-[18px] font-['Work_Sans-Regular','Arial',sans-serif]
                       text-[18px] leading-[1.15] text-black"
            >
                Description of the principles. Description of the principles.
                Description of the principles. Description of the principles.
                Description of the principles.
            </p>
        </section>

        @php
            $principles = [
                [
                    'number' => 'P 1',
                    'name' => 'Transparency',
                    'slug' => 'transparency',
                    'gradient' => 'from-[#ff5b67] to-[#f91d5e]',
                ],
                [
                    'number' => 'P 2',
                    'name' => 'Fairness',
                    'slug' => 'fairness',
                    'gradient' => 'from-[#f36cb5] to-[#d666a0]',
                ],
                [
                    'number' => 'P 3',
                    'name' => 'Automation Level',
                    'slug' => 'automation-level',
                    'gradient' => 'from-[#bf79ea] to-[#8d5ac2]',
                ],
                [
                    'number' => 'P 4',
                    'name' => 'Protection',
                    'slug' => 'protection',
                    'gradient' => 'from-[#83d6ec] to-[#6098d7]',
                ],
            ];
        @endphp

        {{-- CARDS --}}
        <section
            class="absolute left-[166px] top-[333px] flex items-start gap-[48px]"
            aria-label="Principles cards"
        >
            @foreach ($principles as $principle)
                <a
                    href="{{ route('principles.show', ['principle' => $principle['slug']]) }}"
                    class="block w-[156px] overflow-hidden rounded-[6px]
                           bg-[#f2f2f2] shadow-none transition
                           hover:-translate-y-[2px] hover:shadow-md
                           focus-visible:outline focus-visible:outline-2
                           focus-visible:outline-offset-2
                           focus-visible:outline-[#4a90e2]"
                    aria-label="Explore {{ $principle['name'] }}"
                >
                    <div
                        class="relative h-[106px] bg-gradient-to-b {{ $principle['gradient'] }}"
                    >
                        <span
                            class="absolute right-[11px] top-[12px]
                                   font-['Work_Sans-ExtraBold','Arial',sans-serif]
                                   text-[26px] leading-none text-white/30"
                        >
                            {{ $principle['number'] }}
                        </span>
                    </div>

                    <div class="min-h-[134px] bg-[#f6f6f6] px-[18px] pb-[47px] pt-[15px]">
                        <h3
                            class="m-0 font-['Work_Sans-ExtraBold','Arial',sans-serif]
                                   text-[16px] uppercase leading-[1.05] text-[#161616]"
                        >
                            {{ $principle['name'] }}
                        </h3>

                        <p
                            class="mt-[18px] font-['Work_Sans-Regular','Arial',sans-serif]
                                   text-[11px] leading-[1.25] text-[#5e5e5e]"
                        >
                            Breve descrizione principio.
                        </p>
                    </div>

                    <footer
                        class="flex h-[25px] items-center justify-end
                               bg-[#efefef] px-[8px]"
                    >
                        <span
                            class="font-['Work_Sans-Regular','Arial',sans-serif]
                                   text-[11px] uppercase leading-none
                                   tracking-[0.01em] text-[#d6c7ef]"
                        >
                            Explore &rarr;
                        </span>
                    </footer>
                </a>
            @endforeach
        </section>

        {{-- SCROLL DECORATIVO --}}
        <div
            class="pointer-events-none absolute right-[20px] top-[95px]
                   flex h-[525px] w-[22px] flex-col items-center justify-between"
            aria-hidden="true"
        >
            <div
                class="h-0 w-0 border-b-[17px] border-l-[10px]
                       border-r-[10px] border-b-[#666666]
                       border-l-transparent border-r-transparent"
            ></div>

            <div class="my-[8px] w-[16px] flex-1 rounded-[10px] bg-[#9d9d9d]"></div>

            <div
                class="h-0 w-0 border-l-[10px] border-r-[10px]
                       border-t-[17px] border-l-transparent
                       border-r-transparent border-t-[#666666]"
            ></div>
        </div>
    </main>
</div>
</body>
</html>