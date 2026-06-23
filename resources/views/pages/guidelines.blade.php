<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design Guidelines</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="bg-white border border-solid border-black w-full min-w-[1280px] min-h-[832px] flex overflow-hidden">
    <aside class="w-[119px] min-h-[832px] bg-[#252525] relative z-30 flex flex-col items-center shrink-0" aria-label="Primary navigation">
        <div class="w-full flex flex-col items-center pt-[18px]">
            <a href="/" class="flex flex-col items-center justify-center gap-[6px] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2] rounded-[4px]" aria-label="FrameSAI home">
                <img src="img/group.png" alt="" class="w-[61px] h-[67px] block" />
                <span class="font-['Work_Sans-Regular','Arial',sans-serif] text-[26px] leading-[1] tracking-[-0.2px] bg-[linear-gradient(90deg,#ff2f92_0%,#635bff_50%,#00c2ff_100%)] bg-clip-text text-transparent">FrameSAI</span>
            </a>
        </div>

        <nav class="w-full mt-[45px]" aria-label="Sections">
            <ul class="w-full flex flex-col items-center gap-[16px]">
                <li class="w-full flex justify-center">
                    <a href="/" class="w-[95px] h-[89px] rounded-[10px] flex flex-col items-center justify-center text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2]">
                        <img src="img/homepage.png" alt="" class="w-[36px] h-[36px] block mb-[7px]" />
                        <span class="font-['Work_Sans-Regular','Arial',sans-serif] text-[11px] leading-[1.1]">Homepage</span>
                    </a>
                </li>

                <li class="w-full flex justify-center">
                    <a href="{{ route('library-principles') }}" class="w-[95px] h-[89px] rounded-[10px] flex flex-col items-center justify-center text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2]">
                        <img src="img/principles.png" alt="" class="w-[36px] h-[36px] block mb-[7px]" />
                        <span class="font-['Work_Sans-Regular','Arial',sans-serif] text-[11px] leading-[1.1]">Principles</span>
                    </a>
                </li>

                <li class="w-full flex justify-center">
                    <a href="/guidelines" aria-current="page" class="w-[95px] h-[89px] rounded-[10px] bg-[#3b3b3b] flex flex-col items-center justify-center text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2]">
                        <img src="img/guidelines.png" alt="" class="w-[36px] h-[36px] block mb-[7px]" />
                        <span class="font-['Work_Sans-Regular','Arial',sans-serif] text-[11px] leading-[1.1]">Guidelines</span>
                    </a>
                </li>

                <li class="w-full flex justify-center">
                    <a href="/success-criteria" class="w-[95px] h-[89px] rounded-[10px] flex flex-col items-center justify-center text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2]">
                        <img src="img/success-criteria.png" alt="" class="w-[36px] h-[36px] block mb-[7px]" />
                        <span class="font-['Work_Sans-Regular','Arial',sans-serif] text-[11px] leading-[1.1] text-center px-[6px]">Success Criteria</span>
                    </a>
                </li>

                <li class="w-full flex justify-center">
                    <a href="{{ route('design-pattern') }}" class="w-[95px] h-[89px] rounded-[10px] flex flex-col items-center justify-center text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2]">
                        <img src="img/design-pattern.png" alt="" class="w-[36px] h-[36px] block mb-[7px]" />
                        <span class="font-['Work_Sans-Regular','Arial',sans-serif] text-[11px] leading-[1.1] text-center px-[6px]">Design Pattern</span>
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    <main class="relative flex-1 min-h-[832px] bg-[#d9d9d9] overflow-hidden" aria-label="Design Guidelines page">
        <section class="absolute inset-0" aria-label="Main content">
            <header class="absolute top-[31px] left-[30px] flex items-center">
                <a href="{{ route('library-principles') }}" class="mr-[24px] text-black leading-none focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2] rounded-[4px]" aria-label="Go back">
                    <span class="block text-[40px] leading-[1]">&larr;</span>
                </a>

                <div class="flex items-start">
                    <img src="img/design-guidelines-icon.svg" alt="" class="w-[56px] h-[56px] mt-[2px] mr-[12px]" />

                    <div class="relative">
                        <h1 class="m-0 text-[28px] leading-[34px] font-normal text-black font-['Roboto_Slab-Regular','Georgia',serif]">
                            Design <span class="italic font-semibold text-[#9625ff] font-['Work_Sans-Regular','Arial',sans-serif]">Guidelines</span>
                        </h1>

                        <div class="mt-[2px] h-[3px] w-[269px] bg-gradient-to-r from-[#f53696] via-[#8c2ae8] to-[#54d2f4] shadow-[0_1px_4px_0_rgba(84,210,244,0.85)]"></div>
                    </div>
                </div>
            </header>

            <div class="absolute top-[143px] left-[24px] w-[273px]">
                <section aria-label="Guideline groups">
                    <div class="flex items-center w-[273px] h-[51px] bg-[#efefef]">
                        <div class="w-[3px] h-[39px] bg-black ml-[1px] mr-[18px]"></div>

                        <button type="button" class="w-[39px] h-[31px] rounded-[5px] bg-[#5e5e5e] text-white text-[10px] leading-[12px] font-['Work_Sans-Regular','Arial',sans-serif]">
                            All
                        </button>

                        <div class="ml-[9px]">
                            <div class="text-[14px] leading-[16px] text-[#303030] font-['Work_Sans-Regular','Arial',sans-serif]">All Guidelines</div>
                            <div class="mt-[3px] text-[10px] leading-[12px] text-[#8d8d8d] font-['Work_Sans-Regular','Arial',sans-serif]">12 Guidelines</div>
                        </div>
                    </div>

                    <div class="w-[206px] h-px bg-[#b9b9b9] ml-[15px] mt-[77px]"></div>

                    <ul class="mt-[13px] ml-[47px] space-y-[8px]" aria-label="Principle filters">
                        <li class="flex items-start">
                            <span class="flex items-center justify-center w-[35px] h-[31px] rounded-[4px] bg-[#ff4f6a] text-white text-[14px] leading-[16px] font-['Work_Sans-Regular','Arial',sans-serif] mr-[10px]">P1</span>
                            <div class="pt-[2px]">
                                <div class="text-[16px] leading-[18px] text-[#303030] font-['Work_Sans-Regular','Arial',sans-serif]">Transparency</div>
                                <div class="mt-[4px] text-[10px] leading-[12px] text-[#8d8d8d] font-['Work_Sans-Regular','Arial',sans-serif]">4 Guidelines</div>
                            </div>
                        </li>

                        <li class="flex items-start">
                            <span class="flex items-center justify-center w-[35px] h-[31px] rounded-[4px] bg-[#ff73b3] text-white text-[14px] leading-[16px] font-['Work_Sans-Regular','Arial',sans-serif] mr-[10px]">P2</span>
                            <div class="pt-[2px]">
                                <div class="text-[16px] leading-[18px] text-[#303030] font-['Work_Sans-Regular','Arial',sans-serif]">Fairness</div>
                                <div class="mt-[4px] text-[10px] leading-[12px] text-[#8d8d8d] font-['Work_Sans-Regular','Arial',sans-serif]">2 Guidelines</div>
                            </div>
                        </li>

                        <li class="flex items-start">
                            <span class="flex items-center justify-center w-[35px] h-[31px] rounded-[4px] bg-[#b07bf1] text-white text-[14px] leading-[16px] font-['Work_Sans-Regular','Arial',sans-serif] mr-[10px]">P3</span>
                            <div class="pt-[2px]">
                                <div class="text-[16px] leading-[18px] text-[#303030] font-['Work_Sans-Regular','Arial',sans-serif]">Automation Level</div>
                                <div class="mt-[4px] text-[10px] leading-[12px] text-[#8d8d8d] font-['Work_Sans-Regular','Arial',sans-serif]">3 Guidelines</div>
                            </div>
                        </li>

                        <li class="flex items-start">
                            <span class="flex items-center justify-center w-[35px] h-[31px] rounded-[4px] bg-[#61afe5] text-white text-[14px] leading-[16px] font-['Work_Sans-Regular','Arial',sans-serif] mr-[10px]">P4</span>
                            <div class="pt-[2px]">
                                <div class="text-[16px] leading-[18px] text-[#303030] font-['Work_Sans-Regular','Arial',sans-serif]">Protection</div>
                                <div class="mt-[4px] text-[10px] leading-[12px] text-[#8d8d8d] font-['Work_Sans-Regular','Arial',sans-serif]">3 Guidelines</div>
                            </div>
                        </li>
                    </ul>
                </section>
            </div>

            <section class="absolute top-[118px] left-[361px] w-[525px]" aria-labelledby="guidelines-description-heading">
                <h2 id="guidelines-description-heading" class="m-0 text-[18px] leading-[24px] font-normal text-black font-['Roboto_Slab-Regular','Georgia',serif]">
                    Description of guidelines
                </h2>

                <div class="mt-[57px] space-y-[10px]">
                    <article class="relative w-[525px] h-[112px] bg-[#f5f5f5]">
                        <div class="absolute top-[2px] left-0 w-[4px] h-[106px] bg-black rounded-[2px]"></div>
                        <div class="absolute top-[11px] right-[16px] flex items-center justify-center min-w-[20px] h-[14px] px-[5px] rounded-[8px] bg-[#ff5a72] text-white text-[10px] leading-[10px] font-['Work_Sans-Regular','Arial',sans-serif]">P1</div>
                        <div class="absolute top-[38px] left-[22px] flex items-center justify-center w-[37px] h-[20px] rounded-[5px] border border-black text-[12px] leading-[12px] text-black font-['Work_Sans-Regular','Arial',sans-serif]">G1</div>
                        <p class="absolute top-[40px] left-[77px] w-[389px] m-0 text-[12px] leading-[14px] text-[#303030] font-['Work_Sans-Regular','Arial',sans-serif]">
                            Description of the success criteria. Description of the success criteria. Description of the success criteria. Description of the success criteria. Description of the success criteria.
                        </p>
                    </article>

                    <article class="relative w-[525px] h-[112px] bg-[#f5f5f5]">
                        <div class="absolute top-[2px] left-0 w-[4px] h-[106px] bg-black rounded-[2px]"></div>
                        <div class="absolute top-[11px] right-[15px] flex gap-[4px]">
                            <span class="flex items-center justify-center min-w-[20px] h-[14px] px-[5px] rounded-[8px] bg-[#ff5a72] text-white text-[10px] leading-[10px] font-['Work_Sans-Regular','Arial',sans-serif]">P1</span>
                            <span class="flex items-center justify-center min-w-[20px] h-[14px] px-[5px] rounded-[8px] bg-[#ff73b3] text-white text-[10px] leading-[10px] font-['Work_Sans-Regular','Arial',sans-serif]">P2</span>
                            <span class="flex items-center justify-center min-w-[20px] h-[14px] px-[5px] rounded-[8px] bg-[#61afe5] text-white text-[10px] leading-[10px] font-['Work_Sans-Regular','Arial',sans-serif]">P4</span>
                        </div>
                        <div class="absolute top-[42px] left-[22px] flex items-center justify-center w-[37px] h-[20px] rounded-[5px] border border-black text-[12px] leading-[12px] text-black font-['Work_Sans-Regular','Arial',sans-serif]">G2</div>
                        <p class="absolute top-[40px] left-[77px] w-[389px] m-0 text-[12px] leading-[14px] text-[#303030] font-['Work_Sans-Regular','Arial',sans-serif]">
                            Description of the success criteria. Description of the success criteria. Description of the success criteria. Description of the success criteria. Description of the success criteria.
                        </p>
                    </article>

                    <article class="relative w-[525px] h-[112px] bg-[#f5f5f5]">
                        <div class="absolute top-[2px] left-0 w-[4px] h-[106px] bg-black rounded-[2px]"></div>
                        <div class="absolute top-[11px] right-[16px] flex items-center justify-center min-w-[20px] h-[14px] px-[5px] rounded-[8px] bg-[#b07bf1] text-white text-[10px] leading-[10px] font-['Work_Sans-Regular','Arial',sans-serif]">P3</div>
                        <div class="absolute top-[43px] left-[22px] flex items-center justify-center w-[37px] h-[20px] rounded-[5px] border border-black text-[12px] leading-[12px] text-black font-['Work_Sans-Regular','Arial',sans-serif]">G3</div>
                        <p class="absolute top-[40px] left-[77px] w-[389px] m-0 text-[12px] leading-[14px] text-[#303030] font-['Work_Sans-Regular','Arial',sans-serif]">
                            Description of the success criteria. Description of the success criteria. Description of the success criteria. Description of the success criteria. Description of the success criteria.
                        </p>
                    </article>

                    <article class="relative w-[525px] h-[112px] bg-[#f5f5f5]">
                        <div class="absolute top-[2px] left-0 w-[4px] h-[106px] bg-black rounded-[2px]"></div>
                        <div class="absolute top-[11px] right-[16px] flex items-center justify-center min-w-[20px] h-[14px] px-[5px] rounded-[8px] bg-[#61afe5] text-white text-[10px] leading-[10px] font-['Work_Sans-Regular','Arial',sans-serif]">P4</div>
                        <div class="absolute top-[43px] left-[22px] flex items-center justify-center w-[37px] h-[20px] rounded-[5px] border border-black text-[12px] leading-[12px] text-black font-['Work_Sans-Regular','Arial',sans-serif]">G4</div>
                        <p class="absolute top-[40px] left-[77px] w-[389px] m-0 text-[12px] leading-[14px] text-[#303030] font-['Work_Sans-Regular','Arial',sans-serif]">
                            Description of the success criteria. Description of the success criteria. Description of the success criteria. Description of the success criteria. Description of the success criteria.
                        </p>
                    </article>
                </div>
            </section>

            <div class="pointer-events-none absolute top-[82px] right-[25px] flex flex-col items-center h-[525px]" aria-hidden="true">
                <div class="w-0 h-0 border-l-[12px] border-l-transparent border-r-[12px] border-r-transparent border-b-[20px] border-b-[#6f6f6f]"></div>
                <div class="w-[17px] h-[488px] rounded-[10px] bg-[#8f8f8f] mt-[2px]"></div>
                <div class="w-0 h-0 border-l-[12px] border-l-transparent border-r-[12px] border-r-transparent border-t-[20px] border-t-[#6f6f6f] mt-[2px]"></div>
            </div>
        </section>
    </main>
</div>
</body>
</html>