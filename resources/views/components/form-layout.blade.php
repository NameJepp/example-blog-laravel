@props(['name', 'method' => 'POST', 'action' => '/'])
<section class="px-6 py-8">
    <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 border border-gray-200 rounded-xl">
        <h1 class="text-center font-bold text-xl">{{ $name }}</h1>

        <form method="{{ $method }}" action="{{ $action }}" class="mt-10">
            @csrf
            {{ $slot }}

            <x-form-submit-button>{{ trim($name, '!') }}</x-form-submit-button>

            <x-form-errors />
        </form>
    </main>
</section>
