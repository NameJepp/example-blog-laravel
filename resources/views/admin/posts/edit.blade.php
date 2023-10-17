<x-settings heading="Edit Post: {{ $post->title }}">
    <x-forms.layout class="max-w-2xl mx-auto pt-3 mt-10 px-6" action="/admin/posts/{{ $post->id }}"
        enctype="multipart/form-data">
        @method('PATCH')
        <x-forms.field name="title" keepOld="false" :value="old('title', $post->title)" />

        <x-forms.field name="slug" keepOld="false" :value="old('slug', $post->slug)" />
        <div class="flex mt-6">
            <div class="flex-1">
                <x-forms.field styling="border border-gray-200 bg-white " name="thumbnail" type="file"
                    keepOld="false" :value="old('thumbnail', $post->thumbnail)" required='false' />
            </div>

            <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="rounded-xl ml-3" width="100">
        </div>

        <x-forms.textarea name="excerpt" title="excerpt" keepOld="false">{{ $post->excerpt }}</x-forms.textarea>

        <x-forms.textarea name="body" title="body" rows="10"
            keepOld="false">{{ $post->body }}</x-forms.textarea>

        <x-forms.category-dropdown :postId="$post->category->id" />

        <div class="pt-4">
            <x-button class="rounded-full px-6">Update</x-button>
        </div>
    </x-forms.layout>
</x-settings>
