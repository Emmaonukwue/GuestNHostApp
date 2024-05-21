<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApartmentRequest;
use App\Models\Apartment;
use App\Models\Category;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('apartments.create', compact('categories'));
    }

    public function store(StoreApartmentRequest $request)
    {
        $coverImagePath = $request->file('cover_image')->store('images', 'public');
        $mainImagePaths = array_map(function ($image) {
            return $image->store('images', 'public');
        }, $request->file('main_images'));

        $apartment = Apartment::create([
            'title' => $request->title,
            'number_of_guests' => $request->number_of_guests,
            'number_of_bedrooms' => $request->number_of_bedrooms,
            'number_of_kitchens' => $request->number_of_kitchens,
            'amount' => $request->amount,
            'caution_fee' => $request->caution_fee,
            'cover_image' => $coverImagePath,
            'main_images' => $mainImagePaths,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('apartments.index');
    }

    public function index()
    {
        $apartments = Apartment::with('category')->get();
        return view('apartments.index', compact('apartments'));
    }
}