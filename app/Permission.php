<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     *  Setup model event hooks
     */
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string) \Webpatser\Uuid\Uuid::generate(4);
        });
    }

    /**
     *  Relationship with Permission groups
     */
    public function permission_groups()
    {
        return $this->belongsToMany('App/PermissionGroup', 'permission_group_permission');
    }

    /**
     *  Relationship with Roles
     */
    public function roles()
    {
        return $this->belongsToMany('App/Role', 'permission_role');
    }
}
