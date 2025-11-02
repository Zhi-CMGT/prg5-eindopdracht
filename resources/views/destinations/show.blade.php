{{--<x-app-layout>--}}

{{--    <x-slot name="header">--}}
{{--        <h1>{{ $destination->name }}</h1>--}}
{{--    </x-slot>--}}

{{--    <div>--}}

{{--        <div>--}}
{{--            <p><strong>Location: </strong>{{ $destination->coordinate }}</p>--}}
{{--            <p><strong>Description: </strong>{{ $destination->description }}</p>--}}
{{--            <p><strong>Category: </strong>{{ $destination->category->name }}</p>--}}
{{--            @if(request()->routeIs('destinations.show'))--}}

{{--                @if(url()->previous() == route('destinations'))--}}

{{--                    <a href="{{ route('destinations') }}"> Go Back</a>--}}

{{--                @elseif(url()->previous() == route('categories'))--}}
{{--                    --}}
{{--                    <a href="{{ route('categories.show', $destination->category) }}">Go Back</a>--}}

{{--                @else--}}
{{--                    <a href="{{ url()->previous() }}">Go Back</a>--}}
{{--                @endif--}}

{{--            @endif--}}
{{--        </div>--}}

{{--        <div>--}}
{{--            <img src="" alt="">--}}
{{--        </div>--}}

{{--    </div>--}}

{{--    <div>--}}

{{--        <div>--}}
{{--            <h2>Reviews</h2>--}}
{{--            @foreach($destination->reviews as $review)--}}
{{--                <div>--}}
{{--                    <div>--}}
{{--                        <strong>{{ $review->user->name }}</strong>--}}
{{--                        <p>{{ $review->content }}</p>--}}
{{--                        <small> Rating: {{ str_repeat('⭐', $review->rating) }}</small>--}}
{{--                    </div>--}}

{{--                    <div>--}}
{{--                        @can('isAdmin')--}}
{{--                            <form action="{{ route('reviews.destroy', $review->id) }}" method="POST">--}}
{{--                                @csrf--}}
{{--                                @method('DELETE')--}}

{{--                                <x-form-button>Delete</x-form-button>--}}
{{--                            </form>--}}
{{--                        @endcan--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            @endforeach--}}
{{--        </div>--}}

{{--        <div>--}}
{{--            @auth--}}
{{--                <form action="{{ route('reviews.store', $destination->id) }}" method="post">--}}
{{--                    @csrf--}}

{{--                    <div>--}}
{{--                        <input type="hidden" name="destination_id" value="{{ $destination->id }}">--}}

{{--                        <x-form-label for="content">Comment:</x-form-label>--}}
{{--                        <x-form-input type="text" name="content" id="content" value="{{old('content')}}"/>--}}

{{--                        <x-form-error name="content"/>--}}
{{--                    </div>--}}

{{--                    <div>--}}
{{--                        <x-form-label>Rating:</x-form-label>--}}
{{--                        @for($i = 1; $i <= 5; $i++)--}}
{{--                            <label for="rating{{ $i }}">{{ str_repeat('⭐', $i) }}</label>--}}
{{--                            <input type="radio" name="rating" id="rating{{ $i }}" value="{{ $i }}">--}}
{{--                        @endfor--}}
{{--                    </div>--}}

{{--                    <div>--}}
{{--                        <x-form-button>Confirm</x-form-button>--}}
{{--                    </div>--}}

{{--                </form>--}}
{{--            @endauth--}}

{{--        </div>--}}

{{--    </div>--}}

