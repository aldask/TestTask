<script>
    window.defaultID = @json(collect($products)->firstWhere('default', true)['id']);
    window.products = @json($products);
</script>

<div x-data="planSelector()" class="flex flex-col mb-5 lg:mb-6">
    <h2 class="text-[22px] lg:text-[28px] lg:leading-[34px] mb-5 lg:mb-6">
        Select your plan
    </h2>
    <div class="flex flex-col gap-4">
        @foreach ($products as $product)
            <label @click="notifyPlanChange({{ $product['id'] }})" :class="selectedPlan === {{ $product['id'] }} 
                                            ? 'border-2 border-[#1FA37E] bg-white rounded-[16px]' 
                                            : 'border border-[#ADB1B9] bg-white rounded-[16px]'"
                class="flex items-center justify-between gap-2 px-[15px] py-4 cursor-pointer transition-all duration-300">

                <input type="radio" name="plan" value="{{ $product['id'] }}" x-model="selectedPlan"
                    class="w-6 h-6 accent-[#1FA37E] cursor-pointer" @click.stop />

                <div class="flex flex-col gap-2" x-data="{ 
                                        months: (() => {
                                            const match = '{{ $product['slug'] }}'.match(/(\d+)-month/);
                                            return match ? parseInt(match[1]) : null;
                                        })()
                                    }">
                    <p class="font-semibold text-base leading-5 capitalize">
                        {{ $product['slug'] }}
                    </p>
                    <div class="flex items-center gap-2">
                        <p class="line-through text-[#F33746] text-xs font-medium leading-3">
                            €{{ number_format($product['pricing']['original_price'], 2) }}
                        </p>
                        <p class="text-xs font-medium leading-3">
                            €{{ number_format($product['pricing']['price'], 2) }}
                        </p>
                    </div>
                    <template x-if="months">
                        <p class="text-[#949494] text-[10px] font-medium leading-3">
                            Billed every <span x-text="months"></span> <span
                                x-text="months > 1 ? 'months' : 'month'"></span>
                        </p>
                    </template>
                    @if($product["default"])
                        <div class="flex items-start gap-2.5 text-white">
                            <p class="px-2 py-1 rounded-[14px] bg-[#F33746] text-xs font-semibold leading-4 text-center">
                                Most popular
                            </p>
                        </div>
                    @endif
                </div>

                <div class="w-px h-[82px] bg-[#E1E2EC]"></div>

                <div class="flex flex-col justify-center items-center text-center">
                    <p class="text-[32px] font-semibold leading-10 text-[#2E425F]">
                        €{{ number_format($product['pricing']['price'], 2) }}
                    </p>
                    <p class="text-xs font-medium leading-[18px] text-[#949494]">
                        per month
                    </p>
                </div>
            </label>
        @endforeach

        <button type="submit"
            class="flex items-center justify-center gap-4 px-5 py-[17px] rounded-[10px] bg-[#3A5BA9] text-white font-semibold w-full cursor-pointer hover:bg-[#263d75] transition-colors duration-200 ease-in-out">
            Order now
        </button>
    </div>
</div>