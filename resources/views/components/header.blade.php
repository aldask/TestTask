<header class="flex justify-between items-center px-3 py-4 lg:px-39 w-full">
    <a href="#" @click.prevent="window.scrollTo({top: 0, behavior: 'smooth'})"
        class="cursor-pointer w-[92px] bg-green h-[25px] lg:w-[146px] lg:h-[40px] lg:shrink-0">
        <img src="{{ asset('svgs/logo.svg') }}" alt="logo" />
    </a>
    <nav>
        <a href="#"
            class="cursor-pointer flex items-center justify-center gap-[10px] px-5 py-2 lg:py-3 rounded-full bg-[#3A5BA9] text-sm font-semibold text-white leading-[normal] shrink-0 hover:bg-[#263d75] transition-colors duration-200 ease-in-out">
            Claim my plan
        </a>
    </nav>
</header>