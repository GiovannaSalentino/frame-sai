<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FrameSAI - Supervise the AI System</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="m-0 bg-white text-black">
<div class="flex min-h-screen min-w-[1180px] bg-white">

    {{-- SIDEBAR --}}
    <aside
        class="relative z-30 flex min-h-screen w-[119px] shrink-0 flex-col items-center bg-[#252525]"
        aria-label="Primary navigation"
    >
        <div class="flex w-full flex-col items-center pt-[18px]">
            <a
                href="/"
                class="flex flex-col items-center justify-center gap-[6px] rounded-[4px]
                       focus-visible:outline focus-visible:outline-2
                       focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2]"
                aria-label="FrameSAI home"
            >
                <img
                    src="{{ asset('img/group.png') }}"
                    alt=""
                    class="block h-[67px] w-[61px]"
                >

                <span
                    class="bg-gradient-to-r from-[#ff2f92] via-[#635bff] to-[#00c2ff]
                           bg-clip-text font-['Work_Sans'] text-[26px]
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
                        href="/"
                        class="flex h-[89px] w-[95px] flex-col items-center
                               justify-center rounded-[8px] text-white"
                    >
                        <img
                            src="{{ asset('img/homepage.png') }}"
                            alt=""
                            class="mb-[7px] block h-[36px] w-[36px]"
                        >
                        <span class="font-['Work_Sans'] text-[11px]">
                            Homepage
                        </span>
                    </a>
                </li>

                <li class="flex w-full justify-center">
                    <a
                        href="{{ route('library-principles') }}"
                        class="flex h-[89px] w-[95px] flex-col items-center
                               justify-center rounded-[8px] text-white"
                    >
                        <img
                            src="{{ asset('img/principles.png') }}"
                            alt=""
                            class="mb-[7px] block h-[36px] w-[36px]"
                        >
                        <span class="font-['Work_Sans'] text-[11px]">
                            Principles
                        </span>
                    </a>
                </li>

                <li class="flex w-full justify-center">
                    <a
                        href="/guidelines"
                        class="flex h-[89px] w-[95px] flex-col items-center
                               justify-center rounded-[8px] text-white"
                    >
                        <img
                            src="{{ asset('img/guidelines.png') }}"
                            alt=""
                            class="mb-[7px] block h-[36px] w-[36px]"
                        >
                        <span class="font-['Work_Sans'] text-[11px]">
                            Guidelines
                        </span>
                    </a>
                </li>

                <li class="flex w-full justify-center">
                    <a
                        href="{{ route('success-criteria') }}"
                        class="flex h-[89px] w-[95px] flex-col items-center
                               justify-center rounded-[8px] text-white"
                    >
                        <img
                            src="{{ asset('img/success-criteria.png') }}"
                            alt=""
                            class="mb-[7px] block h-[36px] w-[36px]"
                        >
                        <span class="px-[6px] text-center font-['Work_Sans'] text-[11px]">
                            Success Criteria
                        </span>
                    </a>
                </li>

                <li class="flex w-full justify-center">
                    <a
                        href="{{ route('design-pattern') }}"
                        aria-current="page"
                        class="flex h-[89px] w-[95px] flex-col items-center
                               justify-center rounded-[8px] bg-[#3b3b3b] text-white"
                    >
                        <img
                            src="{{ asset('img/design-pattern.png') }}"
                            alt=""
                            class="mb-[7px] block h-[36px] w-[36px]"
                        >
                        <span class="px-[6px] text-center font-['Work_Sans'] text-[11px]">
                            Design Pattern
                        </span>
                    </a>
                </li>

            </ul>
        </nav>
    </aside>

    {{-- CONTENUTO --}}
    <main class="relative z-10 min-h-screen flex-1 overflow-y-auto bg-white">
        <div class="mx-auto w-full max-w-[1158px] px-[53px] pb-[70px] pt-[26px]">

            {{-- HEADER --}}
            <header class="flex items-center gap-[14px]">
                <a
                    href="{{ route('design-pattern') }}"
                    aria-label="Back to Design Pattern Library"
                    class="flex h-[40px] w-[40px] items-center justify-center
                           rounded-[4px] text-[38px] leading-none text-black"
                >
                    &larr;
                </a>

                <div
                    class="flex h-[43px] w-[49px] items-center justify-center
                           text-[38px] text-[#b48ac4]"
                    aria-hidden="true"
                >
                    &#9993;
                </div>

                <span
                    class="flex h-[36px] items-center rounded-[7px]
                           bg-[#8e8e8e] px-[14px] font-['Work_Sans']
                           text-[20px] text-white"
                >
                    D.P. 1
                </span>

                <div class="ml-[2px] flex flex-col">
                    <h1
                        class="whitespace-nowrap bg-gradient-to-r from-[#d6008f]
                               via-[#5346d8] to-[#2e9fe6] bg-clip-text
                               font-['Roboto_Slab'] text-[43px] font-bold
                               leading-[48px] text-transparent"
                    >
                        Supervise the AI System
                    </h1>

                    <div
                        class="mt-[5px] h-[3px] w-[368px]
                               bg-gradient-to-r from-[#d6008f]
                               via-[#7f63dd] to-[#78d9ef]"
                    ></div>
                </div>
            </header>

            {{-- COLLEGAMENTI --}}
            <section class="mt-[30px] max-w-[906px]">
                <h2 class="mb-[18px] font-['Roboto_Slab'] text-[29px] font-normal">
                    Collegamenti
                </h2>

                {{-- PROBLEM --}}
                <article
                    class="relative mb-[14px] min-h-[52px]
                           overflow-hidden rounded-[8px] bg-[#f3f3f3]"
                >
                    <div class="absolute inset-y-0 left-0 w-[4px] bg-[#ff0f7b]"></div>

                    <div class="flex min-h-[52px] items-center px-[14px]">
                        <span
                            class="mr-[8px] h-[18px] w-[18px]
                                   shrink-0 rounded-full bg-[#ff0f7b]"
                        ></span>

                        <h3 class="font-['Roboto_Slab'] text-[27px] font-normal">
                            Problem
                        </h3>
                    </div>

                    <div class="min-h-[65px] px-[20px] pb-[18px]">
                        {{-- Inserisci qui il testo del problema --}}
                    </div>
                </article>

                {{-- DESIGN SUGGESTION --}}
                <article
                    class="relative mb-[16px] min-h-[123px]
                           overflow-hidden rounded-[8px] bg-[#f3f3f3]"
                >
                    <div class="absolute inset-y-0 left-0 w-[4px] bg-[#a000ff]"></div>

                    <div class="flex min-h-[55px] items-center px-[14px]">
                        <span
                            class="mr-[9px] text-[32px] leading-none text-[#a000ff]"
                            aria-hidden="true"
                        >
                            &#9881;
                        </span>

                        <h3 class="font-['Roboto_Slab'] text-[27px] font-normal">
                            Design Suggestion
                        </h3>
                    </div>

                    <div class="min-h-[68px] px-[20px] pb-[18px]">
                        {{-- Inserisci qui il testo del design suggestion --}}
                    </div>
                </article>

                {{-- SOLUTION --}}
                <article
                    class="min-h-[211px] rounded-[8px]
                           border border-[#61b0ff] bg-white"
                >
                    <div class="flex min-h-[58px] items-center px-[14px]">
                        <span
                            class="mr-[9px] text-[35px] leading-none"
                            aria-hidden="true"
                        >
                            &#128161;
                        </span>

                        <h3 class="font-['Roboto_Slab'] text-[25px] font-bold">
                            Solution
                        </h3>
                    </div>

                    <div class="min-h-[145px] px-[20px] pb-[20px]">
                        {{-- Inserisci qui il testo della soluzione --}}
                    </div>
                </article>

                {{-- CONTEXT AND MOTIVATIONS --}}
                <details class="group mt-[15px]">
                    <summary
                        class="flex cursor-pointer list-none items-center
                               justify-between rounded-[6px] px-[11px]
                               py-[8px] font-['Work_Sans'] text-[19px] font-bold"
                    >
                        <span>Context and Motivations</span>

                        <svg
                            class="h-[22px] w-[22px] text-[#686868]
                                   transition-transform duration-200
                                   group-open:rotate-180"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            aria-hidden="true"
                        >
                            <path d="m6 9 6 6 6-6"></path>
                        </svg>
                    </summary>

                    <div
                        class="mx-[11px] mt-[8px] min-h-[100px]
                               rounded-[6px] border border-[#d5d5d5]
                               bg-[#f8f8f8] p-[16px]"
                    >
                        {{-- Inserisci qui Context and Motivations --}}
                    </div>
                </details>

                {{-- EXAMPLES --}}
                <article
                    class="relative mt-[55px] min-h-[120px]
                           overflow-hidden rounded-[8px] bg-[#f3f3f3]"
                >
                    <div class="absolute inset-y-0 left-0 w-[4px] bg-[#1f95f3]"></div>

                    <div class="flex min-h-[45px] items-center px-[12px]">
                        <span
                            class="mr-[7px] h-[14px] w-[14px]
                                   shrink-0 rounded-full bg-[#1f95f3]"
                        ></span>

                        <h3 class="font-['Roboto_Slab'] text-[20px] font-normal">
                            Examples
                        </h3>
                    </div>

                    <div class="min-h-[70px] px-[20px] pb-[18px]">
                        {{-- Inserisci qui gli esempi --}}
                    </div>
                </article>
            </section>

        </div>
    </main>
</div>
</body>
</html>