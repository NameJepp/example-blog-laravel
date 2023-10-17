<x-settings heading="Publish New Post">
    <x-forms.layout class="max-w-2xl mx-auto pt-3 mt-10 px-6" action="/admin/posts" enctype="multipart/form-data">

        <x-forms.field name="title" />

        <x-forms.field name="slug" />

        <x-forms.field styling="border border-gray-200 bg-white " name="thumbnail" type="file" />

        <x-forms.textarea name="excerpt" title="excerpt" />

        <x-forms.textarea name="body" title="body" rows="10" />

        <x-forms.category-dropdown />

        <div class="pt-4">
            <x-button class="rounded-full px-6">Publish</x-button>
        </div>
    </x-forms.layout>
</x-settings>
