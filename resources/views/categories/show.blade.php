<x-app-layout>

    <x-slot name="header">
        <h1>{{$category->name}}</h1>
    </x-slot>

    <div>
        @foreach($category->destinations as $destination)
            <a href="{{ route('destinations.show', $destination) }}">{{$destination->name}}</a>
            <p>{{$destination->description}}</p>
        @endforeach
    </div>

    <div>
        <a href="{{ route('categories') }}">Go back</a>
    </div>

</x-app-layout>
