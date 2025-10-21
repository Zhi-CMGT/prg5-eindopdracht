<x-app-layout>

    <x-slot name="header">
        {{$destination->name}}
    </x-slot>

    <div>
        <div>
            <p><strong>Location: </strong>{{$destination->location}}</p>
            <p><strong>Description: </strong>{{$destination->description}}</p>
        </div>
        <div>
            <img src="" alt="">
        </div>
    </div>

    <div>
        <a href="{{ route('destinations') }}">Back</a>
    </div>

</x-app-layout>



