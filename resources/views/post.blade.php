<x-layout>
    <x-slot name="header">
        <h1>My Blog</h1>
    </x-slot>
    <x-slot name="content">
        <article>
            <h1>
                {{ $post->title }}
            </h1>

            <div>
                {!! $post->body !!}
            </div>

            <a href="/">GO Back</a>`
        </article>
    </x-slot>
</x-layout>
