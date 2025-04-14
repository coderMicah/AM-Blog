<header>
    <nav class="flex justify-between items-center py-8">
       <div class="flex items-center space-x-10">
        <a href="/" class="text-4xl font-garamond italic font-bold">AM Blog</a>

        <div class="hidden space-x-6 lg:block">
            <x-nav-link href="/posts" :active="request()->is('posts')">Posts</x-nav-link>
            <x-nav-link href="/tags" :active="request()->is('tags')">Tags</x-nav-link>
            <x-nav-link href="/authors" :active="request()->is('authors')">Authors</x-nav-link>
        </div>
       </div>

        <div class="block lg:hidden">
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                  </svg>                  
            </button>
        </div>
        <div class="hidden space-x-6 lg:block">
            <button class=" align-middle">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>

            </button>
            <a href="/signin" class="text-lg font-semibold hover:underline">Sign In</a>
            <a href="/sign-up"
                class="text-lg font-semibold cursor-pointer py-2.5 px-8 bg-primary rounded-3xl transition-colors hover:bg-primary/90">Sign
                Up</a>
        </div>
    </nav>
</header>
