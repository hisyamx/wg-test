@props(['active'])

@php
$classes = ($active ?? false)
    ? 'px-4 py-2 mt-2 md:mt-0 text-md font-bold text-gray-900'
    : 'px-4 py-2 mt-2 md:mt-0 text-md font-bold text-gray-500';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
