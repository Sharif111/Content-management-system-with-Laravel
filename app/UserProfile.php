<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;


class UserProfile extends Model
{
    protected $guard=[];
    public function user(){
    return $this->belongsTo(User::class);
}
}
