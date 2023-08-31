<x-layout>
    <h1>All Categories</h1>
    <p><a href="/categories">Go to all categories</a></p>
    @foreach ($categories as $category)
        <h1>
            <a href="/categories/{{ $category->slug }}">
                {!! $category->name !!}
            </a>
        </h1>
    @endforeach
    <a href="/">Go back</a>
</x-layout>
