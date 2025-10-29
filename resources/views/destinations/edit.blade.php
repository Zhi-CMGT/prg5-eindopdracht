<x-app-layout>
    <form action="{{ route('destinations.update', $destination) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="">Name: </label>
            <input type="text" name="name" id="name" value="{{old('name', $destination->name)}}">

            @error('name')
            <div class="alert alert-danger"> {{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="">Coordinate: </label>
            <input type="text" name="coordinate" id="coordinate"
                   value="{{old('coordinate', $destination->coordinate)}}">

            @error('coordinate')
            <div class="alert alert-danger"> {{ $message }}</div>
            @enderror
        </div>

        <div>
            <p>Category: </p>
            <select name="category_id" id="category_id">
                @foreach($categories as $category)
                    <option
                        value="{{ $category->id }}"
                        {{ $destination->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="">Description: </label>
            <input type="text" name="description" id="description"
                   value="{{old('description', $destination->description)}}">

            @error('description')
            <div class="alert alert-danger"> {{ $message }}</div>
            @enderror
        </div>

        <div>
            <button type="submit">Update</button>
        </div>
    </form>
</x-app-layout>
