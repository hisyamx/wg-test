@props(['active'])

@php
$classes = ($active ?? false)
    ? 'block px-4 py-2 mt-2 md:mt-0 text-md font-bold leading-6 text-gray-900'
    : 'block px-4 py-2 mt-2 md:mt-0 text-md font-bold leading-6 text-gray-500 opacity-95 hover:text-gray-900';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
