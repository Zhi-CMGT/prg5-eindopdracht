<x-app-layout>
    @can('isAdmin')
        <form action="{{ route('destinations.store') }}" method="post">
            @csrf
            {{--        Cross-Site Request Forgery voegt automatisch een verborgen token toe aan je formulier ter bescherming--}}
            {{--        van aanvallen.--}}

            <div class="space-y-8">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Create a New Destination</h2>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <x-form-field>
                            <x-form-label for="name">Name:</x-form-label>

                            <div class="mt-2">
                                <x-form-input name="name" id="name" value="{{old('name')}}" required/>

                                <x-form-error name="name"/>
                            </div>
                        </x-form-field>

                        <x-form-field>
                            <x-form-label for="coordinate">Coordinate:</x-form-label>

                            <x-form-input type="text" name="coordinate" id="coordinate" value="{{old('coordinate')}}"
                                          required/>

                            <x-form-error name="coordinate"/>
                        </x-form-field>

                        <x-form-field>
                            <x-form-label>Category:</x-form-label>

                            <select name="category_id" id="category_id">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </x-form-field>

                        <x-form-field>
                            <x-form-label for="">Description:</x-form-label>

                            <x-form-input type="text" name="description" id="description" value="{{old('description')}}"
                                          required/>

                            <x-form-error name="description"/>
                        </x-form-field>

                        <x-form-field>
                            <div class="mt-6 flex items-center justify-between gap-x-6">
                                <a href="{{ route('destinations') }}"
                                   class="text-sm font-semibold leading-6 text-gray-900">
                                    Cancel</a>

                                <x-form-button>Save</x-form-button>
                            </div>
                        </x-form-field>
                    </div>
                </div>
            </div>
        </form>
    @endcan

</x-app-layout>
