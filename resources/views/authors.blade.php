<x-layout>
    <h1>All Authors</h1>
    @foreach ($users as $user)
        <h1>
            <a href="/authors/{{ $user->username }}">
                {{ $user->name }}
            </a>
        </h1>
    @endforeach
    <a href="/">Go back</a>
</x-layout>
