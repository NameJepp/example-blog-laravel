@props(['name', 'placeholder' => '', 'title' => false, 'rows' => 5, 'keepOld' => true])

@php
    $keepOld = $keepOld == 'true' ? old($name) : null;
@endphp

<div class="mt-4">

    @if ($title)
        <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="{{ $name }}">
            {{ ucfirst($title) }}

        </label>
    @endif

    <label for="{{ $name }}" class="sr-only">{{ $name }}</label>
    <textarea name="{{ $name }}" id="{{ $name }}" {{ $attributes }}
        class="w-full text-sm p-2 focus:outline-none border border-gray-200 rounded-xl focus:ring"
        rows="{{ $rows }}}}" placeholder="{{ $placeholder }}" required>{{ $slot ?? $keepOld }}</textarea>

    <x-forms.error name="{{ $name }}" />
</div>
