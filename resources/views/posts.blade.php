<x-layout>
    <x-slot name="header">
        <h1>My Blog</h1>
    </x-slot>
    <x-slot name="content">
        @foreach ($posts as $post)
            <article>
                <h1>
                    <a href="/posts/{{ $post->slug }}">
                        {{ $post->title }}
                    </a>
                </h1>

                <p>
                    By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> In
                    <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a>
                </p>

                <div>
                    {!! $post->excerpt !!}
                </div>
            </article>
        @endforeach

    </x-slot>

</x-layout>