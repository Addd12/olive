@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-3 pt-1 text-md font-medium text-black-eerie dark:text-gray-100 focus:outline-none transition duration-150 ease-in-out'
            : 'inline-flex items-center px-3 pt-1 text-md font-medium text-black-eerie dark:text-gray-400 hover:text-black dark:hover:text-gray-300 focus:outline-none focus:text-black-eerie dark:focus:text-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
