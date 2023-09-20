@props(['name'])
<div class="mt-4">
    <textarea name="{{ $name }}" id="{{ $name }}"
        class="w-full text-sm p-2 focus:outline-none border border-gray-200 rounded-xl focus:ring" rows="5"
        placeholder="Whats on your mind?" required></textarea>
</div>
