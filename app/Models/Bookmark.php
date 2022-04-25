<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function homestay(){
        return $this->belongsTo(Homestay::class, 'homestay_id', 'id');
    }

}


