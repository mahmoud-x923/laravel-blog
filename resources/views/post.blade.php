<x-layout>
    <x-slot name="header">
        <h1> {{ $post->title }}</h1>
    </x-slot>
    <x-slot name="content">
        <article>

            <p>
                By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> In
                <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a>
            </p>

            <div>
                {!! $post->body !!}
            </div>

            <a href="/">GO Back</a>
        </article>
    </x-slot>
</x-layout>
