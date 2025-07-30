<div x-data="countdown()" x-init="start()"
    class="bg-[#F33746] h-11 w-full flex items-center justify-center text-white gap-[10px] leading-[24px] md:[letter-spacing:-0.032px] text-sm md:text-base"
    style="letter-spacing: -0.028px;">
    <p class="font-bold">The offer expires in:</p>
    <p x-text="time" class="font-normal"></p>
</div>