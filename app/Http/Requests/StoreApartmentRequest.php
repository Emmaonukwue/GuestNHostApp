<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreApartmentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'number_of_guests' => 'required|integer|min:1',
            'number_of_bedrooms' => 'required|integer|min:1',
            'number_of_kitchens' => 'required|integer|min:0',
            'amount' => 'required|numeric|min:0',
            'caution_fee' => 'nullable|numeric|min:0',
            'cover_image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'main_images' => 'required|array|min:4',
            'main_images.*' => 'image|mimes:jpg,png,jpeg|max:2048',
            'category_id' => 'required|exists:categories,id',
        ];
    }
}