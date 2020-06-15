@props(['route'])

@php
    $classes = Request::routeIs($route) ? 'text-blue-500 underline' : 'hover:text-blue-500';
@endphp

<a href="{{ route($route) }}" {{ $attributes->merge(['class' => "px-6 hover:underline {$classes}"]) }}>
    {{ $slot }}
</a>
