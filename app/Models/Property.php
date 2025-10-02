<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Property extends Model
// {
//     use HasFactory;

// protected $fillable = [
//         'user_id',
//         'title',
//         'description',
//         'price',
//         'type',
//         'property_type',
//         'bedrooms',
//         'bathrooms',
//         'area',
//         'address',
//         'latitude',
//         'longitude',
//         'status',
//         'published_at', // e.g., available, sold, rented
//     ];

//     public function agent()
//     {
//         return $this->belongsTo(Agent::class);
//     }

//     public function images()
//     {
//         return $this->hasMany(PropertyImage::class);
//         // put value here
//     } 

//     public function favorites()
//     {
//         return $this->hasMany(Favorite::class);
//     }

//     public function inquiries()
//     {
//         return $this->hasMany(Inquiry::class);
//     }

//     public function reviews()
//     {
//         return $this->hasMany(Review::class);
//     }
// }














namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'agent_id',
        'title',
        'description',
        'price',
        'type',
        'property_type',
        'status',
        'bedrooms',
        'bathrooms',
        'area',
        'address',
        'latitude',
        'longitude',
        'amenities',
        'published_at',
    ];

    // Cast the amenities column to an array
    protected $casts = [
        'amenities' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function images()
    {
        return $this->hasMany(PropertyImage::class);
    }
}