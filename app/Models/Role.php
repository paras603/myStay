<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';
    protected $guarded = ['id'];
    protected $dates = ['created_at','updated_at'];

    /** @const */
    const ADMIN_ROLE = ['superAdmin', 'merchant'];

    public static function getDefaultRoleId()
    {
        return Role::where('name','basicUser')->first()->id;
    }
}
