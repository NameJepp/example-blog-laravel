@props(['heading'])
<x-layout>
    <section class="mt-8">
        <h1 class="font-semibold text-lg mx-auto text-center">{{ $heading }}</h1>
        <div class="flex">
            <aside class="w-48">
                <h4 class="font-semibold mb-4">Links</h4>
                <ul>
                    <li>
                        <a href="/admin/posts" class="{{ request()->is('admin/posts') ? 'text-blue-500' : '' }}">
                            Manage Posts</a>
                    </li>

                    <li>
                        <a href="/admin/posts/create"
                            class="{{ request()->is('admin/posts/create') ? 'text-blue-500' : '' }}">New Posts</a>
                    </li>
                </ul>
            </aside>

            <div class="flex-1">
                {{ $slot }}
            </div>
        </div>
    </section>
</x-layout>
