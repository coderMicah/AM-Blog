<x-layout>
    <x-slot name="title">AM Blog | Home</x-slot>

    <section>
        <x-section-title title="Meet our" italic="authors" class="text-center sm:w-full md:w-full lg:w-full" />

        <div class="grid grid-cols-1 md:grid-cols-3 place-items-center gap-y-20 gap-x-8 py-20">
            @foreach ($topAuthors as $author)
                <div class="flex flex-col items-center space-y-4 max-w-96">
                    <img src={{ $author->userImg }} alt="{{ $author->name . "'s" . 'Image' }}"
                        class="w-52 h-52 object-cover object-center rounded-full shadow-lg" />
                    <h2 class="font-garamond text-5xl text-center line-clamp-1 ">
                        <a href="/author/{{ $author->slug }}" class="hover:text-primary">{{ $author->name }}</a>
                    </h2>
                    <p class="text-3xl font-garamond italic">{{ $author->posts->count() }} posts</p>
                    <p class="text-lg text-center text-gray-500 line-clamp-3">{{ $author->bio }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <section class="py-20">
        <h2 class="text-center text-5xl font-garamond italic">See Also</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 place-items-center gap-y-20 gap-x-8 py-20 max-w-4xl mx-auto">
            @foreach ($authors as $author)
                <div class="group flex flex-col items-center space-y-4 max-w-96">
                    <img src={{ $author->userImg }} alt="{{ $author->name . "'s" . 'Image' }}"
                        class="w-36 h-36 object-cover object-center rounded-full shadow-lg" />
                    <p class="text-lg font-semibold text-center line-clamp-1 ">
                        <a href="/author/{{ $author->slug }}" class="group-hover:text-primary">{{ $author->name }}</a>
                    </p>
                </div>
            @endforeach
        </div>
    </section>
</x-layout>
