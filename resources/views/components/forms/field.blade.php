@props(['name', 'type' => 'text', 'keepOld' => true, 'styling' => '', 'required' => true])

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

    <input class="{{ $styling }} border border-gray-200 p-2 w-full rounded" name="{{ $name }}"
        id="{{ $name }}" @if ($required == 'true') required @endif
        {{ $attributes(['value' => $keepOld]) }}
        @if ($type === 'password') :type="show ? 'text' : 'password'"
        @else type="{{ $type }}" @endif>

    <x-forms.error name="{{ $name }}" />
</div>
