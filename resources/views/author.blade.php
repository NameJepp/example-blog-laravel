<x-layout>
    <h1>{{ $author->name }}s posts</h1>
    <p><a href="/authors">Go to all authors</a></p>
    @foreach ($posts as $post)
        <article>
            <h1>
                <a href="/posts/{{ $post->slug }}">
                    {!! $post->title !!}
                </a>
            </h1>
            <p>
                <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>

            <div>
                <p>{{ $post->excerpt }}</p>
            </div>
        </article>
    @endforeach
    <a href="/">Go back</a>
</x-layout>
