<x-app-layout>
    @can('isAdmin')
        <form action="{{ route('destinations.update', $destination) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="space-y-8">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">
                        Edit Destination</h2>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <x-form-field>
                            <x-form-label for="">Name:</x-form-label>

                            <x-form-input
                                type="text"
                                name="name"
                                id="name"
                                value="{{old('name', $destination->name)}}"
                                required/>

                            <x-form-error name="name"/>
                        </x-form-field>

                        <x-form-field>
                            <x-form-label for="">Coordinate:</x-form-label>

                            <x-form-input
                                type="text"
                                name="coordinate"
                                id="coordinate"
                                value="{{old('coordinate', $destination->coordinate)}}"
                                required/>

                            <x-form-error name="coordinate"/>
                        </x-form-field>

                        <x-form-field>
                            <x-form-label>Category:</x-form-label>

                            <select name="category_id" id="category_id">
                                @foreach($categories as $category)
                                    <option
                                        value="{{ $category->id }}"
                                        {{ $destination->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </x-form-field>

                        <x-form-field>
                            <x-form-label for="">Description:</x-form-label>

                            <x-form-input
                                type="text"
                                name="description"
                                id="description"
                                value="{{old('description', $destination->description)}}"
                                required/>

                            <x-form-error name="description"/>
                        </x-form-field>

                        <x-form-field>
                            <a href="{{ url()->previous() }}"
                               class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                            <x-form-button>Update</x-form-button>
                        </x-form-field>
                    </div>
                </div>
            </div>
        </form>
    @endcan
</x-app-layout>
