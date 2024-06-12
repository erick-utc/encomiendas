<x-page-layout>
    <main class="p-2">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Posts</h1>
        <a href="{{route('posts.create')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Crear post</a>
    </main>
    
    <ul class="max-w-sm mx-auto">
        @foreach ($posts as $post)
            <li>
                <a href="{{route('posts.show', $post)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{$post->title}}</a>
            </li>
        @endforeach
    </ul>

    {{ $posts->links() }}
</x-page-layout>