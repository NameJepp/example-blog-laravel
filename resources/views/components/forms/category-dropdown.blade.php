@props(['postId' => null])
<div>
    <label for="category_id"></label>
    <select name="category_id" id="category_id" class="bg-white border border-gray-200 rounded-xl p-2 scrollbar-thin">
        <option value="" disabled selected>Category</option>
        @foreach (App\Models\Category::all() as $category)
            <option value="{{ $category->id }}" {{ old('category_id', $postId) == $category->id ? 'selected' : '' }}>
                {{ ucwords($category->name) }}
            </option>
        @endforeach
    </select>
    <x-forms.error name="category_id" />
</div>
