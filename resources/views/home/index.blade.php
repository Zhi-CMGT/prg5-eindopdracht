{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <a href="{{ route('destinations') }}">Explore</a>--}}
{{--    </x-slot>--}}

{{--    <form action="{{ route('search') }}">--}}
{{--        <x-form-input name="q" placeholder="LiShui..."/>--}}
{{--    </form>--}}

{{--    <div>--}}
{{--        <p>Step into the world of Zhejiang, a province full of contrasts where centuries-old traditions meet modern--}}
{{--            energy. Wander through ancient water towns, climb misty mountains, and savor the flavors of authentic--}}
{{--            Chinese cuisine found nowhere else.</p>--}}
{{--        <p>With our comprehensive guide, you can easily navigate the cities of Zhejiang and discover places by category--}}
{{--            – from hidden nature trails to bustling markets. Each visit tells a new story.</p>--}}
{{--        <p>Be inspired by the experiences of other explorers, or share your own adventures and tips. In Zhejiang, every--}}
{{--            journey is unique – and your story belongs here too.</p>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}
<x-app-layout>
    <div class="bg-gradient-to-b from-[#F7F6F3] via-white to-[#F7F6F3] min-h-screen">
        <!-- Hero Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-12 text-center">
            <a href="{{ route('destinations') }}"
               class="inline-block group">
                <h1 class="text-5xl sm:text-6xl md:text-7xl font-bold text-[#4A7856] group-hover:text-[#D6B36A] transition-colors duration-300 mb-4">
                    Explore
                </h1>
                <p class="text-[#4A7856]/60 text-lg group-hover:text-[#4A7856]/80 transition-colors">Discover the
                    wonders of Zhejiang</p>
            </a>
        </div>

        <!-- Search Bar -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <form action="{{ route('search') }}" class="max-w-2xl mx-auto">

                <div class="relative group">
                    <span
                        class="absolute inset-y-0 left-5 flex items-center text-[#4A7856]/40 group-focus-within:text-[#4A7856] transition-colors">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M21 21l-4.35-4.35M11 18a7 7 0 100-14 7 7 0 000 14z"/>
                        </svg>
                    </span>

                    <input name="q"
                           placeholder="Search destinations... (e.g., LiShui, West Lake)"
                           class="w-full border-2 border-[#A6B8B0]/30 rounded-2xl pl-16 pr-6 py-5 text-lg focus:ring-2 focus:ring-[#4A7856] focus:border-[#4A7856] shadow-lg"/>
                </div>

                @if($errors->any())
                    <div class="text-xs text-red-500 font-semibold mt-1">
                        {{ $errors->first('error') }}
                    </div>
                @endif
            </form>
        </div>

        <!-- Content Section -->
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid md:grid-cols-3 gap-8">
                <div
                    class="bg-white rounded-2xl p-8 shadow-lg border border-[#4A7856]/10 hover:shadow-xl transition-shadow">
                    <div class="w-14 h-14 bg-[#4A7856]/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-[#4A7856]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                        </svg>
                    </div>
                    <h3 class="text-[#4A7856] font-bold text-xl mb-3">Ancient Traditions</h3>
                    <p class="text-[#4A7856]/70 leading-relaxed">
                        Step into the world of Zhejiang, a province full of contrasts where centuries-old traditions
                        meet modern energy. Wander through ancient water towns, climb misty mountains, and savor the
                        flavors of authentic Chinese cuisine found nowhere else.
                    </p>
                </div>

                <div
                    class="bg-white rounded-2xl p-8 shadow-lg border border-[#4A7856]/10 hover:shadow-xl transition-shadow">
                    <div class="w-14 h-14 bg-[#D6B36A]/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-[#D6B36A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                        </svg>
                    </div>
                    <h3 class="text-[#4A7856] font-bold text-xl mb-3">Easy Navigation</h3>
                    <p class="text-[#4A7856]/70 leading-relaxed">
                        With our comprehensive guide, you can easily navigate the cities of Zhejiang and discover places
                        by category — from hidden nature trails to bustling markets. Each visit tells a new story.
                    </p>
                </div>

                <div
                    class="bg-white rounded-2xl p-8 shadow-lg border border-[#4A7856]/10 hover:shadow-xl transition-shadow">
                    <div class="w-14 h-14 bg-[#4A7856]/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-[#4A7856]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-[#4A7856] font-bold text-xl mb-3">Share Your Story</h3>
                    <p class="text-[#4A7856]/70 leading-relaxed">
                        Be inspired by the experiences of other explorers, or share your own adventures and tips. In
                        Zhejiang, every journey is unique — and your story belongs here too.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
