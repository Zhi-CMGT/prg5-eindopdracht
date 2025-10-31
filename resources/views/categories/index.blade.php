<x-app-layout>

    <x-slot name="header">
        "Find your perfect ZheJiang experience."
    </x-slot>

    @can('isAdmin')
        <div>
            <a href="{{ route('categories.create') }}">Add Categories</a>
        </div>
    @endcan

    <div>
        @foreach($categories as $category)
            <h1>{{$category->name}}</h1>
            <p>{{$category->description}}</p>
            <a href="{{ route('categories.show', $category) }}">Explore destinations</a>
        @endforeach
    </div>

</x-app-layout>
