<div class="flex flex-col items-center justify-center w-full mb-[47px] lg:mb-[67px]">
    <h1 class="text-center font-normal text-[22px] lg:text-[28px] mb-[20px]">
        How does it work?
    </h1>
    <div class="flex flex-col w-full items-center gap-[10px]">
        @foreach ($steps as $step)
            <div
                class="flex flex-row items-center justify-start w-[333px] h-[65px] shrink-0 rounded-[10px] bg-[#F3FFFC] px-4 gap-[16px] shadow-md">
                <div class="flex relative w-[40px] h-[40px] shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                        <circle cx="20" cy="20" r="20" fill="#1FA37E" />
                    </svg>
                    <span
                        class="absolute inset-0 flex items-center justify-center text-white text-[28px] font-medium leading-[16px]">
                        {{ $step['number'] }}
                    </span>
                </div>

                <p class="text-sm text-[#1B1B1F]">
                    {{ $step['text'] }}
                </p>
            </div>
        @endforeach
    </div>
</div>