<x-layout>
    <x-admin-setting-page heading="Publish New Post">
        <form method="POST" action="/admin/posts" enctype="multipart/form-data">
            @csrf

            <x-form.input name="title" />
            <x-form.input name="slug" />
            <x-form.input name="thumbnail" type="file" />


            <x-form.textarea name="excerpt" />
            <x-form.textarea name="body" />


            <x-form.field>
                <x-form.label name="category_id" />
                <select class="border border-gray-400 p-2 w-full bg-gray-100 rounded-xl" name="category_id"
                    id="category_id">

                    @foreach ($categories as $category)
                        <option value={{ $category->id }} {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ ucwords($category->name) }}
                        </option>
                    @endforeach
                </select>

                <x-form.error name="category_id" />
            </x-form.field>

            <x-form.button-primary type="'submit'">
                Publish
            </x-form.button-primary>

        </form>
    </x-admin-setting-page>
</x-layout>
