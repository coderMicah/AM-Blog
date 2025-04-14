@props(['active' => false])
<a {{ $attributes }}
    class="{{ $active ? 'text-primary' : '' }} text-lg font-semibold hover:underline"
    aria-current="{{ $active ? 'page' : 'false' }}">
    {{ $slot }}
</a>
