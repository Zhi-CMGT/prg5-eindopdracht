<x-app-layout>

    <x-slot name="header">
        "Find your next stop in ZheJiang."
    </x-slot>

    <div>
        @foreach($destinations as $destination)
            <div>
                <h1>{{$destination->name}}</h1>
                <p>Coordinate: <br>{{$destination->coordinate}}</p>
                <p>{{$destination->description}}</p>
            </div>

            <div>
                <a href="{{ route('destinations.show', $destination) }}">See destination details</a>
            </div>
        @endforeach
    </div>

</x-app-layout>
