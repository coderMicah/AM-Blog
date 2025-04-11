@props(['title','italic'])

<h2 {{$attributes->merge(['class' => "w-full sm:w-5/6 md:w-3/4 lg:w-1/2 text-6xl md:text-7xl font-garamond font-normal"])}} > {{$title}} <span class="italic">{{$italic}}</span></h2>