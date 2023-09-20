@props(['name', 'type' => 'text', 'keepOld' => true])

@php
    $keepOld = $keepOld == 'true' ? old($name) : null;
@endphp

<div class="mb-6">
    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="{{ $name }}">
        {{ ucfirst($name) }}
    </label>

    <input class="border border-gray-400 p-2 w-full" type="{{ $type }}" name="{{ $name }}"
        id="{{ $name }}" value="{{ $keepOld }}" required>

    @error($name)
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
    @enderror
</div>
