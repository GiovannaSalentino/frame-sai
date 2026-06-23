<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FrameSAI</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="m-0 bg-white">
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
                class="flex flex-col items-center justify-center gap-[6px] rounded-[4px]"
                aria-label="FrameSAI home"
            >
                <img
                    src="{{ asset('img/group.png') }}"
                    alt="FrameSAI logo"
                    class="block h-[67px] w-[61px]"
                >

                <span
                    class="bg-gradient-to-r from-[#ff2f92] via-[#635bff]
                           to-[#00c2ff] bg-clip-text font-['Work_Sans']
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
                        aria-current="page"
                        class="flex h-[89px] w-[95px] flex-col items-center
                               justify-center rounded-[8px] bg-[#3b3b3b] text-white"
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
                        class="flex h-[89px] w-[95px] flex-col items-center
                               justify-center rounded-[8px] text-white"
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

    {{-- HOMEPAGE --}}
    <main
        class="relative min-h-screen flex-1 overflow-hidden bg-[#dedede]"
        aria-labelledby="homepage-title"
    >
        <section class="relative mx-auto min-h-[832px] w-full max-w-[1160px]">

            <header
                class="absolute left-[65px] top-[90px] flex flex-col items-center"
            >
                <h1
                    id="homepage-title"
                    class="m-0 bg-gradient-to-r from-[#d4008f]
                           to-[#2f8ee5] bg-clip-text font-['Work_Sans']
                           text-[44px] font-normal leading-none text-transparent"
                >
                    FrameSAI
                </h1>

                <div
                    class="mt-[4px] h-[3px] w-[286px]
                           bg-gradient-to-r from-[rgba(255,0,138,0.55)]
                           to-[rgba(0,207,255,0.55)]"
                ></div>

                <p
                    class="mt-[10px] font-['Work_Sans']
                           text-[12px] leading-none text-black"
                >
                    description of platform
                </p>
            </header>

            {{-- ILLUSTRAZIONE CENTRALE --}}
            <section
                class="absolute left-1/2 top-[178px]
                       flex h-[330px] w-[430px]
                       -translate-x-1/2 items-center justify-center"
                aria-label="FrameSAI illustration"
            >
                <div class="relative h-[300px] w-[300px]">

                    <div
                        class="absolute left-[29px] top-0 h-[137px] w-[242px]
                               rounded-[16px] bg-gradient-to-r
                               from-[#67d8e8] via-[#13bcea] to-[#4476d7]
                               [clip-path:polygon(50%_0%,100%_47%,50%_100%,0%_47%)]"
                    ></div>

                    <div
                        class="absolute left-[29px] top-[108px]
                               h-[137px] w-[242px] rounded-[16px]
                               bg-gradient-to-r from-[#eb8db9]
                               via-[#a96bc8] to-[#5f4478]
                               [clip-path:polygon(50%_0%,100%_47%,50%_100%,0%_47%)]"
                    ></div>

                    <div
                        class="absolute left-[29px] top-[162px]
                               h-[137px] w-[242px] rounded-[16px]
                               bg-gradient-to-r from-[#ff4e80]
                               via-[#ff006a] to-[#c4004f]
                               [clip-path:polygon(50%_0%,100%_47%,50%_100%,0%_47%)]"
                    ></div>

                </div>
            </section>

        </section>
    </main>
</div>
</body>
</html>