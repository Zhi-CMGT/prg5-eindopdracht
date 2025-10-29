<x-app-layout>

    <x-slot name="header">
        "Find your next stop in ZheJiang."
    </x-slot>

    <div>
        @foreach($destinations as $destination)
            <h1>{{ $destination->name }}</h1>
            <p>{{ $destination->is_active ? 'Active' : 'Inactive' }}</p>

            <div>
                <form action="{{ route('destinations.toggle', $destination) }}" method="POST">
                    @csrf
                    <button type="submit">{{ $destination->is_active ? 'Toggle-off' : 'Toggle-on' }}</button>
                </form>

                <a href="{{ route('destinations.edit', $destination) }}" class="btn btn-sm">Edit</a>

                <form action="{{ route('destinations.destroy', $destination->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </div>
        @endforeach
    </div>

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
