<x-app-layout>
    <form action="{{ route('destinations.store') }}" method="post">
        @csrf

        <label for="">Name</label>
        <input type="text" name="name" id="name">

        <input type="submit" name="submit" value="create">

        @error('name')
        <div class="alert alert-danger"> {{ $message }}</div>
        @enderror

        <label for="">Description</label>
        <input type="text" name="description" id="description">

        <input type="submit" name="submit" value="{{old('description')}}">

        @error('description')
        <div class="alert alert-danger"> {{ $message }}</div>
        @enderror
    </form>
</x-app-layout>
