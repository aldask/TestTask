<div class="flex flex-col items-center w-full gap-[20px] lg:gap-[40px] mb-[48px] lg:mb-[64px]">
    <h1 class="text-center font-medium text-[22px] lg:text-[28px] leading-[32px] lg:leading-[34px]">
        How does it work?
    </h1>
    <div class="flex flex-col w-full gap-[10px] lg:gap-[12px]">
        @foreach ($steps as $step)
            <div
                class="flex flex-row items-center lg:items-start self-stretch gap-[16px] p-[16px] lg:px-[16px] lg:py-[12px] w-full h-[65px] shrink-0 border-0 rounded-[10px] bg-[#F3FFFC] shadow-md">
                <div class="flex relative w-[40px] h-[40px] shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                        <circle cx="20" cy="20" r="20" fill="#1FA37E" />
                    </svg>
                    <span
                        class="absolute inset-0 flex items-center justify-center text-white text-[28px] font-medium leading-[16px]">
                        {{ $step['number'] }}
                    </span>
                </div>

                <p class="text-[14px] leading-[18px] text-black">
                    {{ $step['text'] }}
                </p>
            </div>
        @endforeach
    </div>
</div>