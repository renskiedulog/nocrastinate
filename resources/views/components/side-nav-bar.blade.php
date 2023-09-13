<!-- resources/views/components/sidebar-link.blade.php -->

@props(['active'])

@php
$defaultClasses = 'group flex items-center px-3 py-2 text-sm leading-5 font-medium rounded-md transition duration-150 ease-in-out';

$activeClasses = ($active ?? false)
    ? 'text-gray-900 bg-indigo-100 hover:bg-indigo-200 focus:bg-indigo-200 focus:text-gray-900'
    : 'text-gray-600 hover:text-gray-900 hover:bg-gray-50 focus:bg-gray-100';

$classes = $defaultClasses . ' ' . $activeClasses;
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>