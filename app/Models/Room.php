<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    const ROOM_TYPE = ['normal', 'standard', 'premium'];

    public function homestay(){
        $this->belongsTo(Homestay::class);
    }
}
