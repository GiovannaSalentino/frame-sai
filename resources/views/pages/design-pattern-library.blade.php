<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design Pattern Library</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="bg-white border border-solid border-black w-full min-w-[1280px] min-h-[832px] flex overflow-hidden">
    <aside class="w-[119px] min-h-[832px] bg-[#252525] relative z-30 flex flex-col items-center shrink-0" aria-label="Primary navigation">
        <div class="w-full flex flex-col items-center pt-[18px]">
            <a href="/" class="flex flex-col items-center justify-center gap-[6px] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2] rounded-[4px]" aria-label="FrameSAI home">
                <img src="img/group.png" alt="" class="w-[61px] h-[67px] block" />
                <span class="font-['Work_Sans-Regular'] text-[26px] leading-[1] tracking-[-0.2px] bg-[linear-gradient(90deg,#ff2f92_0%,#635bff_50%,#00c2ff_100%)] bg-clip-text text-transparent">FrameSAI</span>
            </a>
        </div>

        <nav class="w-full mt-[45px]" aria-label="Sections">
            <ul class="w-full flex flex-col items-center gap-[16px]">
                <li class="w-full flex justify-center">
                    <a href="/" class="w-[95px] h-[89px] rounded-[10px] flex flex-col items-center justify-center text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2]">
                        <img src="img/homepage.png" alt="" class="w-[36px] h-[36px] block mb-[7px]" />
                        <span class="font-['Work_Sans-Regular'] text-[11px] leading-[1.1]">Homepage</span>
                    </a>
                </li>

                <li class="w-full flex justify-center">
                    <a href="{{ route('library-principles') }}" class="w-[95px] h-[89px] rounded-[10px] flex flex-col items-center justify-center text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2]">
                        <img src="img/principles.png" alt="" class="w-[36px] h-[36px] block mb-[7px]" />
                        <span class="font-['Work_Sans-Regular'] text-[11px] leading-[1.1]">Principles</span>
                    </a>
                </li>

                <li class="w-full flex justify-center">
                    <a href="/guidelines" class="w-[95px] h-[89px] rounded-[10px] flex flex-col items-center justify-center text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2]">
                        <img src="img/guidelines.png" alt="" class="w-[36px] h-[36px] block mb-[7px]" />
                        <span class="font-['Work_Sans-Regular'] text-[11px] leading-[1.1]">Guidelines</span>
                    </a>
                </li>

                <li class="w-full flex justify-center">
                    <a href="/success-criteria" class="w-[95px] h-[89px] rounded-[10px] flex flex-col items-center justify-center text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2]">
                        <img src="img/success-criteria.png" alt="" class="w-[36px] h-[36px] block mb-[7px]" />
                        <span class="font-['Work_Sans-Regular'] text-[11px] leading-[1.1] text-center px-[6px]">Success Criteria</span>
                    </a>
                </li>

                <li class="w-full flex justify-center">
                    <a href="{{ route('design-pattern') }}" aria-current="page" class="w-[95px] h-[89px] rounded-[10px] bg-[#3b3b3b] flex flex-col items-center justify-center text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2]">
                        <img src="img/design-pattern.png" alt="" class="w-[36px] h-[36px] block mb-[7px]" />
                        <span class="font-['Work_Sans-Regular'] text-[11px] leading-[1.1] text-center px-[6px]">Design Pattern</span>
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    <main class="relative flex-1 min-h-[832px] bg-white overflow-hidden">
        <img class="pointer-events-none absolute top-0 left-0 w-[1280px] h-[832px]" src="img/frame-1.svg" alt="" aria-hidden="true" />

        <header class="absolute top-[25px] left-[14px] right-[31px]">
            <a href="{{ route('library-principles') }}" class="absolute top-[38px] left-0 w-[29px] h-4 flex focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2] rounded-sm" aria-label="Go back">
                <img class="flex-1 w-[29px]" src="img/arrow-2.svg" alt="Back" />
            </a>

            <div class="absolute top-0 left-[41px] flex items-center gap-[11px]">
                <div class="w-[54px] h-[48px]" aria-hidden="true"></div>

                <div class="flex flex-col">
                    <h1 class="m-0 text-[26px] leading-[1.1] font-normal">
                        <span class="text-[#6b1bb4]">Design Pattern </span><span class="text-[#3f8fd8]">Library</span>
                    </h1>
                    <div class="mt-[5px] h-[3px] w-[260px] bg-gradient-to-r from-[#f53696] via-[#8c2ae8] to-[#54d2f4] shadow-[0_1px_4px_0_rgba(84,210,244,0.85)]"></div>
                </div>
            </div>
        </header>

        <section class="absolute top-[93px] left-[14px] w-[1084px] h-[739px]">
            <section class="absolute top-0 left-0 w-[161px] h-[552px]" aria-label="Pattern filters and guidelines">
                <div class="absolute top-[9px] left-0 w-[161px] h-[34px] border-l-2 border-black bg-[#efefef] flex items-center">
                    <button type="button" class="ml-[9px] h-[27px] min-w-[29px] px-[8px] rounded-[4px] bg-[#5f5f5f] text-white text-[10px] leading-[27px] text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2]" aria-pressed="true">
                        All
                    </button>
                    <div class="ml-[10px]">
                        <p class="m-0 text-[11px] leading-[14px] text-[#2b2b2b]">All Design Pattern</p>
                        <p class="m-0 mt-[4px] text-[9px] leading-[11px] text-[#9f9f9f]">15 Design Pattern</p>
                    </div>
                </div>

                <div class="absolute top-[128px] left-0 w-[161px] h-[424px] border-r border-[#d0d0d0]">
                    <ul class="list-none m-0 p-0">
                        <li class="absolute top-[17px] left-[34px] flex items-start gap-[9px]">
                            <button type="button" class="w-[30px] h-[30px] rounded-[5px] border border-black text-[11px] leading-[30px] text-center text-black bg-transparent focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2]">G1</button>
                            <div class="pt-[2px]">
                                <p class="m-0 text-[11px] leading-[14px] text-black">Guideline 1</p>
                                <p class="m-0 mt-[4px] text-[9px] leading-[11px] text-[#9f9f9f]">3 Design Pattern</p>
                            </div>
                        </li>

                        <li class="absolute top-[59px] left-[34px] flex items-start gap-[9px]">
                            <button type="button" class="w-[30px] h-[30px] rounded-[5px] border border-black text-[11px] leading-[30px] text-center text-black bg-transparent focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2]">G2</button>
                            <div class="pt-[2px]">
                                <p class="m-0 text-[11px] leading-[14px] text-black">Guideline 2</p>
                                <p class="m-0 mt-[4px] text-[9px] leading-[11px] text-[#9f9f9f]">2 Design Pattern</p>
                            </div>
                        </li>

                        <li class="absolute top-[101px] left-[34px] flex items-start gap-[9px]">
                            <button type="button" class="w-[30px] h-[30px] rounded-[5px] border border-black text-[11px] leading-[30px] text-center text-black bg-transparent focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2]">G3</button>
                            <div class="pt-[2px]">
                                <p class="m-0 text-[11px] leading-[14px] text-black">Guideline 3</p>
                                <p class="m-0 mt-[4px] text-[9px] leading-[11px] text-[#9f9f9f]">3 Design Pattern</p>
                            </div>
                        </li>

                        <li class="absolute top-[143px] left-[34px] flex items-start gap-[9px]">
                            <button type="button" class="w-[30px] h-[30px] rounded-[5px] border border-black text-[11px] leading-[30px] text-center text-black bg-transparent focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2]">G4</button>
                            <div class="pt-[2px]">
                                <p class="m-0 text-[11px] leading-[14px] text-black">Guideline 4</p>
                                <p class="m-0 mt-[4px] text-[9px] leading-[11px] text-[#9f9f9f]">2 Design Pattern</p>
                            </div>
                        </li>

                        <li class="absolute top-[185px] left-[34px] flex items-start gap-[9px]">
                            <button type="button" class="w-[30px] h-[30px] rounded-[5px] border border-black text-[11px] leading-[30px] text-center text-black bg-transparent focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2]">G5</button>
                            <div class="pt-[2px]">
                                <p class="m-0 text-[11px] leading-[14px] text-black">Guideline 5</p>
                                <p class="m-0 mt-[4px] text-[9px] leading-[11px] text-[#9f9f9f]">5 Design Pattern</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>

            <section class="absolute top-0 left-[173px] w-[911px]" aria-labelledby="description-heading">
                <div class="w-[711px] h-[167px] rounded-[14px] bg-[linear-gradient(180deg,#5a51a5_0%,#755b8c_58%,#7b5d87_100%)] relative">
                    <div class="absolute inset-0 rounded-[14px] bg-[radial-gradient(circle_at_65%_80%,rgba(211,88,130,0.35),transparent_26%)]" aria-hidden="true"></div>
                    <h2 id="description-heading" class="absolute top-[43px] left-[53px] w-[447px] m-0 text-center text-white text-[33px] leading-[1.02] font-normal tracking-[0.2px]">
                        Design Pattern Description and the utility
                    </h2>
                    <p class="absolute top-[34px] right-[42px] m-0 text-right text-white text-[31px] leading-[1.18] font-normal">
                        15 dp<br />TOTAL
                    </p>
                </div>

                <section class="mt-[37px]" aria-labelledby="available-patterns-heading">
                    <h2 id="available-patterns-heading" class="m-0 text-[27px] leading-[1.15] font-semibold text-[#232323] tracking-[0.2px]">
                        AVAILABLE PATTERNS
                    </h2>

                    <div class="mt-[18px] flex gap-[23px]">
                        <article class="relative w-[347px] min-h-[296px] rounded-[13px] bg-[#f6f6f6] px-[21px] pt-[14px] pb-[13px]">
                            <div class="absolute top-[16px] right-[13px] rounded-[4px] bg-[#eadff3] px-[11px] py-[4px] text-[11px] leading-[1] text-[#7e26ff]">
                                DP1
                            </div>
                            <h3 class="m-0 text-[18px] leading-[1.2] font-semibold text-[#1f1f1f] pr-[72px]">
                                Supervise the AI System
                            </h3>
                            <p class="m-0 mt-[8px] text-[12px] leading-[1.2] text-[#676767]">
                                Problem: Allow users supervise
                            </p>
                            <p class="m-0 mt-[30px] text-center text-[18px] leading-[1.03] text-[#1f1f1f]">
                                Design Suggestion Design<br />
                                Suggestion Design<br />
                                Suggestion Design<br />
                                Suggestion
                            </p>
                            <div class="mt-[42px]">
                                <p class="m-0 text-[14px] leading-[1.2] text-[#8c8c8c]">LINKED GUIDELINES</p>
                                <button type="button" class="mt-[10px] rounded-[5px] border border-[#c8afe8] bg-[#eadff3] px-[5px] py-[1px] text-[11px] leading-[1] text-[#2e2e2e] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2]">
                                    Guideline 5
                                </button>
                            </div>
                           <div class="mt-[22px] flex items-center justify-between">
    <p class="m-0 text-[12px] leading-[1.2] text-[#b2b2b2]">
        1 example
    </p>

    <a
        href="{{ route('design-pattern.dp1') }}"
        class="rounded-sm text-[14px] font-semibold leading-[1.2] text-[#2a21ff]
               focus-visible:outline focus-visible:outline-2
               focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2]"
    >
        Explore
        <span aria-hidden="true" class="ml-[3px] align-[-4px] text-[26px] leading-none">
            &rsaquo;
        </span>
    </a>
