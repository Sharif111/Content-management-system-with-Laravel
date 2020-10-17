<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\UserProfile;
use App\Post;
use App\Role;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','email',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile(){
           return $this->hasOne(UserProfile::class);
    }
    public function posts(){
    return $this->hasMany(Post::class,'user_id','id');
    }
    public function roles(){
    return $this->belongsToMany(Role::class,'role_user','user_id','role_id','id');
    }

    /*  public function setUsernameAttribute($username){
        $username=trim(preg_replace("/[^\w\d]+/i", "-",$username), "-")
        ;
        $count=User::where('username','like',"%{$username}%")->count()
        ;
        if($count>0)
            $username=$username."-".($count+1);
        $this->attributes['username']=strtolower($username);
        }
    */

}
