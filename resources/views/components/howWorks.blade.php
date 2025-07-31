<div class="flex flex-col items-center w-full mb-12 lg:mb-16">
    <h2 class="lg:text-[28px] lg:leading-[34px] mb-5 lg:mb-10">
        How does it work?
    </h2>
    <div class="flex flex-col w-full gap-2.5 lg:gap-3">
        @foreach ($steps as $step)
            <div
                class="flex flex-row items-center self-stretch gap-4 p-4 lg:px-4 lg:py-3 w-full h-[65px] shrink-0 border-0 rounded-[10px] bg-[#F3FFFC] shadow-md">
                <div class="flex relative w-10 h-[40px] shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                        <circle cx="20" cy="20" r="20" fill="#1FA37E" />
                    </svg>
                    <span
                        class="absolute inset-0 flex items-center justify-center text-white text-[28px] font-medium leading-4">
                        {{ $step['number'] }}
                    </span>
                </div>

                <p class="text-sm leading-[18px] text-black">
                    {{ $step['text'] }}
                </p>
            </div>
        @endforeach
    </div>
</div>