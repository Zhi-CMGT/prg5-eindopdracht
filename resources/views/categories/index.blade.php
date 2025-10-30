<x-app-layout>

    <x-slot name="header">
        "Find your perfect ZheJiang experience."
    </x-slot>

    <div>
        <a href="{{ route('categories.create') }}">Add Categories</a>
    </div>

    <div>
        @foreach($categories as $category)
            <h1>{{$category->name}}</h1>
            <p>{{$category->description}}</p>
            <a href="{{ route('categories.show', $category) }}">Explore destinations</a>
        @endforeach
    </div>

</x-app-layout>
