<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded=[];
    public function children(){
         return $this->hasMany(Category::class,'parent_id','id');
    }

    public function parent(){
         return $this->belongsTo(Category::class,'parent_id','id');
    }
}
