<x-layout>
    <section class="px-6 py-8">
        <x-forms.layout name="Register!" action="/register" class="max-w-lg mx-auto mt-10 p-6">

            <x-forms.field name="name" />

            <x-forms.field name="username" />

            <x-forms.field name="email" type="email" />

            <x-forms.field name="password" type="password" keepOld="false" />

            <x-button>Register</x-button>

            <x-forms.errors />

        </x-forms.layout>
    </section>
</x-layout>
