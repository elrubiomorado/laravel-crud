{{-- componente plantilla --}}
<x-app-layout>
    {{-- titulo --}}
    <x-slot name='title'>{{$post->title}}</x-slot>
    <a href="/posts/">Volver a post</a>

    {{-- Slot --}}
    <h2>Titulo: {{$post->title}}</h2>
    <p>
        Categoria:<b> {{$post->category}}</b>    
    </p>
    <p>
        {{$post->content}}
    </p>
    <a href="/posts/{{$post->id}}/edit">
        Editar post
    </a>
    <form action="/posts/{{$post->id}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
</x-app-layout>
    