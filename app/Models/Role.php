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

    /** ==============
     * Methods
     * =============== */
    /**
     * @param $permission
     * @return mixed
     */
    public function inRole($permission)
    {
        if (is_string($permission)) {
            return $this->permissions->contains('name', $permission);
        }
        return false;
    }

    /**
     * Check whether the role contains the provided permission or not
     *
     * @param $permission
     * @return boolean
     *
     */
    public function containsPermission($permission): bool
    {
        return $this->permissions->contains($permission);
    }

    /** ==============
     * Relations
     * =============== */

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function permissions(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Permission::class,'permission_role');
    }



}
