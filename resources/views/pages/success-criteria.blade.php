<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design Success Criteria</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="bg-white border border-solid border-black w-full min-w-[1280px] min-h-[832px] flex overflow-hidden text-black">
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
                    <a href="/guidelines" class="w-[95px] h-[89px] rounded-[10px] flex flex-col items-center justify-center text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2]">
                        <img src="img/guidelines.png" alt="" class="w-[36px] h-[36px] block mb-[7px]" />
                        <span class="font-['Work_Sans-Regular','Arial',sans-serif] text-[11px] leading-[1.1]">Guidelines</span>
                    </a>
                </li>

                <li class="w-full flex justify-center">
                    <a href="{{ route('success-criteria') }}" aria-current="page" class="w-[95px] h-[89px] rounded-[10px] bg-[#3b3b3b] flex flex-col items-center justify-center text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2]">
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

    <main class="relative flex-1 min-h-[832px] bg-[#d9d9d9] overflow-hidden">
        <header class="h-[104px] flex items-center px-[30px]">
            <div class="flex items-center gap-[18px]">
                <a
    href="{{ url()->previous() }}"
    onclick="event.preventDefault(); window.history.back();"
    class="w-[28px] h-[28px] flex items-center justify-center text-black
           focus-visible:outline focus-visible:outline-2
           focus-visible:outline-offset-2 focus-visible:outline-[#4a90e2]
           rounded-[4px]"
    aria-label="Torna alla pagina precedente"
>
    <svg
        width="25"
        height="17"
        viewBox="0 0 25 17"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
        class="w-[25px] h-[17px]"
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

               <div class="relative h-[44px] w-[44px] shrink-0">
    <img
        src="{{ asset('img/tape-viola.png') }}"
        alt=""
        class="absolute left-1/2 top-1/2 h-[100px] w-[100px]
               max-w-none -translate-x-1/2 -translate-y-1/2
               scale-[2] object-contain"
    >
</div>

                <div class="flex flex-col">
                    <h1 class="m-0 text-[28px] leading-[34px] font-normal font-['Roboto_Slab-Regular','Georgia',serif]">
                        <span class="text-black">Design </span>
                        <span class="italic font-semibold bg-gradient-to-r from-[#c10087] to-[#2a77c8] bg-clip-text text-transparent font-['Work_Sans-Regular','Arial',sans-serif]">Success Criteria</span>
                    </h1>

                    <div class="mt-[3px] h-[3px] w-[286px] bg-gradient-to-r from-[#f53696] via-[#8c2ae8] to-[#54d2f4] shadow-[0_1px_4px_0_rgba(84,210,244,0.85)]"></div>
                </div>
            </div>
        </header>

        <div class="px-[18px] pb-[18px]">
            <section class="bg-transparent flex min-h-[720px]">
                <aside class="w-[216px] shrink-0 border-r border-black/10 pt-[20px] px-[10px]" aria-label="Success criteria filters">
                    <div class="w-full border-l-[4px] border-black pl-[18px]">
                        <div class="w-full h-[40px] bg-[#e8e8e8] rounded-[2px] flex items-center px-[8px] gap-[10px]">
                            <button type="button" class="min-w-[31px] h-[29px] rounded-[4px] bg-[#318a4e] text-white text-[10px] leading-[12px] font-['Work_Sans-Regular','Arial',sans-serif] px-[6px]">
                                All
                            </button>

                            <div class="min-w-0">
                                <p class="m-0 text-[12px] leading-[14px] font-['Work_Sans-Regular','Arial',sans-serif] text-black">All Success Criteria</p>
                                <p class="m-0 text-[10px] leading-[12px] font-['Work_Sans-Regular','Arial',sans-serif] text-black/40">15 Success Criteria</p>
                            </div>
                        </div>
                    </div>

                    <hr class="border-0 h-px bg-black/10 mt-[22px] mx-[8px]" />

                    <ul class="mt-[12px] px-[28px] space-y-[10px]" aria-label="Principles">
                        <li>
                            <button type="button" class="w-full flex items-center gap-[10px] text-left">
                                <span class="w-[28px] h-[28px] rounded-[4px] bg-[#ff476b] text-black text-[10px] leading-[28px] text-center font-['Work_Sans-Regular','Arial',sans-serif] shrink-0">P1</span>
                                <span class="min-w-0">
                                    <span class="block text-[12px] leading-[14px] font-['Work_Sans-Regular','Arial',sans-serif]">Transparency</span>
                                    <span class="block text-[10px] leading-[12px] text-black/40 font-['Work_Sans-Regular','Arial',sans-serif]">3 Success Criteria</span>
                                </span>
                            </button>
                        </li>

                        <li>
                            <button type="button" class="w-full flex items-center gap-[10px] text-left">
                                <span class="w-[28px] h-[28px] rounded-[4px] bg-[#f06cb2] text-black text-[10px] leading-[28px] text-center font-['Work_Sans-Regular','Arial',sans-serif] shrink-0">P2</span>
                                <span class="min-w-0">
                                    <span class="block text-[12px] leading-[14px] font-['Work_Sans-Regular','Arial',sans-serif]">Fairness</span>
                                    <span class="block text-[10px] leading-[12px] text-black/40 font-['Work_Sans-Regular','Arial',sans-serif]">3 Success Criteria</span>
                                </span>
                            </button>
                        </li>

                        <li>
                            <button type="button" class="w-full flex items-center gap-[10px] text-left">
                                <span class="w-[28px] h-[28px] rounded-[4px] bg-[#a966d6] text-black text-[10px] leading-[28px] text-center font-['Work_Sans-Regular','Arial',sans-serif] shrink-0">P3</span>
                                <span class="min-w-0">
                                    <span class="block text-[12px] leading-[14px] font-['Work_Sans-Regular','Arial',sans-serif]">Automation Level</span>
                                    <span class="block text-[10px] leading-[12px] text-black/40 font-['Work_Sans-Regular','Arial',sans-serif]">3 Success Criteria</span>
                                </span>
                            </button>
                        </li>

                        <li>
                            <button type="button" class="w-full flex items-center gap-[10px] text-left">
                                <span class="w-[28px] h-[28px] rounded-[4px] bg-[#68aee1] text-black text-[10px] leading-[28px] text-center font-['Work_Sans-Regular','Arial',sans-serif] shrink-0">P4</span>
                                <span class="min-w-0">
                                    <span class="block text-[12px] leading-[14px] font-['Work_Sans-Regular','Arial',sans-serif]">Protection</span>
                                    <span class="block text-[10px] leading-[12px] text-black/40 font-['Work_Sans-Regular','Arial',sans-serif]">3 Success Criteria</span>
                                </span>
                            </button>
                        </li>
                    </ul>

                    <hr class="border-0 h-px bg-black/10 mt-[14px] mx-[8px]" />

                    <ul class="mt-[12px] px-[28px] space-y-[8px]" aria-label="Guidelines">
                        @foreach ([['G1', 'Guideline 1', '3'], ['G2', 'Guideline 2', '2'], ['G3', 'Guideline 3', '3'], ['G4', 'Guideline 4', '2'], ['G5', 'Guideline 5', '5']] as [$code, $label, $count])
                            <li>
                                <button type="button" class="w-full flex items-center gap-[10px] text-left">
                                    <span class="w-[28px] h-[28px] rounded-[4px] border border-black/70 bg-transparent text-black text-[10px] leading-[28px] text-center font-['Work_Sans-Regular','Arial',sans-serif] shrink-0">{{ $code }}</span>
                                    <span class="min-w-0">
                                        <span class="block text-[12px] leading-[14px] font-['Work_Sans-Regular','Arial',sans-serif]">{{ $label }}</span>
                                        <span class="block text-[10px] leading-[12px] text-black/40 font-['Work_Sans-Regular','Arial',sans-serif]">{{ $count }} Success Criteria</span>
                                    </span>
                                </button>
                            </li>
                        @endforeach
                    </ul>
                </aside>

                <section class="flex-1 px-[28px] pt-[14px] pr-[22px]" aria-labelledby="page-description">
                    <div class="flex gap-[24px]">
                        <div class="flex-1 max-w-[600px]">
                            <p id="page-description" class="m-0 text-[18px] leading-[20px] font-['Roboto_Slab-Regular','Georgia',serif] text-black">
                                Description of success criteria. Description of success criteria. Description of success criteria. Description of success criteria. Description of success criteria. Description of success criteria.
                            </p>

                            <div class="mt-[34px] space-y-[16px]">
    @foreach ([
        ['SC 1', ['P1', 'P2'], 'G1'],
        ['SC 2', ['P1', 'P3'], 'G2'],
        ['SC 3', ['P1', 'P3', 'P4'], 'G3'],
        ['SC 4', ['P1', 'P4'], 'G4'],
        ['SC 5', ['P2', 'P3'], 'G5'],
        ['SC 6', ['P2', 'P4'], 'G6'],
    ] as [$sc, $principles, $guideline])
        <article class="success-criterion w-full bg-[#efefef] rounded-[2px] overflow-hidden">
            <div class="h-[38px] flex items-center pl-0 pr-[16px]">
                <div class="w-[58px] h-[38px] bg-[#69a978] border border-[#4f9460] rounded-[2px] flex items-center justify-center text-[12px] leading-[14px] font-['Roboto_Slab-Regular','Georgia',serif] text-black shrink-0">
                    {{ $sc }}
                </div>

                <div class="w-[264px] h-[13px] bg-[#d5d5d5] rounded-[999px] ml-[22px] shrink-0"></div>

                <div class="ml-auto flex items-center gap-[18px]">
                    <div class="flex items-center gap-[18px]">
                        @foreach ($principles as $principle)
                            @php
                                $colors = [
                                    'P1' => 'bg-[#ff476b]',
                                    'P2' => 'bg-[#f06cb2]',
                                    'P3' => 'bg-[#a966d6]',
                                    'P4' => 'bg-[#68aee1]',
                                ];
                            @endphp

                            <span class="w-[25px] h-[25px] rounded-[4px] {{ $colors[$principle] }} text-black text-[10px] leading-[25px] text-center font-['Work_Sans-Regular','Arial',sans-serif]">
                                {{ $principle }}
                            </span>
                        @endforeach

                        <span class="w-[25px] h-[25px] rounded-[4px] border border-black/70 bg-transparent text-black text-[10px] leading-[23px] text-center font-['Work_Sans-Regular','Arial',sans-serif]">
                            {{ $guideline }}
                        </span>
                    </div>

                    <button type="button"
                            class="success-toggle w-[18px] h-[18px] flex items-center justify-center text-black/60"
                            aria-expanded="false"
                            aria-label="Apri {{ $sc }}">
                        <svg width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg" class="transition-transform duration-200">
                            <path d="M1 1L5 6L9 1" stroke="#6B6B6B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="success-detail hidden border-t border-black/10 bg-white px-[78px] py-[14px]">
                <div class="min-h-[72px] rounded-[4px] border border-black/10 bg-[#fafafa] p-[12px] text-[12px] leading-[16px] text-[#303030] font-['Work_Sans-Regular','Arial',sans-serif]">
                    {{-- Scrivi qui la descrizione di {{ $sc }} --}}
                </div>
            </div>
        </article>
    @endforeach
</div>
<script>
    document.querySelectorAll('.success-toggle').forEach((button) => {
        button.addEventListener('click', () => {
            const article = button.closest('.success-criterion');
            const detail = article.querySelector('.success-detail');
            const icon = button.querySelector('svg');
            const isOpen = !detail.classList.contains('hidden');

            detail.classList.toggle('hidden', isOpen);
            button.setAttribute('aria-expanded', String(!isOpen));
            icon.classList.toggle('rotate-180', !isOpen);
        });
    });
</script>
</body>
</html>