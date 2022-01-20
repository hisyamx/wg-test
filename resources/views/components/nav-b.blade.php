@props(['active'])

@php
$classes = ($active ?? false)
        ? 'block pl-3 pr-4 py-2 border-l-4 rounded-lg border-blue-400 font-xl text-gray-900 bg-blue-50'
        : 'block pl-3 pr-4 py-2 rounded-lg font-xl text-gray-500 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
