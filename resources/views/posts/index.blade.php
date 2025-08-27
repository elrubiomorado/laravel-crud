{{-- componente plantilla --}}
<x-app-layout>
    {{-- titulo --}}
    <x-slot name='title'>Home posts</x-slot>


    <a href="/posts/create">Nuevo post</a>

    {{-- Slot --}}
    @foreach ($posts as $post)
    <ul>
        <li>
            <a href="/posts/{{$post->id}}">{{$post->title}}</a>
        </li>
    </ul>
    @endforeach
    

</x-app-layout>
    