<x-app title="{{ $post->title }}">
    <x-slot name="content">
        <article class="space-y-3">
            <h1 class="text-3xl">{{ $post->title }}</h1>
            <h3 class="text-l">
                A post by <a href="/user/{{ $post->user->username }}">{{ $post->user->name }}</a>
            </h3>
            <p> {{ $post->body }}</p>
        </article>
        <a class="inline-block mt-4" href="/">&larr; Go back</a>
    </x-slot>
</x-app>
