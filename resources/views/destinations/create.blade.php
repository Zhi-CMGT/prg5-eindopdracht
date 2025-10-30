<x-app-layout>
    <form action="{{ route('destinations.store') }}" method="post">
        @csrf
        {{--        Cross-Site Request Forgery voegt automatisch een verborgen token toe aan je formulier ter bescherming--}}
        {{--        van aanvallen.--}}
        <div>
            <label for="">Name: </label>
            <input type="text" name="name" id="name">

            <input type="submit" name="submit" value="{{old('name')}}">

            @error('name')
            <div class="alert alert-danger"> {{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="">Coordinate: </label>
            <input type="text" name="coordinate" id="coordinate">

            <input type="submit" name="submit" value="{{old('coordinate')}}">

            @error('coordinate')
            <div class="alert alert-danger"> {{ $message }}</div>
            @enderror
        </div>

        <div>
            <p>Category: </p>
            <select name="category_id" id="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
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
            <a href="{{ route('destinations') }}">Go Back</a>
            <button type="submit">Save</button>
        </div>

    </form>
</x-app-layout>
