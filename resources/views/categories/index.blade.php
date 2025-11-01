{{--<x-app-layout>--}}

{{--    <x-slot name="header">--}}
{{--        "Find your perfect ZheJiang experience."--}}
{{--    </x-slot>--}}

{{--    @can('isAdmin')--}}
{{--        <div>--}}
{{--            <div>--}}
{{--                <a href="{{ route('categories.create') }}">Add Categories</a>--}}
{{--            </div>--}}

{{--            <div>--}}
{{--                <x-dropdown>--}}
{{--                    <x-slot name="trigger">--}}
{{--                        <button>Manage Categories</button>--}}
{{--                    </x-slot>--}}

{{--                    <x-slot name="content">--}}
{{--                        @foreach($categories as $category)--}}
{{--                            <h1>{{ $category->name }}</h1>--}}
{{--                            <div>--}}
{{--                                <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm">Edit</a>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </x-slot>--}}
{{--                </x-dropdown>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endcan--}}

{{--    <div>--}}
{{--        @foreach($categories as $category)--}}
{{--            <h1>{{$category->name}}</h1>--}}
{{--            <p>{{$category->description}}</p>--}}
{{--            <a href="{{ route('categories.show', $category) }}">Explore destinations</a>--}}
{{--        @endforeach--}}
{{--    </div>--}}

{{--</x-app-layout>--}}
<x-app-layout>
    <x-slot name="header">
        <div class="bg-gradient-to-r from-[#4A7856] to-[#5a8866] py-12 px-4">
            <h1 class="text-4xl md:text-5xl font-bold text-white text-center tracking-tight">
                Find your perfect Zhejiang experience
            </h1>
            <p class="text-white/80 text-center mt-3 text-lg">Explore destinations by category</p>
        </div>
    </x-slot>

    @can('isAdmin')
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 my-8">
            <div class="bg-white rounded-2xl shadow-md p-6 border border-[#4A7856]/10">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                    <a href="{{ route('categories.create') }}"
                       class="inline-flex items-center gap-2 bg-gradient-to-r from-[#4A7856] to-[#5a8866] text-white px-6 py-3 rounded-xl shadow-md hover:shadow-lg hover:scale-105 transition-all duration-200 font-medium">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                        Add Category
                    </a>

                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open"
                                class="inline-flex items-center gap-2 text-[#4A7856] hover:text-[#D6B36A] font-semibold transition-colors duration-200 px-4 py-2 rounded-lg hover:bg-[#4A7856]/5">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                            </svg>
                            Manage Categories
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
                            <div class="space-y-2">
                                @foreach($categories as $category)
                                    <div
                                        class="flex justify-between items-center p-3 hover:bg-[#F7F6F3] rounded-lg transition">
                                        <span class="font-semibold text-[#4A7856]">{{ $category->name }}</span>
                                        <a href="{{ route('categories.edit', $category) }}"
                                           class="text-[#D6B36A] hover:text-[#4A7856] text-sm font-medium transition">
                                            Edit
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endcan

    <!-- Category Grid -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach($categories as $category)
                <div
                    class="group bg-white rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden border border-[#4A7856]/10 hover:border-[#D6B36A]/30">
                    <div class="p-6 h-full flex flex-col">
                        <div class="flex items-start justify-between mb-3">
                            <h2 class="text-[#4A7856] font-bold text-xl group-hover:text-[#D6B36A] transition-colors duration-200">
                                {{$category->name}}
                            </h2>
                            <svg
                                class="w-6 h-6 text-[#D6B36A] opacity-0 group-hover:opacity-100 transition-opacity duration-200"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </div>

                        <p class="text-[#4A7856]/70 mb-6 flex-grow leading-relaxed">
                            {{$category->description}}
                        </p>

                        <a href="{{ route('categories.show', $category) }}"
                           class="inline-flex items-center gap-2 text-[#D6B36A] font-semibold hover:text-[#4A7856] transition-colors duration-200 group/link">
                            <span>Explore destinations</span>
                            <svg class="w-4 h-4 group-hover/link:translate-x-1 transition-transform duration-200"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        @if($categories->isEmpty())
            <div class="text-center py-16">
                <svg class="w-24 h-24 mx-auto text-[#4A7856]/20 mb-4" fill="none" stroke="currentColor"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                </svg>
                <h3 class="text-2xl font-bold text-[#4A7856] mb-2">No categories yet</h3>
                <p class="text-[#4A7856]/60">Create categories to organize your destinations!</p>
            </div>
        @endif
    </div>
</x-app-layout>
