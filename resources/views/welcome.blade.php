<x-layout>
    <x-slot name="title">AM Blog | Home</x-slot>
    <x-hero />

    <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 py-20">
        @foreach ($featuredPosts as $post)
            <x-card :featured="true" :post="$post" />
        @endforeach
    </section>

    <section class="flex justify-between items-center pb-20">
        <x-section-title title="See what we’ve written lately" italic="written lately" />
        <div class=" hidden lg:flex">
            @foreach ($authors as $author)
                {{-- <x-avatar :avatar="true" :name="{{$author->name}}" /> --}}
                <x-avatar name="{{$author->name}}"/>
            @endforeach
        </div>
    </section>

    <section>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 pb-20">
            @foreach ($posts->take(8) as $post)
                <x-card :post="$post" />
            @endforeach
        </div>
    </section>

    <section>
        <div class="flex justify-between items-center">
            <x-section-title title="In case you" italic="missed it" />
            <a href="#" aria-label="Link to the collection"
                class="hover:translate-x-2 transition-all duration-150">
                <svg role="img" viewBox="0 0 24 24" stroke="currentColor" class="size-14"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M17.185 6.08c1.485 1.585 2.733 2.8 3.813 3.643 1.045.843 2.057 1.45 3.002 1.855v.743c-1.08.506-2.16 1.18-3.171 2.024-1.012.81-2.227 1.99-3.644 3.576h-1.282c1.046-2.193 2.26-4.217 3.374-5.432H.014v-.978h19.263a31.274 31.274 0 01-1.855-2.699c-.338-.506-.844-1.417-1.485-2.733h1.248z">
                    </path>
                </svg>
            </a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 py-20">
            @foreach ($posts->take(4) as $post)
                <x-card :post="$post" />
            @endforeach
        </div>
    </section>

    <section class="pb-10 border-b border-border">
        <x-section-title title="Subscribe to" italic="new posts" />
    </section>

</x-layout>
