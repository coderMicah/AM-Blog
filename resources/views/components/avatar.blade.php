@props([
    'avatar' => false,
    'name' => 'John Doe',
    'size' => '70px'
])


@if ($avatar)
    <img 
        src="{{ asset('images/featured.jpg') }}" 
        alt="avatar" 
        class="h-[70px] w-[70px] rounded-full flex items-center justify-center"
    >   
@endif

<span
    class="bg-gray-600 h-[70px] w-[70px] rounded-full flex items-center justify-center text-3xl font-bold -ml-4"
>
    {{ str_pad(getInitials($name),2) }}
</span>
