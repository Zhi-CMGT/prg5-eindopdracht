<x-app-layout>
    <form action="{{ route('categories.store') }}" method="post">
        @csrf
        <div>
            <label for="">Name: </label>
            <input type="text" name="name" id="name">

            <input type="submit" name="submit" value="{{old('name')}}">

            @error('name')
            <div class="alert alert-danger"> {{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="">Description: </label>
            <input type="text" name="description" id="description">

            <input type="submit" name="submit" value="{{old('description')}}">

            @error('description')
            <div class="alert alert-danger"> {{ $message }}</div>
            @enderror
        </div>

        <div>
            <a href="{{ route('categories') }}">Go Back</a>
            <button type="submit">Save</button>
        </div>

    </form>
</x-app-layout>
