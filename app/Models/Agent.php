<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Agent extends Model
// {
//     use HasFactory;

//     protected $fillable = [
//         'user_id', 'agency_name', 'license_no', 'bio'
//     ];

//     public function user(){
//         return $this->belongsTo(User::class);
//     }

//     public function properties(){
//         return $this->hasMany(Property::class);
//     }

    

// }












namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'agency_name',
        'license_no',
        'phone_number',
        'email',
        'address',
        'profile_image',
        'is_verified',
        'bio'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function properties()
    {
        return $this->hasMany(Property::class);
    }
}
