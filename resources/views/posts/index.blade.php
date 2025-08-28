{{-- componente plantilla --}}
<x-app-layout>
    {{-- titulo --}}
    <x-slot name='title'>Home posts</x-slot>


    <a href="{{route('posts.create')}}">Nuevo post</a>

    {{-- Slot --}}
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a>
            </li>
        @endforeach
    </ul>
    {{$posts->links()}}

</x-app-layout>
    