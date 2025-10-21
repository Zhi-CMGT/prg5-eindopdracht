<x-app-layout>

    <x-slot name="header">
        Destinations
    </x-slot>

    <div>
        @foreach($destinations as $destination)
            <div>
                <h1>{{$destination->name}}</h1>
                <p>{{$destination->location}}</p>
                <p>{{$destination->description}}</p>
            </div>
            <div>
                <a href="{{ route('destinations.show', $destination) }}">See destination details</a>
            </div>

        @endforeach
    </div>

</x-app-layout>
