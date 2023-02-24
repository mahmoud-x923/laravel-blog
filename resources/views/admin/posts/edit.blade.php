<x-layout>
    <x-admin-setting-page :heading="'Edit Post: ' . $post->title">
        <form method="POST" action="/admin/posts/{{ $post->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="title" :value="old('title', $post->title)" />
            <x-form.input name="slug" :value="old('slug', $post->slug)" />

            <div class="flex mt-6">
                <div class="flex-1 ">
                    <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $post->thumbnail)" />
                </div>
                <img class="rounded-xl ml-6 shadow-xl"
                    src="{{ $post->thumbnail ? asset('storage/' . $post->thumbnail) : '/images/illustration-1.png' }}"
                    width="100" alt="thumbnail">
            </div>


            <x-form.textarea name="excerpt">
                {{ old('excerpt', $post->excerpt) }}
            </x-form.textarea>

            <x-form.textarea name="body">
                {{ old('body', $post->body) }}
            </x-form.textarea>


            <x-form.field>
                <x-form.label name="category_id" />
                <select class="border border-gray-400 p-2 w-full bg-gray-100 rounded-xl" name="category_id"
                    id="category_id">

                    @foreach ($categories as $category)
                        <option value={{ $category->id }}
                            {{ old('category_id') ?? $post->category->id == $category->id ? 'selected' : '' }}>
                            {{ ucwords($category->name) }}
                        </option>
                    @endforeach
                </select>

                <x-form.error name="category_id" />
            </x-form.field>

            <x-form.button-primary type="'submit'">
                Update
            </x-form.button-primary>

        </form>
    </x-admin-setting-page>
</x-layout>
