<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $table = 'permissions';
    protected $guarded = ['id'];
    protected $dates = ['created_at','updated_at'];

    /** ==============
     * Relations
     * =============== */
    /**
     * The roles that possess the permissions.
     */
    public function roles(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Role::class,'permission_role');
    }
}
