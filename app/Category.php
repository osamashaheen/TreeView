<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $fillable = ['title' , 'parent_id'];

    public function parents(){
        return $this->hasMany(Category::class , 'parent_id' , 'id');
    }
}
