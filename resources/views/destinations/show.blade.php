<x-app-layout>

    <x-slot name="header">
        <h1>{{$destination->name}}</h1>
    </x-slot>

    <div>
        <div>
            <p><strong>Location: </strong>{{$destination->coordinate}}</p>
            <p><strong>Description: </strong>{{$destination->description}}</p>
            <p><strong>Category: </strong>{{$destination->category->name}}</p>
            <a href="{{ url()->previous() }}">Go Back</a>
        </div>
        <div>
            <img src="" alt="">
        </div>
    </div>

    <div>
        <div>
            <h2>Reviews</h2>
        </div>
        <div>
            <h2></h2>
            @foreach($destination->reviews as $review)
                <p>{{$review->comment}}</p>
            @endforeach
            <p></p>
        </div>

    </div>

</x-app-layout>



