<x-layout>
    <x-admin-setting-page heading="Manage Posts">

        <header class="px-5 py-4 border-b border-gray-100">
            <h2 class="font-semibold text-gray-800">Posts</h2>
        </header>
        <div class="p-3">
            <div class="overflow-x-auto">
                @if ($posts->count())
                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 whitespace-nowrap mr-3">
                                    <div class="font-semibold text-left">Thumbnail</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Title</div>
                                </th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody class="text-sm divide-y divide-gray-100">

                            @foreach ($posts as $post)
                                <tr>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class=" flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-xl"
                                                    src="{{ $post->thumbnail ? asset('storage/' . $post->thumbnail) : '/images/illustration-1.png' }}"
                                                    width="80" height="80" alt="thumbnail"></div>
                                        </div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left">
                                            <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                                        </div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left font-medium text-blue-500">
                                            <a href="/admin/posts/{{ $post->id }}/edit">Edit</a>
                                        </div>
                                    </td>
                                    <td class="p-2 whitespace-nowrap">
                                        <div class="text-left font-medium text-red-500">
                                            {{-- <a href="/admin/posts/{{ $post->id }}/delete">Delete</a> --}}

                                            <form method="POST" action="/admin/posts/{{ $post->id }}">
                                                @csrf
                                                @method('DELETE')

                                                <button>Delete</button>

                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    {{ $posts->links() }}
                @else
                    <p class="text-center">No posts yet. Try to check later</p>
                @endif
            </div>
        </div>


    </x-admin-setting-page>
</x-layout>