</div>
                        </article>

                        <article class="relative w-[347px] min-h-[296px] rounded-[13px] bg-[#f6f6f6] px-[21px] pt-[14px] pb-[13px]">
                            <div class="absolute top-[16px] right-[13px] rounded-[4px] bg-[#eadff3] px-[11px] py-[4px] text-[11px] leading-[1] text-[#7e26ff]">
                                DP2
                            </div>
                            <h3 class="m-0 text-[18px] leading-[1.2] font-semibold text-[#1f1f1f] pr-[72px]">
                                Understand Model's Architecture
                            </h3>
                            <p class="m-0 mt-[8px] text-[12px] leading-[1.2] text-[#676767]">
                                Problem: How can users
                            </p>
                            <p class="m-0 mt-[36px] text-center text-[18px] leading-[1.03] text-[#1f1f1f]">
                                Design Suggestion Design<br />
                                Suggestion Design Suggestion<br />
                                Design Suggestion Design<br />
                                Suggestion
                            </p>
                            <div class="mt-[39px]">
                                <p class="m-0 text-[14px] leading-[1.2] text-[#8c8c8c]">LINKED GUIDELINES</p>
                                <button type="button" class="mt-[10px] rounded-[5px] border border-[#c8afe8] bg-[#eadff3] px-[5px] py-[1px] text-[11px] leading-[1] text-[#2e2e2e] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2]">
                                    Guideline 2
                                </button>
                            </div>
                            <div class="mt-[22px] flex items-center justify-between">
                                <p class="m-0 text-[12px] leading-[1.2] text-[#b2b2b2]">1 example</p>
                                <a href="#" class="text-[14px] leading-[1.2] font-semibold text-[#2a21ff] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2] rounded-sm">
                                    Explore
                                    <span aria-hidden="true" class="ml-[3px] text-[26px] leading-none align-[-4px]">&rsaquo;</span>
                                </a>
                            </div>
                        </article>
                    </div>
                </section>
            </section>

            <div class="pointer-events-none absolute top-0 right-[7px] h-[501px] w-[19px] rounded-[10px] bg-[#7f7f7f]" aria-hidden="true">
                <div class="absolute top-[-24px] left-1/2 -translate-x-1/2 w-0 h-0 border-l-[10px] border-r-[10px] border-b-[17px] border-l-transparent border-r-transparent border-b-[#5f5f5f]"></div>
                <div class="absolute bottom-[-24px] left-1/2 -translate-x-1/2 w-0 h-0 border-l-[10px] border-r-[10px] border-t-[17px] border-l-transparent border-r-transparent border-t-[#5f5f5f]"></div>
            </div>
        </section>
    </main>
</div>
</body>
</html>