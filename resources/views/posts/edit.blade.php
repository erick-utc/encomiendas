<x-page-layout>
    
    <form class="max-w-sm mx-auto" action="{{route('posts.update', $post)}}" method="POST">

        @csrf

        @method('PUT')
    
    <div class="mb-5">
        <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Titulo</label>
        <input type="text" value="{{$post->title}}" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    </div>
    <div class="mb-5">
        <label for="slug" class="block mb-2 text-sm font-medium text-gray-900">Slug</label>
        <input type="text" value="{{$post->slug}}" id="slug" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    </div>
    <div class="mb-5">
        <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Categoria</label>
        <input type="text" value="{{$post->category}}" id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
    </div>
    <div class="mb-5">
        <label for="content" class="block mb-2 text-sm font-medium text-gray-900">Contenido</label>
        <textarea type="text" id="content" name="content" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
            {{$post->content}}
        </textarea>
    </div>

    <button type="submit">Editar Post</button>
  </form>
  
</x-page-layout>