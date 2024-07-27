<x-page-layout>
    @if ($errors->any())
        <div>
            <h2>Errors:</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
        
    @endif

    <form class="max-w-sm mx-auto" action="{{route('posts.store')}}" method="POST">

        @csrf
    
    <div class="mb-5">
        <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Titulo</label>
        <input type="text" value="{{old('title')}}" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        @error('title')
        <p class="mt-2 text-sm text-red-600"><span class="font-medium">Error: </span> {{$message}}</p>
        @enderror
        
</div>
    </div>
    <div class="mb-5">
        <label for="slug" class="block mb-2 text-sm font-medium text-gray-900">Slug</label>
        <input type="text" value="{{old('slug')}}" id="slug" name="slug" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        @error('slug')
        <p class="mt-2 text-sm text-red-600"><span class="font-medium">Error: </span> {{$message}}</p>
        @enderror
    </div>
    <div class="mb-5">
        <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Categoria</label>
        <input type="text" value="{{old('category')}}" id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        @error('category')
        <p class="mt-2 text-sm text-red-600"><span class="font-medium">Error: </span> {{$message}}</p>
        @enderror
    </div>
    <div class="mb-5">
        <label for="content" class="block mb-2 text-sm font-medium text-gray-900">Contenido</label>
        <textarea type="text" id="content" name="content" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
            {{old('content')}}
        </textarea>
        @error('content')
        <p class="mt-2 text-sm text-red-600"><span class="font-medium">Error: </span> {{$message}}</p>
        @enderror
    </div>

    <button type="submit">Crear Post</button>
  </form>
  
</x-page-layout>