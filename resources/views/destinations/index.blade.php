{{--<x-app-layout>--}}

{{--    <x-slot name="header">--}}
{{--        "Find your next stop in ZheJiang."--}}
{{--    </x-slot>--}}

{{--    @can('isAdmin')--}}
{{--        <div>--}}
{{--            <div>--}}
{{--                <a href="{{ route('destinations.create') }}">Add Destinations</a>--}}
{{--            </div>--}}

{{--            <x-dropdown>--}}
{{--                <x-slot name="trigger">--}}
{{--                    <button>Manage Destinations</button>--}}
{{--                </x-slot>--}}

{{--                <x-slot name="content">--}}
{{--                    @foreach($destinations as $destination)--}}
{{--                        <h1>{{ $destination->name }}</h1>--}}
{{--                        <p>{{ $destination->is_active ? 'Active' : 'Inactive' }}</p>--}}

{{--                        <div>--}}
{{--                            <form action="{{ route('destinations.toggle', $destination) }}" method="POST">--}}
{{--                                @csrf--}}
{{--                                <button--}}
{{--                                    type="submit">{{ $destination->is_active ? 'Toggle-off' : 'Toggle-on' }}</button>--}}
{{--                            </form>--}}

{{--                            <a href="{{ route('destinations.edit', $destination) }}" class="btn btn-sm">Edit</a>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </x-slot>--}}
{{--            </x-dropdown>--}}
{{--        </div>--}}
{{--    @endcan--}}

{{--    <div>--}}
{{--        @foreach($destinations as $destination)--}}
{{--            <div>--}}
{{--                <h1>{{$destination->name}}</h1>--}}
{{--                <p>{{$destination->description}}</p>--}}
{{--            </div>--}}

{{--            <div>--}}
{{--                <a href="{{ route('destinations.show', $destination) }}">See destination details</a>--}}
{{--            </div>--}}
{{--        @endforeach--}}
{{--    </div>--}}

{{--    <div>--}}
{{--        @if(request()->routeIs('search'))--}}
{{--            <a href="{{ route('home') }}">Go Back</a>--}}
{{--        @endif--}}
{{--    </div>--}}

{{--</x-app-layout>--}}
<x-app-layout>
    <x-slot name="header">
        <x-slot name="h1">Find your next stop in Zhejiang</x-slot>

        <x-slot name="p">Discover the hidden gems of beautiful Zhejiang province</x-slot>
    </x-slot>

    @can('isAdmin')
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 my-8">
            <div class="bg-white rounded-2xl shadow-md p-6 border border-[#4A7856]/10">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                    <a href="{{ route('destinations.create') }}"
                       class="inline-flex items-center gap-2 bg-gradient-to-r from-[#4A7856] to-[#5a8866] text-white px-6 py-3 rounded-xl shadow-md hover:shadow-lg hover:scale-105 transition-all duration-200 font-medium">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                        Add Destination
                    </a>

                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open"
                                class="inline-flex items-center gap-2 text-[#4A7856] hover:text-[#D6B36A] font-semibold transition-colors duration-200 px-4 py-2 rounded-lg hover:bg-[#4A7856]/5">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                            </svg>
                            Manage Destinations
                            <svg class="w-4 h-4 transition-transform duration-200" :class="open ? 'rotate-180' : ''"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>

                        <div x-show="open"
                             @click.away="open = false"
                             x-transition
                             class="absolute right-0 mt-2 w-full sm:w-96 max-h-[32rem] overflow-y-auto p-3 bg-white rounded-xl shadow-2xl border border-[#4A7856]/10 z-50"
                             style="display: none;">
                            <div class="space-y-3">
                                @foreach($destinations as $destination)
                                    <div
                                        class="bg-gradient-to-br from-[#F7F6F3] to-white rounded-xl p-4 shadow-sm hover:shadow-md transition-all duration-200 border border-[#4A7856]/5">
                                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                                            <div class="flex-1 min-w-0">
                                                <h3 class="font-bold text-[#4A7856] text-lg truncate">
                                                    {{ $destination->name }}
                                                </h3>
                                                <div class="flex items-center gap-2 mt-1">
                                                    <span class="text-xs font-medium text-[#4A7856]/60">Status:</span>
                                                    <span
                                                        class="inline-flex items-center gap-1 px-2 py-1 rounded-full text-xs font-semibold {{ $destination->is_active ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                                                        <span
                                                            class="w-1.5 h-1.5 rounded-full {{ $destination->is_active ? 'bg-green-600' : 'bg-red-600' }}"></span>
                                                        {{ $destination->is_active ? 'Active' : 'Inactive' }}
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="flex items-center gap-2">
                                                <form action="{{ route('destinations.toggle', $destination) }}"
                                                      method="POST" class="inline" @click.stop>
                                                    @csrf
                                                    <button type="submit"
                                                            class="px-4 py-2 bg-[#D6B36A] text-white rounded-lg hover:bg-[#c9a85f] transition-colors duration-200 text-sm font-medium shadow-sm hover:shadow">
                                                        {{ $destination->is_active ? 'Deactivate' : 'Activate' }}
                                                    </button>
                                                </form>
                                                <a href="{{ route('destinations.edit', $destination) }}"
                                                   class="px-4 py-2 bg-[#4A7856] text-white rounded-lg hover:bg-[#5a8866] transition-colors duration-200 text-sm font-medium shadow-sm hover:shadow">
                                                    Edit
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endcan

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($destinations as $destination)
                <div
                    class="group bg-white rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-[#4A7856]/10 hover:border-[#D6B36A]/30">
                    <div class="p-6 h-full flex flex-col">
                        <div class="flex items-start justify-between mb-3">
                            <h2 class="text-[#4A7856] font-bold text-xl group-hover:text-[#D6B36A] transition-colors duration-200">
                                {{ $destination->name }}
                            </h2>
                            <svg
                                class="w-6 h-6 text-[#D6B36A] opacity-0 group-hover:opacity-100 transition-opacity duration-200"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </div>

                        <p class="text-[#4A7856]/70 mb-6 flex-grow leading-relaxed">
                            {{ Str::limit($destination->description, 120) }}
                        </p>

                        <a href="{{ route('destinations.show', $destination) }}"
                           class="inline-flex items-center gap-2 text-[#D6B36A] font-semibold hover:text-[#4A7856] transition-colors duration-200 group/link">
                            <span>See destination details</span>
                            <svg class="w-4 h-4 group-hover/link:translate-x-1 transition-transform duration-200"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-12 text-center">
            @if(request()->routeIs('search'))
                <a href="{{ route('home') }}"
                   class="inline-flex items-center gap-2 text-[#D6B36A] hover:text-[#4A7856] font-semibold transition-colors text-lg">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Go Back</a>
            @endif
        </div>

        {{--        @if($destinations->isEmpty())--}}
        {{--            <div class="text-center py-16">--}}
        {{--                <svg class="w-24 h-24 mx-auto text-[#4A7856]/20 mb-4" fill="none" stroke="currentColor"--}}
        {{--                     viewBox="0 0 24 24">--}}
        {{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
        {{--                          d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>--}}
        {{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
        {{--                          d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>--}}
        {{--                </svg>--}}
        {{--                <h3 class="text-2xl font-bold text-[#4A7856] mb-2">No destinations yet</h3>--}}
        {{--                <p class="text-[#4A7856]/60">Start adding amazing destinations to showcase Zhejiang's beauty!</p>--}}
        {{--            </div>--}}
        {{--        @endif--}}
    </div>
</x-app-layout>
