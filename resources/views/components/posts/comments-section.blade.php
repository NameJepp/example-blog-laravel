@props(['post'])
<section class="col-span-8 col-start-5 my-5 space-y-6">
    <x-forms.layout class="mx-auto mt-10 px-6" action="/posts/{{ $post->slug }}/comment">
        @auth
            <header class="flex items-center">
                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="40" height="40"
                    class="rounded-full">

                <h2 class="ml-4">Want to participate?</h2>
            </header>

            <x-forms.text-area name="body" />
            <x-forms.errors />

            <footer class="flex justify-end pt-4">
                <x-button class="rounded-full">Leave Comment</x-button>
            </footer>
        @else
            <p class="font-semibold text-center pb-8">
                <a href="/register" class="hover:underline">Register</a> or <a href="/login" class="hover:underline">Log
                    in</a> to leave a comment.
            </p>
        @endauth
    </x-forms.layout>

    @if ($post->comments->count())
        @foreach ($post->comments as $comment)
            <x-posts.comment :comment="$comment" />
        @endforeach
    @endif
</section>
