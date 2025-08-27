{{-- componente plantilla --}}
<x-app-layout>
    {{-- titulo --}}
    <x-slot name='title'>Create a new post</x-slot>
    <a href="/posts/">Volver a post</a>
    {{-- Slot --}}
    <form action="/posts" method="POST">
        @csrf
        <label for="">
            Titulo:
            <input type="text" name="title">
        </label>
        <br><br>
        <label for="">
            Categoria:
            <input type="text" name="category">
        </label>
        <br><br>
        <label for="">
            Contenido:
            <textarea name="content"></textarea>
        </label>
        <br><br>
        <button type="submit">Crear</button>
    </form>

    
</x-app-layout>
    