<link rel="stylesheet" href="{{asset('css/component.blog-page.css')}}">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Creer un post') }}
        </h2>
    </x-slot>


    <div class="max-w-7xl mx-auto sm:px lg:xp-8">

        <form method="POST" action="{{ route("posts.store")}}" enctype="multipart/form-data" class="mt-10">
            @csrf
            <x-label value="Le nom du post" for="title"/>
            <x-input id="title" name="title" type="text"/>

            <x-label value="Le contenu du post" for="content"/>
            <textarea id="content" name="content"></textarea>

            <x-label value="Image du post" for="image"/>
            <x-input id="image" name="image" type="file"/>

            <x-label value="Categorie du post" for="category"/>
            <select name="category">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{ $category->name}}</option>
                @endforeach
            </select>

            <x-button style="display:block !important;" class="mt-5">
                Creer mon post
            </x-button>

        </form>

    </div>
    
</x-app-layout>