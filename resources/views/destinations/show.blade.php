<x-app-layout>

    <x-slot name="header">
        <h1>{{ $destination->name }}</h1>
    </x-slot>

    <div>

        <div>
            <p><strong>Location: </strong>{{ $destination->coordinate }}</p>
            <p><strong>Description: </strong>{{ $destination->description }}</p>
            <p><strong>Category: </strong>{{ $destination->category->name }}</p>
            @if(request()->routeIs('destinations.show'))
                @if(url()->previous() == route('destinations'))
                    <a href="{{ route('destinations') }}"> Go Back</a>
                @else
                    <a href="{{ route('categories.show', $destination->category) }}">Go Back</a>
                @endif
            @endif
        </div>

        <div>
            <img src="" alt="">
        </div>

    </div>

    <div>

        <div>
            <h2>Reviews</h2>
            @foreach($destination->reviews as $review)
                <div>
                    <strong>{{ $review->user->name }}</strong>
                    <p>{{ $review->content }}</p>
                    <small> Rating: {{ str_repeat('⭐', $review->rating) }}</small>
                </div>
            @endforeach
        </div>

        <div>

            <form action="{{ route('reviews.store', $destination->id) }}" method="post">
                @csrf
                <div>
                    <input type="hidden" name="destination_id" value="{{ $destination->id }}">

                    <label for="content">Comment: </label>
                    <input type="text" name="content" id="content">

                    <input type="submit" name="submit" value="{{old('content')}}">

                    @error('content')
                    <div class="alert alert-danger"> {{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <p>Rating:</p>
                    @for($i = 1; $i <= 5; $i++)
                        <label for="rating{{ $i }}">{{ str_repeat('⭐', $i) }}</label>
                        <input type="radio" name="rating" id="rating{{ $i }}" value="{{ $i }}">
                    @endfor
                </div>

                <div>
                    <button type="submit">Confirm</button>
                </div>

            </form>

        </div>

    </div>

</x-app-layout>
