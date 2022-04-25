<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homestay extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'homestays';


    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function merchant(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Merchant::class, 'merchant_id', 'id');
    }

    public function homestayImages(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(HomestayImage::class, 'homestay_id', 'id');
    }

    public function homestayImage(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(HomestayImage::class);
    }

    public function rooms(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Room::class);
    }

    public function featured(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Feature::class);
    }

    public function bookmarks(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Bookmark::class);
    }

}
