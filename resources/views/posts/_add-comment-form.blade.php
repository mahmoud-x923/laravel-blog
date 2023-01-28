<x-panale>
    @auth
        <form action="/posts/{{ $post->slug }}/comments" method="POST">
            @csrf

            <header class="flex space-x-3 items-center mb-4">
                <img src="https://i.pravatar.cc/60?u={{ auth()->user()->id }}" alt="" width="40" height="40"
                    class=" rounded-xl ">

                <h2>Want to participate?</h2>
            </header>

            <div>
                <textarea name="body" id="body" rows="5"
                    class=" border border-gray-200 focus:outline-none focus:ring px-4 py-2 rounded-xl w-full resize-none"
                    placeholder="Quick, think of something to say!" required></textarea>
                @error('body')
                    <p class="text-red-500 text-xs mt-1"> {{ $message }} </p>
                @enderror
            </div>

            <div class="flex justify-end lg:mt-5">
                <x-button-primary :type="'submit'">
                    post
                </x-button-primary>
            </div>
        </form>
    @else
        <p>
            <a href="/register" class=" text-blue-500">Register</a> or <a href="/login" class=" text-blue-500">Login</a> to
            leave a
            comment.
        </p>
    @endauth
</x-panale>
