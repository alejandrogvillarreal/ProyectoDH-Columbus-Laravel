<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = ['name', 'image'];

    public function category(){
      return $this->belongsTo(Category::class);
    }
}
