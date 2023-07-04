@props(['active' => false])

@php
    $classes = 'block text-left px-3 text-sm leading-6 hover:bg-green-700 focus:bg-green-700 hover:text-white focus:text-white';

    if ($active) $classes .= ' bg-green-700 text-white';
@endphp

<a {{ $attributes(['class' => $classes]) }}
>{{ $slot }}</a>
