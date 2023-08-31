<x-layout>
    <article>
        <h1>{!! $category->name !!}</h1>
        <p><a href="/categories">Go to all categories</a></p>
        @foreach ($posts as $post)
            <article>
                <h1>
                    <a href="/posts/{{ $post->slug }}">
                        {!! $post->title !!}
                    </a>
                </h1>

                <div>
                    <p>{{ $post->excerpt }}</p>
                </div>
            </article>
        @endforeach
        <a href="/">Go back</a>
    </article>
</x-layout>
