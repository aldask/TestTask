<div class="flex flex-col items-center w-full mb-12 lg:mb-16">
    <h2 class="text-[22px] lg:text-[28px] lg:leading-[34px] mb-5 lg:mb-10">
        What our users say
    </h2>

    <div class="flex flex-col md:flex-row md:flex-wrap w-full justify-center gap-4">
        @foreach ($reviews as $review)
            <div
                class="flex flex-col p-4 gap-3 self-stretch items-start rounded-[10px] bg-white lg:w-[300px] gap-2.5 lg:rounded-[8px] lg:shadow-[0_1px_5px_0_rgba(0,0,0,0.2)] max-h-min">
                <div class="flex gap-2 lg:gap-3 items-center">
                    <div class="w-[57px] h-[55px] lg:w-[79px] lg:h-[77px] rounded-full overflow-hidden shrink-0">
                        <img src="{{ $review['img'] }}" alt="{{ $review['alt'] }}" class="w-full h-full object-cover" />
                    </div>
                    <div class="flex flex-col gap-1.5 lg:gap-2">
                        <h3 class="text-sm lg:text-lg font-semibold leading-4 self-stretch">
                            {{ $review['name'] }}, {{ $review['age'] }}
                        </h3>
                        <p class="self-strech text-[10px] leading-[15px] text-[#1D1E20]">
                            {{ $review['handle'] }}
                        </p>
                    </div>
                </div>

                <p class="text-xs lg:text-sm text-[#1D1E20] leading-5">
                    {{ $review['description'] }}
                </p>
            </div>
        @endforeach
    </div>
</div>