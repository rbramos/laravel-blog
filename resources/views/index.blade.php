<x-app title="This is a Blog">
    <x-slot name="content">
        <h1 class="text-4xl text-gray-700 p-8 text-center">This is a Blog</h1>
        @foreach($posts as $post)
            <article class="space-y-3">
                <h1 class="text-3xl">
                    <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                </h1>
                <h3 class="text-l">
                    A post by <a href="/user/{{ $post->user->username }}">{{ $post->user->name }}</a>
                </h3>
                <a href="/categories/{{ $post->category->slug }}">
                    <h3 class="text-l">Category: {{ $post->category->name }}</h3>
                </a>
                <p> <?=$post->excerpt; ?></p>
            </article>
        @endforeach
    </x-slot>
</x-app>
