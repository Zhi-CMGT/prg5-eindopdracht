{{--<x-app-layout>--}}
{{--    @can('isAdmin')--}}
{{--        <form action="{{ route('categories.update', $category->id) }}" method="POST">--}}
{{--            @csrf--}}
{{--            @method('PUT')--}}

{{--            <div class="space-y-8">--}}
{{--                <div class="border-b border-gray-900/10 pb-12">--}}
{{--                    <h2 class="text-base font-semibold leading-7 text-gray-900">--}}
{{--                        Edit Category</h2>--}}

{{--                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">--}}
{{--                        <x-form-field>--}}
{{--                            <x-form-label for="">Name:</x-form-label>--}}

{{--                            <x-form-input--}}
{{--                                type="text"--}}
{{--                                name="name"--}}
{{--                                id="name"--}}
{{--                                value="{{old('name', $category->name)}}"--}}
{{--                                required/>--}}

{{--                            <x-form-error name="name"/>--}}
{{--                        </x-form-field>--}}

{{--                        <x-form-field>--}}
{{--                            <x-form-label for="">Description:</x-form-label>--}}

{{--                            <x-form-input--}}
{{--                                type="text"--}}
{{--                                name="description"--}}
{{--                                id="description"--}}
{{--                                value="{{old('description', $category->description)}}"--}}
{{--                                required/>--}}

{{--                            <x-form-error name="description"/>--}}
{{--                        </x-form-field>--}}

{{--                        <x-form-field>--}}
{{--                            <a href="{{ url()->previous() }}"--}}
{{--                               class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>--}}
{{--                            <x-form-button>Update</x-form-button>--}}
{{--                        </x-form-field>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    @endcan--}}
{{--</x-app-layout>--}}
<x-app-layout>
    <div class="py-12 bg-gradient-to-b from-[#F7F6F3] to-white min-h-screen">
        @can('isAdmin')
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <form action="{{ route('categories.update', $category->id) }}" method="POST"
                      class="bg-white p-8 md:p-10 rounded-2xl shadow-lg border border-[#4A7856]/10">
                    @csrf
                    @method('PUT')

                    <div class="mb-8">
                        <h2 class="text-3xl font-bold text-[#4A7856] mb-2">Edit Category</h2>
                        <p class="text-[#4A7856]/60">Update the information for {{ $category->name }}</p>
                    </div>

                    <div class="space-y-6">
                        <!-- Name -->
                        <x-form-field>
                            <x-form-label for="name">Category Name</x-form-label>

                            <x-form-input type="text" name="name" id="name" value="{{old('name', $category->name)}}"
                                          required/>

                            <x-form-error name="name"/>
                        </x-form-field>

                        <!-- Description -->
                        <x-form-field>
                            <x-form-label for="description">Description</x-form-label>

                            <textarea name="description" id="description" rows="6" required
                                      class="w-full border border-[#A6B8B0]/50 rounded-xl p-4 focus:ring-2 focus:ring-[#4A7856] focus:border-transparent resize-none transition text-[#4A7856]">{{ old('description', $category->description) }}</textarea>

                            <x-form-error name="description"/>
                        </x-form-field>

                        <!-- Buttons -->
                        <div class="flex justify-between items-center pt-8 border-t border-[#A6B8B0]/30">
                            <a href="{{ route('categories') }}"
                               class="inline-flex items-center gap-2 text-[#4A7856] hover:text-[#D6B36A] font-medium transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                                </svg>
                                Cancel
                            </a>
                            <button type="submit"
                                    class="inline-flex items-center gap-2 bg-gradient-to-r from-[#4A7856] to-[#5a8866] text-white px-8 py-3 rounded-xl hover:shadow-lg hover:scale-105 transition-all duration-200 font-semibold">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 13l4 4L19 7"/>
                                </svg>
                                Update Category
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        @endcan
    </div>
</x-app-layout>
