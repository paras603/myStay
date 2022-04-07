<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    const VERIFIED = ['yes', 'no'];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function homestay(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Homestay::class, 'merchant_id', 'id');
    }
}
