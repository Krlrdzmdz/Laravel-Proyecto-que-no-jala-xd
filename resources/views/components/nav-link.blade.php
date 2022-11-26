@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-rose-800 text-sm font-medium leading-5 text-rose-800 focus:outline-none focus:border-rose-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-yellow-900 hover:text-yellow-700 hover:border-yellow-700 focus:outline-none focus:text-yellos-700 focus:border-yellow-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
