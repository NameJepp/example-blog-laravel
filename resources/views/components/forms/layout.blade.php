@props(['name' => false, 'method' => 'POST', 'action' => '#'])
<main {{ $attributes(['class' => 'bg-gray-100 border border-gray-200 rounded-xl']) }}>
    @if ($name)
        <h1 class="text-center font-bold text-xl">{{ $name }}</h1>
    @endif

    <form method="{{ $method }}" action="{{ $action }}" class="mt-10">
        @csrf
        {{ $slot }}
    </form>
</main>
