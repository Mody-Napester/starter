<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermissionGroup extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'created_by', 'updated_by'];

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
     *  Create new resource
     */
    public static function store($inputs)
    {
        $resource = new PermissionGroup();
        return $resource->create($inputs);
    }

    /**
     *  Update existing resource
     */
    public static function edit($inputs, $resource)
    {
        $resource = new PermissionGroup();
        return $resource->where('id', $resource)->update($inputs);
    }

    /**
     *  Get a specific resource
     */
    public static function getBy($by, $resource)
    {
        $resource = new PermissionGroup();
        return $resource->where($by, $resource)->first();
    }

    /**
     *  Relationship with users
     */
    public function createdBy()
    {
        return $this->belongsTo('App\User', 'created_by');

    }

    /**
     *  Relationship with users
     */
    public function updatedBy()
    {
        return $this->belongsTo('App\User', 'updated_by');

    }

    /**
     *  Relationship with Permissions
     */
    public function permissions()
    {
        return $this->belongsToMany('App\Permission', 'permissions');

    }

}
