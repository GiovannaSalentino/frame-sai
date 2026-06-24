<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FrameSAI - {{ $pattern['title'] }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="m-0 bg-white text-black">

@php
    $patternsContent = [
        'D.P. 1' => [
            'problem' => 'Allow users to supervise the behavior of the system.',

            'suggestion' => 'Enable users to oversee its decision-making process by allowing them to check, monitor, and supervise its behavior and output. This can be ensured through the implementation of proper mechanisms that make the processes and architecture transparent to users.',

            'solution' => [
                'Implement one or more explainability techniques that present the motivations behind the response of the model.',
                'The explanation must be catered to the expertise and background of the target audience.',
                'Implement interpretability strategies that allow the user to understand the logical structure of the model, if needed.',
            ],

            'context' => 'Users must know the reasons behind the output and understand its meaning, even if they do not intend to reconfigure the model.',

            'examples' => 'The “Grad-CAM” visual explanations for images and SHAP for interpreting the model’s logic and feature importance.',

            'example_image' => null,
            'example_caption' => null,
        ],

        'D.P. 2' => [
            'problem' => 'Enable users to form their own judgment of the model’s response.',

            'suggestion' => 'Provide an overview of the structure of the model that powers the system, or textually describe how its functioning works.',

            'solution' => [
                'Add “Info” options to the user interface to let users learn more about the structure of the model.',
                'Provide a visual representation of the structure of the model, accompanied by a caption that describes it.',
                'Provide this information on demand, since users should not be overloaded with information that might not be relevant to everybody.',
            ],

            'context' => 'At any level of risk, humans must be made aware of the structure of the model that powers the system they are using, as well as how their data is treated when interacting with the system. The motivation behind this lies in preventing users from perceiving AI-based systems as “magic boxes” that possess the answers to anything.',

            'examples' => 'A “How Does It Work?” button can provide users with additional information. After clicking it, a pop-up explains how the model works and how an explainability output is produced.',

            'example_image' => 'img/dp2-how-does-it-work.png',
            'example_caption' => 'Figure 1: Pop-Up shown after clicking on “How Does It Work?”',
        ],
    ];

    $content = $patternsContent[$pattern['code']] ?? [
        'problem' => '',
        'suggestion' => '',
        'solution' => [],
        'context' => '',
        'examples' => '',
        'example_image' => null,
        'example_caption' => null,
    ];

    $exampleImageExists = $content['example_image']
        && file_exists(public_path($content['example_image']));
@endphp

<div class="flex min-h-screen min-w-[1180px] bg-white">

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
                    class="bg-gradient-to-r from-[#ff2f92] via-[#635bff]
                           to-[#00c2ff] bg-clip-text
                           font-['Work_Sans-Regular'] text-[26px]
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
                               justify-center rounded-[8px] text-white"
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
                               justify-center rounded-[8px] text-white"
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
                               justify-center rounded-[8px] text-white"
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
                               justify-center rounded-[8px] text-white"
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
                               justify-center rounded-[8px] bg-[#3b3b3b]
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
    <main class="min-h-screen flex-1 bg-white">
        <div class="mx-auto w-full max-w-[1060px] px-[38px] pb-[60px] pt-[24px]">

            {{-- HEADER --}}
            <header class="flex items-center gap-[12px]">

                <a
                    href="{{ route('design-pattern') }}"
                    class="flex h-[28px] w-[28px] shrink-0 items-center
                           justify-center rounded-[4px] text-black
                           focus-visible:outline focus-visible:outline-2
                           focus-visible:outline-offset-2
                           focus-visible:outline-[#4a90e2]"
                    aria-label="Torna alla Design Pattern Library"
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

               <div class="relative h-[38px] w-[42px] shrink-0">
    <img
        src="{{ asset('img/carta-viola.png') }}"
        alt=""
        class="absolute left-1/2 top-1/2 h-[38px] w-[42px]
               max-w-none -translate-x-1/2 -translate-y-1/2
               scale-[2] object-contain"
    >
</div>

                <span
                    class="flex h-[31px] shrink-0 items-center rounded-[6px]
                           bg-[#8e8e8e] px-[11px]
                           font-['Work_Sans-Regular'] text-[16px] text-white"
                >
                    {{ $pattern['code'] }}
                </span>

                <div class="min-w-0 flex-1">
                    <h1
                        class="m-0 bg-gradient-to-r from-[#d6008f]
                               via-[#5346d8] to-[#2e9fe6]
                               bg-clip-text font-['Roboto_Slab-Regular']
                               text-[30px] font-bold leading-[36px]
                               text-transparent"
                    >
                        {{ $pattern['title'] }}
                    </h1>

                    <div
                        class="mt-[4px] h-[3px] w-full max-w-[350px]
                               bg-gradient-to-r from-[#d6008f]
                               via-[#7f63dd] to-[#78d9ef]"
                    ></div>
                </div>
            </header>

            <section class="mt-[27px] max-w-[850px]">
                <h2
                    class="mb-[15px] font-['Roboto_Slab-Regular']
                           text-[23px] font-normal text-[#686868]"
                >
                    Collegamenti
                </h2>

                {{-- PROBLEM --}}
                <article
                    class="relative mb-[12px] overflow-hidden
                           rounded-[7px] bg-[#f3f3f3]"
                >
                    <div class="absolute inset-y-0 left-0 w-[4px] bg-[#ff0f7b]"></div>

                    <div class="flex items-start gap-[10px] px-[15px] py-[14px]">
                        <span
                            class="mt-[4px] h-[13px] w-[13px]
                                   shrink-0 rounded-full bg-[#ff0f7b]"
                            aria-hidden="true"
                        ></span>

                        <div>
                            <h3
                                class="m-0 font-['Roboto_Slab-Regular']
                                       text-[20px] font-normal text-[#252525]"
                            >
                                Problem
                            </h3>

                            <p
                                class="mb-0 mt-[8px]
                                       font-['Work_Sans-Regular']
                                       text-[15px] leading-[1.45] text-[#505050]"
                            >
                                {{ $content['problem'] }}
                            </p>
                        </div>
                    </div>
                </article>

                {{-- DESIGN SUGGESTION --}}
                <article
                    class="relative mb-[12px] overflow-hidden
                           rounded-[7px] bg-[#f3f3f3]"
                >
                    <div class="absolute inset-y-0 left-0 w-[4px] bg-[#a000ff]"></div>

                    <div class="flex items-start gap-[10px] px-[15px] py-[14px]">

                        {{-- Spazio per il futuro PNG Design Suggestion --}}
                        <div
                            class="h-[24px] w-[24px] shrink-0"
                            aria-hidden="true"
                        ></div>

                        <div>
                            <h3
                                class="m-0 font-['Roboto_Slab-Regular']
                                       text-[20px] font-normal text-[#252525]"
                            >
                                Design Suggestion
                            </h3>

                            <p
                                class="mb-0 mt-[8px]
                                       font-['Work_Sans-Regular']
                                       text-[15px] leading-[1.45] text-[#505050]"
                            >
                                {{ $content['suggestion'] }}
                            </p>
                        </div>
                    </div>
                </article>

                {{-- SOLUTION --}}
                <article
                    class="rounded-[7px] border border-[#61b0ff] bg-white"
                >
                    <div class="flex items-start gap-[10px] px-[15px] py-[14px]">

                        {{-- Spazio per il futuro PNG Solution --}}
                        <div
                            class="h-[24px] w-[24px] shrink-0"
                            aria-hidden="true"
                        ></div>

                        <div class="flex-1">
                            <h3
                                class="m-0 font-['Roboto_Slab-Regular']
                                       text-[20px] font-bold text-[#252525]"
                            >
                                Solution
                            </h3>

                            <ul
                                class="mb-0 mt-[10px] space-y-[7px]
                                       pl-[20px] font-['Work_Sans-Regular']
                                       text-[15px] leading-[1.45] text-[#505050]"
                            >
                                @foreach ($content['solution'] as $solution)
                                    <li>{{ $solution }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </article>

                {{-- CONTEXT AND MOTIVATIONS --}}
                <details
                    class="group mt-[12px] overflow-hidden
                           rounded-[7px] border border-[#dedede] bg-white"
                >
                    <summary
                        class="flex cursor-pointer list-none items-center
                               justify-between px-[15px] py-[12px]
                               font-['Work_Sans-Regular']
                               text-[16px] font-semibold text-[#333333]"
                    >
                        <span>Context and Motivations</span>

                        <svg
                            class="h-[20px] w-[20px] text-[#686868]
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
                        class="border-t border-[#dedede]
                               bg-[#f8f8f8] px-[15px] py-[14px]"
                    >
                        <p
                            class="m-0 font-['Work_Sans-Regular']
                                   text-[15px] leading-[1.45] text-[#505050]"
                        >
                            {{ $content['context'] }}
                        </p>
                    </div>
                </details>

                {{-- EXAMPLES --}}
                <article
                    class="relative mt-[18px] overflow-hidden
                           rounded-[7px] bg-[#f3f3f3]"
                >
                    <div class="absolute inset-y-0 left-0 w-[4px] bg-[#1f95f3]"></div>

                    <div class="px-[17px] py-[14px]">
                        <div class="flex items-center gap-[8px]">
                            <span
                                class="h-[12px] w-[12px]
                                       shrink-0 rounded-full bg-[#1f95f3]"
                                aria-hidden="true"
                            ></span>

                            <h3
                                class="m-0 font-['Roboto_Slab-Regular']
                                       text-[19px] font-normal text-[#252525]"
                            >
                                Examples
                            </h3>
                        </div>

                        <p
                            class="mb-0 mt-[10px]
                                   font-['Work_Sans-Regular']
                                   text-[15px] leading-[1.45] text-[#505050]"
                        >
                            {{ $content['examples'] }}
                        </p>

                        @if ($content['example_image'])
                            <figure class="m-0 mt-[18px]">

                                @if ($exampleImageExists)
                                    <img
                                        src="{{ asset($content['example_image']) }}"
                                        alt="Example for {{ $pattern['title'] }}"
                                        class="block h-auto max-h-[420px] w-full
                                               rounded-[6px] object-contain"
                                    >
                                @else
                                    <div
                                        class="h-[240px] w-full rounded-[6px]
                                               border border-[#d5d5d5] bg-white"
                                        aria-label="Spazio riservato all'immagine"
                                    ></div>
                                @endif

                                <figcaption
                                    class="mt-[8px] text-center
                                           font-['Work_Sans-Regular']
                                           text-[13px] leading-[1.35]
                                           text-[#686868]"
                                >
                                    {{ $content['example_caption'] }}
                                </figcaption>
                            </figure>
                        @endif
                    </div>
                </article>
            </section>
        </div>
    </main>
</div>
</body>
</html>