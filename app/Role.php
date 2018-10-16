<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
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
            $model->uuid = (string) Uuid::generate(4);
        });
    }

    /**
     *  Relationship with Permissions
     */
    public function permissions()
    {
        return $this->belongsToMany('App/Permission', 'permission_role');
    }

    /**
     *  Relationship with Users
     */
    public function users()
    {
        return $this->belongsToMany('App/User', 'role_user');
    }
}