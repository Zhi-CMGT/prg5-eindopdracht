<x-app-layout>
    @can('isAdmin')
        <form action="{{ route('categories.store') }}" method="post">
            @csrf

            <div class="space-y-8">
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Create a New Destination</h2>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                        <x-form-field>
                            <x-form-label for="">Name:</x-form-label>

                            <x-form-input type="text" name="name" id="name" value="{{old('name')}}" required/>

                            <x-form-error name="name"/>
                        </x-form-field>

                        <x-form-field>
                            <x-form-label for="">Description:</x-form-label>

                            <x-form-input type="text" name="description" id="description" value="{{old('description')}}"
                                          required/>

                            <x-form-error name="description"/>
                        </x-form-field>

                        <x-form-field>
                            <a href="{{ route('categories') }}" class="text-sm font-semibold leading-6 text-gray-900">
                                Cancel</a>
                            <x-form-button>Save</x-form-button>
                        </x-form-field>
                    </div>
                </div>
            </div>
        </form>
    @endcan
</x-app-layout>
