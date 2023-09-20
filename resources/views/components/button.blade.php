@props(['type' => 'submit', 'color' => 'blue'])
@php
    $classes = 'py-2 px-4 rounded border border-gray-200';
    switch ($color) {
        case 'blue':
            $classes .= ' bg-blue-400 text-white hover:bg-blue-500';
            break;
        case 'red':
            $classes .= ' bg-red-400 text-white hover:bg-red-500';
            break;
        case 'green':
            $classes .= ' bg-green-400 text-white hover:bg-green-500';
            break;
        case 'gray':
            $classes .= ' bg-gray-400 text-white hover:bg-gray-500';
            break;
        case 'yellow':
            $classes .= ' bg-yellow-300 text-black hover:bg-yellow-400';
            break;
        case 'black':
            $classes .= ' bg-black-400 text-white hover:bg-black-500';
            break;
        case 'orange':
            $classes .= ' bg-yellow-500 text-white hover:bg-yellow-600';
            break;
        case 'white':
            $classes .= ' bg-white text-black hover:bg-gray-200';
            break;
        default:
            $classes .= ' bg-blue-400 text-white hover:bg-blue-500';
            break;
    }
@endphp


<div class="mb-6">
    <button type="{{ $type }}" {{ $attributes(['class' => $classes]) }}>
        {{ $slot }}
    </button>
</div>
