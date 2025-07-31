<div class="flex flex-col items-center w-full mb-[47px] lg:mb-[67px]">
    <h1 class="text-center font-normal text-[22px] lg:text-[28px] mb-[20px]">
        What our users say
    </h1>

    <div class="flex flex-col md:flex-row md:flex-wrap w-full justify-center gap-[16px]">
        @foreach ($reviews as $review)
            <div
                class="flex flex-col p-[16px] gap-[12px] self-stretch items-start rounded-[10px] bg-white lg:w-[300px] gap-[10px] lg:rounded-[8px] lg:shadow-[0_1px_5px_0_rgba(0,0,0,0.2)] max-h-min">
                <div class="flex gap-[8px] lg:gap-[12px] items-center">
                    <div class="w-[57px] h-[55px] lg:w-[79px] lg:h-[77px] rounded-full overflow-hidden shrink-0">
                        <img src="{{ $review['img'] }}" alt="{{ $review['alt'] }}" class="w-full h-full object-cover" />
                    </div>
                    <div class="flex flex-col gap-[6px] lg:gap-[8px]">
                        <h3 class="text-[14px] lg:text-[18px] font-semibold leading-[16px] self-stretch">
                            {{ $review['name'] }}, {{ $review['age'] }}
                        </h3>
                        <p class="self-strech text-[10px] leading-[15px] text-[#1D1E20]">
                            {{ $review['handle'] }}
                        </p>
                    </div>
                </div>

                <p class="text-[12px] lg:text-[14px] text-[#1D1E20] leading-[20px]">
                    {{ $review['description'] }}
                </p>
            </div>
        @endforeach
    </div>
</div>