<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'property_id',
        'name',
        'email',
        'phone',
        'message',
    ];

    // Relationship: each order belongs to a property
    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    // Relationship: optional user (if logged in)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
