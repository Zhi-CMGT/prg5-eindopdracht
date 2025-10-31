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
                    <div>
                        <strong>{{ $review->user->name }}</strong>
                        <p>{{ $review->content }}</p>
                        <small> Rating: {{ str_repeat('⭐', $review->rating) }}</small>
                    </div>

                    <div>
                        @can('isAdmin')
                            <form action="{{ route('reviews.destroy', $review->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <x-form-button>Delete</x-form-button>
                            </form>
                        @endcan
                    </div>
                </div>

            @endforeach
        </div>

        <div>

            <form action="{{ route('reviews.store', $destination->id) }}" method="post">
                @csrf

                <div>
                    <input type="hidden" name="destination_id" value="{{ $destination->id }}">

                    <x-form-label for="content">Comment:</x-form-label>
                    <x-form-input type="text" name="content" id="content" value="{{old('content')}}"/>

                    <x-form-error name="content"/>
                </div>

                <div>
                    <x-form-label>Rating:</x-form-label>
                    @for($i = 1; $i <= 5; $i++)
                        <label for="rating{{ $i }}">{{ str_repeat('⭐', $i) }}</label>
                        <input type="radio" name="rating" id="rating{{ $i }}" value="{{ $i }}">
                    @endfor
                </div>

                <div>
                    <x-form-button>Confirm</x-form-button>
                </div>

            </form>

        </div>

    </div>

</x-app-layout>
