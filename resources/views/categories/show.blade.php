{{--<x-app-layout>--}}

{{--    <x-slot name="header">--}}
{{--        <h1>{{$category->name}}</h1>--}}
{{--    </x-slot>--}}

{{--    <div>--}}
{{--        @foreach($category->destinations as $destination)--}}
{{--            <a href="{{ route('destinations.show', $destination) }}">{{$destination->name}}</a>--}}
{{--            <p>{{$destination->description}}</p>--}}
{{--        @endforeach--}}
{{--    </div>--}}

{{--    <div>--}}
{{--        <a href="{{ route('categories') }}">Go back</a>--}}
{{--    </div>--}}

{{--</x-app-layout>--}}
<x-app-layout>
    <x-slot name="header">
        <div class="bg-gradient-to-r from-[#4A7856] to-[#5a8866] py-12 px-4">
            <h1 class="text-4xl md:text-5xl font-bold text-white text-center tracking-tight">{{$category->name}}</h1>
            <p class="text-white/80 text-center mt-3 text-lg">{{ count($category->destinations) }} {{ Str::plural('destination', count($category->destinations)) }}
                in this category</p>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        @if($category->destinations->isEmpty())
            <div class="text-center py-16">
                <svg class="w-24 h-24 mx-auto text-[#4A7856]/20 mb-4" fill="none" stroke="currentColor"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                </svg>
                <h3 class="text-2xl font-bold text-[#4A7856] mb-2">No destinations yet</h3>
                <p class="text-[#4A7856]/60">Start adding destinations to this category!</p>
            </div>
        @else
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach($category->destinations as $destination)
                    <div
                        class="group bg-white rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-[#4A7856]/10 hover:border-[#D6B36A]/30">
                        <div class="p-6 h-full flex flex-col">
                            <a href="{{ route('destinations.show', $destination) }}"
                               class="text-[#4A7856] font-bold text-xl group-hover:text-[#D6B36A] transition-colors duration-200 mb-3 flex items-start justify-between">
                                <span>{{$destination->name}}</span>
                                <svg
                                    class="w-6 h-6 text-[#D6B36A] opacity-0 group-hover:opacity-100 transition-opacity duration-200 flex-shrink-0 ml-2"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                            <p class="text-[#4A7856]/70 leading-relaxed flex-grow">{{$destination->description}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="mt-12 text-center">
            <a href="{{ route('categories') }}"
               class="inline-flex items-center gap-2 text-[#D6B36A] hover:text-[#4A7856] font-semibold transition-colors text-lg">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Back to all categories
            </a>
        </div>
    </div>
</x-app-layout>

