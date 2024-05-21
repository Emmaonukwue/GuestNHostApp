@extends('layouts.app')

@section('content')
    <h1>Create Apartment</h1>
    <form action="{{ route('apartments.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
            @error('title')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="number_of_guests">Number of Guests</label>
            <input type="number" name="number_of_guests" id="number_of_guests" value="{{ old('number_of_guests') }}">
            @error('number_of_guests')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="number_of_bedrooms">Number of Bedrooms</label>
            <input type="number" name="number_of_bedrooms" id="number_of_bedrooms" value="{{ old('number_of_bedrooms') }}">
            @error('number_of_bedrooms')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="number_of_kitchens">Number of Kitchens</label>
            <input type="number" name="number_of_kitchens" id="number_of_kitchens" value="{{ old('number_of_kitchens') }}">
            @error('number_of_kitchens')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="amount">Amount</label>
            <input type="text" name="amount" id="amount" value="{{ old('amount') }}">
            @error('amount')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="caution_fee">Caution Fee</label>
            <input type="text" name="caution_fee" id="caution_fee" value="{{ old('caution_fee') }}">
            @error('caution_fee')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="cover_image">Cover Image</label>
            <input type="file" name="cover_image" id="cover_image">
            @error('cover_image')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="main_images">Main Images</label>
            <input type="file" name="main_images[]" id="main_images" multiple>
            @error('main_images')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="category_id">Category</label>
            <select name="category_id" id="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Create</button>
    </form>
@endsection
