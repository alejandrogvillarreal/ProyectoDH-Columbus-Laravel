<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = ['name', 'image'];

    public function categories(){
      return $this->belongsToMany(Category::class)->withTimestamps();
    }

}
