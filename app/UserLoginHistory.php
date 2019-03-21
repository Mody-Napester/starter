<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLoginHistory extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'login_ip', 'login_data', 'login_date_time', 'logout_date_time'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    // Add login history
    public static function addLoginHistory($user = null){
        if (is_null($user)){
            if (auth()->check()){
                $user = auth()->user();
            }else{
                return false;
            }
        }

        if (User::find($user->id)){
            $result = self::create([
                'user_id' => $user->id,
                'login_ip' => get_client_ip(),
                'login_data' => json_encode(get_browser(null, true)),
            ]);

            return $result;
        }else{
            return false;
        }

    }
}
