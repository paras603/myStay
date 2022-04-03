<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];

    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /** functions */
    public function assignRole(Role $role)
    {
        return $this->role()->save($role);
    }

    /**
     *
     * @param $role
     * @param bool $restrictAdmin
     * @return bool
     */
    public function hasRole($role, $restrictAdmin = false): bool
    {
        if (is_string($role)) {
            if($this->isAdmin($restrictAdmin)){
                return true;
            }
            return $this->role->name == $role;
        }
        $user_role = [
            $this->role
        ];
        return !! $role->intersect($user_role)->count();
    }

    /**
     * @param $permission
     * @param bool $restrictAdmin
     * @return bool
     */
    public function havePermission($permission,$restrictAdmin = false): bool
    {
        $role = auth()->user()->role;
        if($restrictAdmin){
            $adminRoles = ['superAdmin'];
        }else{
            $adminRoles = Role::ADMIN_ROLE;
        }
        if(in_array($role->name,$adminRoles))
            if($role->name == 'superAdmin')
            {
                return true;
            }
        return $role->inRole($permission);
    }


    /**
     * @param bool $restrictAdmin
     * @return bool
     */
    public function isAdmin(bool $restrictAdmin = false): bool
    {
        if($restrictAdmin){
            $adminRoles = ['superAdmin'];
        }else{
            $adminRoles = Role::ADMIN_ROLE;
        }
        if(in_array($this->role->name,$adminRoles)){
            return true;
        }
        return false;
    }

    public function role(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Role::class);
    }


}
