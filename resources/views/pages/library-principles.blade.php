<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library of Principles</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="bg-white border border-solid border-black w-full min-w-[1280px] min-h-[832px] relative overflow-hidden">

    <img class="pointer-events-none absolute top-0 left-0 w-[1280px] h-[832px]" src="img/frame-1.svg" alt="" aria-hidden="true" />

    <aside class="relative z-30 w-[119px] min-h-[832px] bg-[#252525] flex flex-col items-center shrink-0" aria-label="Primary navigation">
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
                    <a href="{{ route('library-principles') }}" aria-current="page" class="w-[95px] h-[89px] rounded-[10px] bg-[#3b3b3b] flex flex-col items-center justify-center text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2]">
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
                    <a href="/design-pattern" class="w-[95px] h-[89px] rounded-[10px] flex flex-col items-center justify-center text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2]">
                        <img src="img/design-pattern.png" alt="" class="w-[36px] h-[36px] block mb-[7px]" />
                        <span class="font-['Work_Sans-Regular'] text-[11px] leading-[1.1] text-center px-[6px]">Design Pattern</span>
                    </a>
                </li>
            </ul>
        </nav>
    </aside>

    <main class="absolute inset-0 z-10" aria-label="Library of Principles content">
        <header class="absolute top-[40px] left-[110px] flex items-center gap-[14px]">
            <a href="/" class="inline-flex items-center justify-center text-black focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2] rounded-[4px]" aria-label="Go back">
                <svg class="w-[22px] h-[22px]" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M15 5L8 12L15 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M9 12H21" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </a>

            <div class="flex items-center gap-[12px]">
                <div class="relative w-[46px] h-[42px]" aria-hidden="true">
                    <div class="absolute left-[3px] top-[0px] w-[36px] h-[20px] rotate-[-28deg] border border-[#c6a7ce] bg-transparent rounded-[2px]"></div>
                    <div class="absolute left-[11px] top-[16px] w-[22px] h-[24px] border border-[#c6a7ce] bg-transparent rounded-[1px]"></div>
                    <div class="absolute left-[0px] top-[6px] w-[22px] h-[24px] rotate-[28deg] border border-[#c6a7ce] bg-transparent rounded-[1px]"></div>
                    <div class="absolute left-[17px] top-[8px] w-[4px] h-[4px] border border-[#c6a7ce] rounded-full"></div>
                    <div class="absolute left-[23px] top-[6px] w-[4px] h-[4px] border border-[#c6a7ce] rounded-full"></div>
                    <div class="absolute left-[29px] top-[4px] w-[4px] h-[4px] border border-[#c6a7ce] rounded-full"></div>
                </div>

                <div class="flex flex-col">
                    <h1 class="m-0 text-[25px] leading-[1] font-['Work_Sans-ExtraBold','Arial',sans-serif] bg-gradient-to-r from-[#8c2ae8] via-[#f53696] to-[#1676c8] bg-clip-text text-transparent">
                        Library of Principles
                    </h1>
                    <div class="mt-[4px] h-[3px] w-[235px] bg-gradient-to-r from-[#f53696] via-[#8c2ae8] to-[#54d2f4] shadow-[0_1px_4px_0_rgba(84,210,244,0.85)]"></div>
                </div>
            </div>
        </header>

        <section class="absolute top-[110px] left-[142px] w-[990px]" aria-labelledby="principles-description">
            <h2 id="principles-description" class="sr-only">Description</h2>

            <p class="text-[18px] leading-[1.15] text-black font-['Work_Sans-Regular','Arial',sans-serif]">
                Description of the principles. Description of the principles. Description of the principles. Description of the principles. Description of the principles. Description of the principles. Description of the principles. Description of the principles. Description of the principles. Description of the principles. Description of the principles.
            </p>

            <p class="mt-[18px] text-[18px] leading-[1.15] text-black font-['Work_Sans-Regular','Arial',sans-serif]">
                Description of the principles. Description of the principles. Description of the principles.Description of the principles. Description of the principles. Description of the principles.
            </p>
        </section>

        <section class="absolute top-[333px] left-[166px] flex items-start gap-[48px]" aria-label="Principles cards">
            <a href="{{ route('principio-trasparenza') }}" class="block w-[156px] rounded-[6px] overflow-hidden bg-[#f2f2f2] shadow-none transition hover:-translate-y-[2px] hover:shadow-md focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2]">
                <div class="relative h-[106px] bg-gradient-to-b from-[#ff5b67] to-[#f91d5e]">
                    <span class="absolute top-[12px] right-[11px] text-[26px] leading-none font-['Work_Sans-ExtraBold','Arial',sans-serif] text-white/30">P 1</span>
                </div>

                <div class="bg-[#f6f6f6] px-[18px] pt-[15px] pb-[47px] min-h-[134px]">
                    <h3 class="m-0 text-[16px] leading-[1.05] font-['Work_Sans-ExtraBold','Arial',sans-serif] text-[#161616] uppercase">Transparency</h3>
                    <p class="mt-[18px] text-[11px] leading-[1.25] font-['Work_Sans-Regular','Arial',sans-serif] text-[#5e5e5e]">
                        Breve descrizione principio.
                    </p>
                </div>

                <footer class="h-[25px] bg-[#efefef] px-[8px] flex items-center justify-end">
                    <span class="text-[11px] leading-none font-['Work_Sans-Regular','Arial',sans-serif] uppercase text-[#d6c7ef] tracking-[0.01em]">
                        Explore &rarr;
                    </span>
                </footer>
            </a>

            <a href="/principio-automation-level" class="block w-[156px] rounded-[6px] overflow-hidden bg-[#f2f2f2] shadow-none transition hover:-translate-y-[2px] hover:shadow-md focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2]">
                <div class="relative h-[106px] bg-gradient-to-b from-[#f36cb5] to-[#d666a0]">
                    <span class="absolute top-[12px] right-[11px] text-[26px] leading-none font-['Work_Sans-ExtraBold','Arial',sans-serif] text-white/30">P 2</span>
                </div>

                <div class="bg-[#f6f6f6] px-[18px] pt-[15px] pb-[47px] min-h-[134px]">
                    <h3 class="m-0 text-[16px] leading-[1.05] font-['Work_Sans-ExtraBold','Arial',sans-serif] text-[#161616] uppercase">Automation Level</h3>
                    <p class="mt-[18px] text-[11px] leading-[1.25] font-['Work_Sans-Regular','Arial',sans-serif] text-[#5e5e5e]">
                        Breve descrizione principio.
                    </p>
                </div>

                <footer class="h-[25px] bg-[#efefef] px-[8px] flex items-center justify-end">
                    <span class="text-[11px] leading-none font-['Work_Sans-Regular','Arial',sans-serif] uppercase text-[#d6c7ef] tracking-[0.01em]">
                        Explore &rarr;
                    </span>
                </footer>
            </a>

            <a href="/principio-fairness" class="block w-[156px] rounded-[6px] overflow-hidden bg-[#f2f2f2] shadow-none transition hover:-translate-y-[2px] hover:shadow-md focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2]">
                <div class="relative h-[106px] bg-gradient-to-b from-[#bf79ea] to-[#8d5ac2]">
                    <span class="absolute top-[12px] right-[11px] text-[26px] leading-none font-['Work_Sans-ExtraBold','Arial',sans-serif] text-white/30">P 3</span>
                </div>

                <div class="bg-[#f6f6f6] px-[18px] pt-[15px] pb-[47px] min-h-[134px]">
                    <h3 class="m-0 text-[16px] leading-[1.05] font-['Work_Sans-ExtraBold','Arial',sans-serif] text-[#161616] uppercase">Fairness</h3>
                    <p class="mt-[18px] text-[11px] leading-[1.25] font-['Work_Sans-Regular','Arial',sans-serif] text-[#5e5e5e]">
                        Breve descrizione principio.
                    </p>
                </div>

                <footer class="h-[25px] bg-[#efefef] px-[8px] flex items-center justify-end">
                    <span class="text-[11px] leading-none font-['Work_Sans-Regular','Arial',sans-serif] uppercase text-[#d6c7ef] tracking-[0.01em]">
                        Explore &rarr;
                    </span>
                </footer>
            </a>

            <a href="/principio-protection" class="block w-[156px] rounded-[6px] overflow-hidden bg-[#f2f2f2] shadow-none transition hover:-translate-y-[2px] hover:shadow-md focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2]">
                <div class="relative h-[106px] bg-gradient-to-b from-[#83d6ec] to-[#6098d7]">
                    <span class="absolute top-[12px] right-[11px] text-[26px] leading-none font-['Work_Sans-ExtraBold','Arial',sans-serif] text-white/30">P 4</span>
                </div>

                <div class="bg-[#f6f6f6] px-[18px] pt-[15px] pb-[47px] min-h-[134px]">
                    <h3 class="m-0 text-[16px] leading-[1.05] font-['Work_Sans-ExtraBold','Arial',sans-serif] text-[#161616] uppercase">Protection</h3>
                    <p class="mt-[18px] text-[11px] leading-[1.25] font-['Work_Sans-Regular','Arial',sans-serif] text-[#5e5e5e]">
                        Breve descrizione principio.
                    </p>
                </div>

                <footer class="h-[25px] bg-[#efefef] px-[8px] flex items-center justify-end">
                    <span class="text-[11px] leading-none font-['Work_Sans-Regular','Arial',sans-serif] uppercase text-[#d6c7ef] tracking-[0.01em]">
                        Explore &rarr;
                    </span>
                </footer>
            </a>
        </section>

        <div class="pointer-events-none absolute top-[95px] right-[20px] h-[525px] w-[22px] flex flex-col items-center justify-between" aria-hidden="true">
            <div class="w-0 h-0 border-l-[10px] border-l-transparent border-r-[10px] border-r-transparent border-b-[17px] border-b-[#666666]"></div>
            <div class="flex-1 my-[8px] w-[16px] rounded-[10px] bg-[#9d9d9d]"></div>
            <div class="w-0 h-0 border-l-[10px] border-l-transparent border-r-[10px] border-r-transparent border-t-[17px] border-t-[#666666]"></div>
        </div>
    </main>
</div>
</body>
</html>