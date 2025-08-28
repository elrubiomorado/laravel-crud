<x-app-layout>
    {{-- titulo --}}
    <x-slot name='title'>Actualizar post: {{$post->title}}</x-slot>
    <a href="{{route('posts.index')}}">Volver a post</a>

    {{-- Slot --}}
    <form action="{{route('posts.update', $post)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">
            Titulo:
            <input type="text" name="title" value="{{$post->title}}">
        </label>
        <br><br>
        <label for="">
            Categoria:
            <input type="text" name="category" value="{{$post->category}}">
        </label>
        <br><br>
        <label for="">
            Contenido:
            <textarea name="content">{{$post->content}}</textarea>
        </label>
        <br><br>
        <button type="submit">Actualizar</button>
    </form>

    
</x-app-layout>
    