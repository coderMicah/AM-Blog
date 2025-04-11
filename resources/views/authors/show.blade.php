<x-layout>
    <x-slot name="title">{{ $author->name }} | Profile</x-slot>

    <section>
        <div class="flex flex-col items-center space-y-8 max-w-96 md:max-w-2xl mx-auto pb-20">
            <img src={{ $author->userImg }} alt="{{ $author->name . "'s" . 'Image' }}"
                class="w-52 h-52 object-cover object-center rounded-full shadow-lg" />
            <h1 class="font-garamond text-7xl text-center line-clamp-1 ">
                {{ $author->name }}
            </h1>
            <p class="text-4xl font-garamond italic">{{ $author->posts->count() }} posts</p>
            <p class="text-2xl/relaxed text-center text-white">{{ $author->bio }}</p>
        </div>
    </section>

    <section>

        <x-section-title title="Posts by" :italic="$author->name" class="md:w-full lg:w-full py-10 border-b border-border" />
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 py-20">
            @foreach ($posts->take(8) as $post)
                <x-card :post="$post" />
            @endforeach
        </div>
    </section>
</x-layout>
