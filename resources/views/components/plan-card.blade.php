<div x-data="{
        selectedPlan: {{ collect($products)->firstWhere('default', true)['id'] }},
    }" class="flex flex-col">

    <h1 class="text-center font-normal text-[22px] lg:text-[28px] mb-[20px]">
        Select your plan
    </h1>

    <div class="flex flex-col gap-[16px]">
        @foreach ($products as $product)
            <label @click="selectedPlan = {{ $product['id'] }}" :class="selectedPlan === {{ $product['id'] }} 
                        ? 'border-2 border-[#1FA37E] bg-white rounded-[16px]' 
                        : 'border border-[#ADB1B9] bg-white rounded-[16px]'"
                class="flex items-center justify-between gap-[8px] px-[15px] py-4 cursor-pointer transition-all duration-300">

                <input type="radio" name="plan" value="{{ $product['id'] }}" x-model="selectedPlan"
                    class="w-6 h-6 accent-[#1FA37E] cursor-pointer" @click.stop />

                <div class="flex flex-col gap-[8px]" x-data="{ 
                        months: (() => {
                            const match = '{{ $product['slug'] }}'.match(/(\d+)-month/);
                            return match ? parseInt(match[1]) : null;
                        })()
                    }">
                    <p class="font-semibold text-base leading-[20px] capitalize">
                        {{ $product['slug'] }}
                    </p>
                    <div class="flex items-center gap-2">
                        <p class="line-through text-[#F33746] text-[12px] font-medium leading-[12px]">
                            €{{ number_format($product['pricing']['original_price'], 2) }}
                        </p>
                        <p class="text-[12px] font-medium leading-[12px]">
                            €{{ number_format($product['pricing']['price'], 2) }}
                        </p>
                    </div>
                    <template x-if="months">
                        <p class="text-[#949494] text-[10px] font-medium leading-[12px]">
                            Billed every <span x-text="months"></span> <span
                                x-text="months > 1 ? 'months' : 'month'"></span>
                        </p>
                    </template>
                </div>

                <div class="w-px h-[82px] bg-[#E1E2EC]"></div>

                <div class="flex flex-col justify-center items-center text-center">
                    <p class="text-[32px] font-semibold leading-[40px] text-[#2E425F]">
                        €{{ number_format($product['pricing']['price'], 2) }}
                    </p>
                    <p class="text-xs font-medium leading-[18px] text-[#949494]">
                        per month
                    </p>
                </div>
            </label>
        @endforeach

        <button
            class="flex items-center justify-center gap-4 px-5 py-[17px] rounded-[10px] bg-[#3A5BA9] text-white font-semibold w-full">
            Order now
        </button>
    </div>
</div>