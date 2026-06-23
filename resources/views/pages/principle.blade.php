<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FrameSAI - {{ $title }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="m-0">
<div class="flex min-h-[832px] min-w-[1280px] w-full border border-black bg-white text-[#5d5d5d]">

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
                               justify-center rounded-[10px] text-white
                               focus-visible:outline focus-visible:outline-2
                               focus-visible:outline-offset-2
                               focus-visible:outline-[#4a90e2]"
                    >
                        <img
                            src="{{ asset('img/homepage.png') }}"
                            alt=""
                            class="mb-[7px] block h-[36px] w-[36px]"
                        >

                        <span class="font-['Work_Sans-Regular'] text-[11px] leading-[1.1]">
                            Homepage
                        </span>
                    </a>
                </li>

                <li class="flex w-full justify-center">
                    <a
                        href="{{ route('library-principles') }}"
                        aria-current="page"
                        class="flex h-[89px] w-[95px] flex-col items-center
                               justify-center rounded-[10px] bg-[#3b3b3b] text-white
                               focus-visible:outline focus-visible:outline-2
                               focus-visible:outline-offset-2
                               focus-visible:outline-[#4a90e2]"
                    >
                        <img
                            src="{{ asset('img/principles.png') }}"
                            alt=""
                            class="mb-[7px] block h-[36px] w-[36px]"
                        >

                        <span class="font-['Work_Sans-Regular'] text-[11px] leading-[1.1]">
                            Principles
                        </span>
                    </a>
                </li>

                <li class="flex w-full justify-center">
                    <a
                        href="{{ url('/guidelines') }}"
                        class="flex h-[89px] w-[95px] flex-col items-center
                               justify-center rounded-[10px] text-white
                               focus-visible:outline focus-visible:outline-2
                               focus-visible:outline-offset-2
                               focus-visible:outline-[#4a90e2]"
                    >
                        <img
                            src="{{ asset('img/guidelines.png') }}"
                            alt=""
                            class="mb-[7px] block h-[36px] w-[36px]"
                        >

                        <span class="font-['Work_Sans-Regular'] text-[11px] leading-[1.1]">
                            Guidelines
                        </span>
                    </a>
                </li>

                <li class="flex w-full justify-center">
                    <a
                        href="{{ route('success-criteria') }}"
                        class="flex h-[89px] w-[95px] flex-col items-center
                               justify-center rounded-[10px] text-white
                               focus-visible:outline focus-visible:outline-2
                               focus-visible:outline-offset-2
                               focus-visible:outline-[#4a90e2]"
                    >
                        <img
                            src="{{ asset('img/success-criteria.png') }}"
                            alt=""
                            class="mb-[7px] block h-[36px] w-[36px]"
                        >

                        <span
                            class="px-[6px] text-center font-['Work_Sans-Regular']
                                   text-[11px] leading-[1.1]"
                        >
                            Success Criteria
                        </span>
                    </a>
                </li>

                <li class="flex w-full justify-center">
                    <a
                        href="{{ route('design-pattern') }}"
                        class="flex h-[89px] w-[95px] flex-col items-center
                               justify-center rounded-[10px] text-white
                               focus-visible:outline focus-visible:outline-2
                               focus-visible:outline-offset-2
                               focus-visible:outline-[#4a90e2]"
                    >
                        <img
                            src="{{ asset('img/design-pattern.png') }}"
                            alt=""
                            class="mb-[7px] block h-[36px] w-[36px]"
                        >

                        <span
                            class="px-[6px] text-center font-['Work_Sans-Regular']
                                   text-[11px] leading-[1.1]"
                        >
                            Design Pattern
                        </span>
                    </a>
                </li>

            </ul>
        </nav>
    </aside>

    {{-- CONTENUTO PRINCIPIO --}}
    <main class="relative min-h-[832px] flex-1 bg-[#e9e9e9]">
        <section class="h-full pb-[30px] pl-[54px] pr-[77px] pt-[26px]">

            <header class="flex items-start gap-[20px]">

                {{-- FRECCIA BACK UNIVERSALE --}}
                <a
                    href="{{ url()->previous() }}"
                    onclick="event.preventDefault(); window.history.back();"
                    class="mt-[18px] flex h-[28px] w-[28px] items-center
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

                <div class="flex flex-col">
                    <div class="flex items-center gap-[10px]">
                        <img
                            src="{{ asset('img/title-icon.png') }}"
                            alt=""
                            class="block h-[43px] w-[49px] object-contain"
                        >

                        <h1
                            class="bg-[linear-gradient(90deg,#cf3aa8_0%,#5f67ff_52%,#6bc1ff_100%)]
                                   bg-clip-text font-['Roboto_Slab-Regular']
                                   text-[29px] leading-[1.1] text-transparent"
                        >
                            {{ $title }}
                        </h1>
                    </div>

                    <div
                        class="ml-[47px] mt-[8px] h-[4px] w-[365px]
                               rounded-full
                               bg-[linear-gradient(90deg,#ff78b8_0%,#7b6dff_52%,#93d6ff_100%)]"
                    ></div>
                </div>
            </header>

            <div class="ml-[47px] mr-[10px] mt-[31px] flex gap-[26px]">
                <div class="max-w-[856px] flex-1">

                    <section aria-labelledby="principle-description">
                        <h2 id="principle-description" class="sr-only">
                            Principle description
                        </h2>

                        <p
                            class="font-['Work_Sans-Regular'] text-[18px]
                                   leading-[1.08] text-[#5f5f5f]"
                        >
                            Description of the principle. Description of the principle.
                            Description of the principle. Description of the principle.
                        </p>

                        <p
                            class="mt-[9px] font-['Work_Sans-Regular']
                                   text-[18px] leading-[1.08] text-[#5f5f5f]"
                        >
                            Description of the principle. Description of the principle.
                            Description of the principle. Description of the principle.
                            Description of the principle.
                        </p>

                        <p
                            class="mt-[28px] font-['Work_Sans-Regular']
                                   text-[18px] leading-[1.08] text-[#5f5f5f]"
                        >
                            Description of the principle. Description of the principle.
                            Description of the principle. Description of the principle.
                            Description of the principle. Description of the principle.
                        </p>
                    </section>

                    <section
                        class="mt-[49px] rounded-[9px] border border-[#88cfff]
                               bg-transparent px-[25px] pb-[26px] pt-[18px]"
                        aria-labelledby="application-example"
                    >
                        <div class="flex items-center gap-[14px]">
                            <img
                                src="{{ asset('img/application-icon.png') }}"
                                alt=""
                                class="block h-[26px] w-[26px] object-contain"
                            >

                            <h2
                                id="application-example"
                                class="font-['Roboto_Slab-Regular']
                                       text-[18px] leading-[1.1] text-[#575757]"
                            >
                                Application example
                            </h2>
                        </div>

                        <p
                            class="mt-[15px] font-['Work_Sans-Regular']
                                   text-[18px] leading-[1.08] text-[#5f5f5f]"
                        >
                            Description of the application example. Description of the
                            application example. Description of the application example.
                        </p>

                        <p
                            class="mt-[2px] font-['Work_Sans-Regular']
                                   text-[18px] leading-[1.08] text-[#5f5f5f]"
                        >
                            Description of the application example. Description of the
                            application example. Description of the application example.
                            Description of the application example.
                        </p>
                    </section>

                    <section class="mt-[35px]" aria-label="Related content">
                        <div class="grid grid-cols-3 gap-[19px]">
                            <article class="h-[116px] rounded-[8px] bg-[#d9d9d9]"></article>
                            <article class="h-[116px] rounded-[8px] bg-[#d9d9d9]"></article>
                            <article class="h-[116px] rounded-[8px] bg-[#d9d9d9]"></article>
                        </div>
                    </section>
                </div>

                {{-- SCROLL DECORATIVO --}}
                <div
                    class="flex w-[24px] flex-col items-center justify-between pt-[18px]"
                    aria-hidden="true"
                >
                    <img
                        src="{{ asset('img/scroll-top.png') }}"
                        alt=""
                        class="block h-[26px] w-[20px]"
                    >

                    <div class="h-[487px] w-[16px] rounded-full bg-[#b1b1b1]"></div>

                    <img
                        src="{{ asset('img/scroll-bottom.png') }}"
                        alt=""
                        class="block h-[26px] w-[20px]"
                    >
                </div>
            </div>
        </section>
    </main>
</div>
</body>
</html>