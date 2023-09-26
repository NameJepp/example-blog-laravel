@props(['name', 'type' => 'text', 'keepOld' => true])

@php
    $keepOld = $keepOld == 'true' ? old($name) : null;
@endphp

<div class="mb-6" x-data="{ show: false }">
    <label class="block mb-2 uppercase font-bold text-xs text-gray-700 flex justify-between" for="{{ $name }}">
        {{ ucfirst($name) }}
        @if ($type === 'password')
            <div>
                <input type="checkbox" @click="show=! show">
                show
            </div>
        @endif
    </label>

    <input class="border border-gray-400 p-2 w-full" name="{{ $name }}" id="{{ $name }}"
        value="{{ $keepOld }}" required
        @if ($type === 'password') :type="show ? 'text' : 'password'"
        @else type="{{ $type }}" @endif>

    @error($name)
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
    @enderror
</div>
