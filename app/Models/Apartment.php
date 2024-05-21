<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'number_of_guests',
        'number_of_bedrooms',
        'number_of_kitchens',
        'amount',
        'caution_fee',
        'cover_image',
        'main_images',
        'category_id',
    ];

    protected $casts = [
        'main_images' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}