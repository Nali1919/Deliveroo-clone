@extends('layouts.dashboard')

@section('content')
<form action="{{ route('admin.restaurants.menus.store', $restaurant_slug) }}" method="post">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input required maxlength="255" type="text" name="name" value="{{ old('name', '') }}">
        @error('name')
            <div class="my-2 bg-danger text-white">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div>
        <label for="description">Description:</label>
        <input required maxlength="255" type="text" name="description" value="{{ old('description', '') }}">
        @error('description')
            <div class="my-2 bg-danger text-white">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div>
        <label for="price">Price:</label>
        <input required maxlength="10" type="number" step="0.1" name="price" value="{{ old('price', '') }}">
        @error('price')
            <div class="my-2 bg-danger text-white">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div>
        <label for="visible">Visible:</label>
        <input  type="checkbox" name="visible" value="{{ old('visible', '') }}">
        @error('visible')
            <div class="my-2 bg-danger text-white">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div>
        <label for="visible">Slug:</label>
        <input  type="text" name="slug" value="{{ old('slug', '') }}">
        @error('visible')
            <div class="my-2 bg-danger text-white">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div>
        <label for="image">Image:</label>
        <input type="file" name="image" disabled>
    </div>
    <input type="submit" value="Create">
</form>





@endsection



