<x-layout>
    <x-slot name="title">{{ $tag->name }} | Profile</x-slot>

    <section>
        <div class="flex flex-col items-center space-y-8 max-w-96 md:max-w-2xl mx-auto pb-20">
            <img src={{ $tag->name }} alt="{{ $tag->name . "'s" . 'Image' }}"
                class="w-52 h-52 object-cover object-center rounded-full shadow-lg" />
            <h1 class="font-garamond text-7xl text-center line-clamp-1 ">
                {{ $tag->name }}
            </h1>
            <p class="text-4xl font-garamond italic">{{ $tag->posts->count() }} posts</p>
            <p class="text-2xl/relaxed text-center text-white">{{ $tag->description }}</p>
        </div>
    </section>

    <section>

        <x-section-title title="Posts for" italic="{{$tag->name}}" class="md:w-full lg:w-full py-10 border-b border-border" /> 
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 py-20">
            @foreach ($tag->posts->take(8) as $post)
                <x-card :post="$post" />
            @endforeach
        </div>
    </section>
</x-layout>
