<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FrameSAI - {{ $title }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="m-0">
@php
    $descriptions = [
        'transparency' => 'Transparency can guarantee that AI systems are effectively overseen by humans and allow intervention when potential harm occurs. Transparency ensures that critical information about how the AI model was trained and structured is available to humans, since stakeholders must understand how AI models function and the reasoning behind their decisions to be able to intervene. Being a multi-faceted property that concerns AI models, their components, and algorithms.',

        'fairness' => 'Fairness reflects the concepts of equality and inclusiveness to avoid biases and discriminatory behaviors safeguarding fundamental human rights and values. An approach that considers humans as a whole is essential for ensuring that AI can contribute positively to society and protect them against potential harms.',

        'automation-level' => 'As AI becomes increasingly integrated into countless aspects of human life, studying the appropriate balance between automation and human control in human-AI interactions is necessary. Although there are contexts of use in which humans need or wish for fully automated systems in which their control is not necessary, it is important to address the ethical and legal consequences of undesired events caused by AI systems’ outputs.',

        'protection' => 'The human-centric approach undertaken by the AI Act aims at ensuring that users are safeguarded against harm, threats, or intrusion. This principle is strongly intertwined with the legal requirements set by governmental norms and rules that designers, developers, and deployers must comply with to protect users from unsafe behavior. There is a need to create secure and resilient AI systems that can preserve users’ privacy. In this regard, the AI Act recalls the General Data Protection Regulation (GDPR), which emphasized the integration of privacy and data protection into the design and development of systems.',
    ];

    $currentPrinciple = request()->route('principle');
    $description = $descriptions[$currentPrinciple] ?? '';
@endphp

<div class="flex min-h-screen min-w-[1280px] w-full border border-black bg-white text-[#5d5d5d]">

    {{-- SIDEBAR --}}
    <aside
        class="relative z-30 flex min-h-screen w-[119px] shrink-0 flex-col items-center bg-[#252525]"
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
    <main class="relative min-h-screen flex-1 bg-[#e9e9e9]">
        <section class="min-h-screen pb-[50px] pl-[54px] pr-[77px] pt-[26px]">

            <header class="flex items-start gap-[20px]">

                {{-- TORNA ALLA LIBRERIA --}}
                <a
                    href="{{ route('library-principles') }}"
                    class="mt-[18px] flex h-[28px] w-[28px] shrink-0
                           items-center justify-center rounded-[4px] text-black
                           focus-visible:outline focus-visible:outline-2
                           focus-visible:outline-offset-2
                           focus-visible:outline-[#4a90e2]"
                    aria-label="Torna alla Library of Principles"
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
                            class="m-0 bg-[linear-gradient(90deg,#cf3aa8_0%,#5f67ff_52%,#6bc1ff_100%)]
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

            <div class="ml-[47px] mr-[10px] mt-[31px] max-w-[856px]">

                {{-- DESCRIZIONE DINAMICA --}}
                <section aria-labelledby="principle-description">
                    <h2 id="principle-description" class="sr-only">
                        Principle description
                    </h2>

                    <p
                        class="m-0 font-['Work_Sans-Regular'] text-[18px]
                               leading-[1.35] text-[#5f5f5f]"
                    >
                        {{ $description }}
                    </p>
                </section>

                {{-- APPLICATION EXAMPLE --}}
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
                            class="m-0 font-['Roboto_Slab-Regular']
                                   text-[18px] leading-[1.1] text-[#575757]"
                        >
                            Application example
                        </h2>
                    </div>

                    <p
                        class="mt-[15px] font-['Work_Sans-Regular']
                               text-[18px] leading-[1.35] text-[#5f5f5f]"
                    >
                        Description of the application example. Description of the
                        application example. Description of the application example.
                    </p>

                    <p
                        class="mt-[8px] font-['Work_Sans-Regular']
                               text-[18px] leading-[1.35] text-[#5f5f5f]"
                    >
                        Description of the application example. Description of the
                        application example. Description of the application example.
                        Description of the application example.
                    </p>
                </section>

                {{-- RELATED CONTENT --}}
                <section class="mt-[35px]" aria-label="Related content">
                    <div class="grid grid-cols-3 gap-[19px]">
                        <article class="h-[116px] rounded-[8px] bg-[#d9d9d9]"></article>
                        <article class="h-[116px] rounded-[8px] bg-[#d9d9d9]"></article>
                        <article class="h-[116px] rounded-[8px] bg-[#d9d9d9]"></article>
                    </div>
                </section>

            </div>
        </section>
    </main>
</div>
</body>
</html>