<x-app-layout>
    <x-slot name="header">
        Categories
    </x-slot>

    @foreach($categories as $category)
        <h1>{{$category->name}}</h1>
    @endforeach
</x-app-layout>
