<x-layout>
    <section class="px-6 py-8">
        <x-forms.layout name="Log In!" action="/login" class="max-w-lg mx-auto mt-10 p-6">

            <x-forms.field name="email" type="email" />

            <x-forms.field name="password" type="password" keepOld="false" />

            <x-button>Log in</x-button>

            <x-forms.errors />

        </x-forms.layout>
    </section>
</x-layout>
