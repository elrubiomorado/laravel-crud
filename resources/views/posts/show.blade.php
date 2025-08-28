{{-- componente plantilla --}}
<x-app-layout>
    {{-- titulo --}}
    <x-slot name='title'>{{$post->title}}</x-slot>
    <a href="{{route('posts.index')}}">Volver a post</a>

    {{-- Slot --}}
    <h2>Titulo: {{$post->title}}</h2>
    <p>
        Categoria:<b> {{$post->category}}</b>    
    </p>
    <p>
        {{$post->content}}
    </p>
    <a href="{{route('posts.edit', $post)}}">
        Editar post
    </a>
    <form action="{{route('posts.destroy', $post->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
</x-app-layout>
    