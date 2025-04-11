@props([
    'featured' => false,
    'post'
])
<div  class="relative md:last:hidden lg:last:block group hover:cursor-pointer hover:-translate-y-2 transition-transform duration-300 block">
    <a href="/posts/{{$post->slug}}"
       >
        <article class="relative h-[412px] md:h-96 rounded-3xl overflow-hidden group">
            <img src="{{ $post->posterImgUrl }}" alt="featured"
                class="rounded-3xl opacity-50 hover:opacity-70 transition-opacity duration-300 w-full h-full object-cover">
            <div class="absolute bottom-0 p-6">
                @if ($featured)
                <small class="my-2.5 text-xs font-bold uppercase tracking-widest">Featured</small>
                @endif
                <h2 class="my-2.5 text-xl/snug font-semibold">{{$post->title}}</h2>
                <a href="/authors/{{$post->author->slug}}" class="my-2.5 text-xs/snug hover:underline block">{{$post->author->name}}</a>

               @if (!$featured)
               <div class="flex flex-wrap gap-x-2 gap-y-1.5">

                   @foreach ($post->tags as $tag)   
                   <a href="/tags/{{$tag->slug}}" class=" rounded-3xl text-xs/relaxed px-3 py-0.5 pb-1 border border-white text-white hover:bg-white hover:text-black transition-colors duration-150">{{$tag->name}}</a>
                   @endforeach
               </div>
               @endif
            </div>
        </article>
    </a>
</div>