{{--</x-app-layout>--}}
<x-app-layout>
    <div class="bg-gradient-to-b from-[#4A7856] to-[#5a8866] py-16 px-4">
        <div class="max-w-5xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-bold text-white text-center">{{ $destination->name }}</h1>
        </div>
    </div>

    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 -mt-8 pb-12">
        <!-- Main Info Card -->
        <div class="bg-white rounded-2xl shadow-xl p-8 md:p-10 border border-[#4A7856]/10 mb-10">
            <div class="grid md:grid-cols-2 gap-8">
                <div class="space-y-6">
                    <div>
                        <h3 class="text-sm font-semibold text-[#4A7856]/60 uppercase tracking-wide mb-2">Location</h3>
                        <p class="text-[#4A7856] text-lg flex items-center gap-2">
                            <svg class="w-5 h-5 text-[#D6B36A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            {{ $destination->coordinate }}
                        </p>
                    </div>

                    <div>
                        <h3 class="text-sm font-semibold text-[#4A7856]/60 uppercase tracking-wide mb-2">Category</h3>
                        <span
                            class="inline-flex items-center px-4 py-2 rounded-full bg-[#4A7856]/10 text-[#4A7856] font-medium">
                            {{ $destination->category->name }}
                        </span>
                    </div>
                </div>

                <div>
                    <h3 class="text-sm font-semibold text-[#4A7856]/60 uppercase tracking-wide mb-2">Description</h3>
                    <p class="text-[#4A7856]/80 leading-relaxed">{{ $destination->description }}</p>
                </div>
            </div>

            <div class="mt-8 pt-6 border-t border-[#A6B8B0]/30">
                @if(url()->previous() == route('destinations'))
                    <a href="{{ route('destinations') }}"
                       class="inline-flex items-center gap-2 text-[#D6B36A] hover:text-[#4A7856] font-semibold transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                        Go Back</a>

                @elseif(url()->previous() == route('categories'))
                    <a href="{{ route('categories.show', $destination->category) }}"
                       class="inline-flex items-center gap-2 text-[#D6B36A] hover:text-[#4A7856] font-semibold transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                        Go Back</a>

                @else
                    <a href="{{ url()->previous() }}"
                       class="inline-flex items-center gap-2 text-[#D6B36A] hover:text-[#4A7856] font-semibold transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                        Go Back</a>
                @endif
            </div>
        </div>

        <!-- Reviews Section -->
        <div class="bg-white rounded-2xl shadow-xl p-8 md:p-10 border border-[#4A7856]/10">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-3xl font-bold text-[#4A7856]">Reviews</h2>
                <span
                    {{--                    Toegevoegd door Claude tijdens styling--}}
                    class="text-[#4A7856]/60 text-sm">{{ count($destination->reviews) }} {{ Str::plural('review', count($destination->reviews)) }}</span>
            </div>
            {{----}}
            @if($destination->reviews->isEmpty())
                <div class="text-center py-12">
                    <svg class="w-16 h-16 mx-auto text-[#4A7856]/20 mb-4" fill="none" stroke="currentColor"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                    <p class="text-[#4A7856]/60">No reviews yet. Be the first to share your experience!</p>
                </div>
            @else
                <div class="space-y-6">
                    @foreach($destination->reviews as $review)
                        <div class="border-b border-[#A6B8B0]/20 last:border-0 pb-6 last:pb-0">
                            <div class="flex items-start justify-between mb-3">
                                <div>
                                    <p class="font-bold text-[#4A7856] text-lg">{{ $review->user->name }}</p>
                                    <div class="flex items-center gap-1 mt-1">
                                        @for($i = 0; $i < $review->rating; $i++)
                                            <svg class="w-5 h-5 text-[#D6B36A] fill-current" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                            </svg>
                                        @endfor
                                    </div>
                                </div>

                                @can('isAdmin')
                                    <form action="{{ route('reviews.destroy', $review->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="text-red-600 hover:text-red-700 text-sm font-medium transition">
                                            Delete
                                        </button>
                                    </form>
                                @endcan
                            </div>
                            <p class="text-[#4A7856]/80 leading-relaxed">{{ $review->content }}</p>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        <!-- Add Review Form -->
        @auth
            <div
                class="mt-8 bg-gradient-to-br from-[#F7F6F3] to-white rounded-2xl shadow-lg p-8 md:p-10 border border-[#4A7856]/10">
                <h3 class="text-2xl font-bold text-[#4A7856] mb-6">Share Your Experience</h3>

                <form action="{{ route('reviews.store', $destination->id) }}" method="post" class="space-y-6">
                    @csrf

                    <div>
                        <x-form-label for="content">Your Review</x-form-label>

                        <textarea name="content" id="content" rows="4"
                                  placeholder="Tell us about your experience..."
                                  class="w-full border border-[#A6B8B0]/50 rounded-xl p-4 focus:ring-2 focus:ring-[#4A7856] focus:border-transparent resize-none transition text-[#4A7856]"></textarea>

                        <x-form-error name="content"/>
                    </div>

                    <div>
                        <x-form-label>Rating</x-form-label>

                        <div class="flex items-center gap-3">
                            @for($i = 1; $i <= 5; $i++)
                                <label for="rating{{ $i }}" class="cursor-pointer group">
                                    <input type="radio" name="rating" id="rating{{ $i }}" value="{{ $i }}"
                                           class="sr-only peer">
                                    <div
                                        class="flex items-center gap-1 px-4 py-2 rounded-lg border-2 border-[#A6B8B0]/30 peer-checked:border-[#D6B36A] peer-checked:bg-[#D6B36A]/10 transition-all">
                                        <span class="text-[#D6B36A] text-xl">{{ str_repeat('⭐', $i) }}</span>
                                    </div>
                                </label>
                            @endfor
                        </div>
                    </div>

                    <button type="submit"
                            class="w-full md:w-auto inline-flex items-center justify-center gap-2 bg-gradient-to-r from-[#4A7856] to-[#5a8866] text-white px-8 py-3 rounded-xl hover:shadow-lg hover:scale-105 transition-all duration-200 font-semibold">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                        </svg>
                        Submit Review
                    </button>
                </form>
            </div>
        @endauth
    </div>
</x-app-layout>
