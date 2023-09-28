<x-layout>
    <section>

        <x-forms.layout class="max-w-2xl mx-auto mt-10 px-6" action="/admin/posts/create">

            <x-forms.field name="title" />

            <x-forms.field name="slug" />

            <x-forms.textarea name="excerpt" title="excerpt" />

            <x-forms.textarea name="body" title="body" rows="10" />
            <div class="flex items-center mt-4 gap-4">
                <div class="rounded-full">
                    <x-forms.field styling="border border-gray-200 bg-white rounded-xl" name="thumbnail" type="file" />
                </div>
                <div>
                    <label for="category_id"></label>
                    <select name="category_id" id="category_id"
                        class="bg-white border border-gray-200 rounded-xl p-2 scrollbar-thin">
                        <option value="" disabled selected>Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ ucwords($category->name) }}
                            </option>
                        @endforeach
                    </select>
                </div>

            </div>

            <div class="pt-4">
                <x-button class="rounded-full px-6">Publish</x-button>
            </div>
        </x-forms.layout>
    </section>
</x-layout>
