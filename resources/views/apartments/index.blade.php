@extends('layouts.app')

@section('content')
    <h1>Apartment Listings</h1>
    @foreach($apartments as $apartment)
        <div>
            <h2>{{ $apartment->title }}</h2>
            <p>Category: {{ $apartment->category->name }}</p>
            <p>Guests: {{ $apartment->number_of_guests }}</p>
            <p>Bedrooms: {{ $apartment->number_of_bedrooms }}</p>
            <p>Kitchens: {{ $apartment->number_of_kitchens }}</p>
            <p>Amount: ${{ $apartment->amount }}</p>
            <p>Caution Fee: ${{ $apartment->caution_fee }}</p>
            <img src="{{ Storage::url($apartment->cover_image) }}" alt="Cover Image" width="200">
            @foreach($apartment->main_images as $image)
                <img src="{{ Storage::url($image) }}" alt="Main Image" width="100">
            @endforeach
        </div>
    @endforeach
@endsection
