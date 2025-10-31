<x-app-layout>

    <x-slot name="header">
        "Find your next stop in ZheJiang."
    </x-slot>

    @can('isAdmin')
        <div>
            <div>
                <a href="{{ route('destinations.create') }}">Add Destinations</a>
            </div>

            <x-dropdown>
                <x-slot name="trigger">
                    <button>Manage</button>
                </x-slot>

                <x-slot name="content">
                    @foreach($destinations as $destination)
                        <h1>{{ $destination->name }}</h1>
                        <p>{{ $destination->is_active ? 'Active' : 'Inactive' }}</p>

                        <div>
                            <form action="{{ route('destinations.toggle', $destination) }}" method="POST">
                                @csrf
                                <button
                                    type="submit">{{ $destination->is_active ? 'Toggle-off' : 'Toggle-on' }}</button>
                            </form>

                            <a href="{{ route('destinations.edit', $destination) }}" class="btn btn-sm">Edit</a>
                        </div>
                    @endforeach
                </x-slot>
            </x-dropdown>
        </div>
    @endcan

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
