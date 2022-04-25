<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    const ROOM_TYPE = ['normal', 'standard', 'premium'];
    const STATUS = ['active', 'inactive'];

    public function homestay(){
       return $this->belongsTo(Homestay::class);
    }

    public function bookings(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Booking::class);
    }
}
