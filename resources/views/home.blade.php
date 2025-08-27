{{-- componente plantilla --}}
<x-app-layout>
    {{-- titulo --}}
    <x-slot name='title'>Home page</x-slot>

    {{-- header --}}
    <x-slot name='header'>
        <h1>Hola esta aplicacion de post</h1>
    </x-slot>

    {{-- Slot --}}
    <div class="max-w-4xl mx-auto px-4" class="mb-4">
        
        {{-- <H1>Bienvenido a la pagina principal</H1> --}}
        <x-alert2 type='success'>
            <x-slot name='title'>Info alerta suanmi</x-slot>
            Alertas tsuanmi perros
        </x-alert2>
    </div>

    {{-- Footer --}}
    <x-slot name='footer'>
        <h2>este es un footer</h2>
    </x-slot>
</x-app-layout>
    