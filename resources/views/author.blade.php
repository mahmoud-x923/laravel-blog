<x-layout>
    <x-slot name="header">
        <h1>{{ $posts->first()->author->name }} </h1>
    </x-slot>
    <x-slot name="content">
        @foreach ($posts as $post)
            <article>
                <h1>
                    <a href="/posts/{{ $post->slug }}">
                        {{ $post->title }}
                    </a>
                </h1>

                <div>
                    {!! $post->excerpt !!}
                </div>

            </article>
        @endforeach
        <br>
        <a href="/">Go back</a>
    </x-slot>

</x-layout>
