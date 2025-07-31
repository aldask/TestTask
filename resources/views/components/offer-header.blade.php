<div x-data="countdown()" x-init="start()"
    class="bg-[#F33746] h-[42px] lg:h-[40px] w-full flex items-center justify-center text-white gap-[10px] shrink-0">
    <p class="font-bold text-sm lg:text-base leading-[24px] tracking-[-0.028px] lg:tracking-[-0.032px] text-center">
        The offer expires in:
    </p>
    <p x-text="time"
        class="font-normal text-sm lg:text-base leading-[24px] tracking-[-0.028px] lg:tracking-[-0.032px] text-center">
    </p>
</div>