<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'stock', 'image', 'category_id', 'brand_id'];

    public function brand(){
      return $this->belongsTo(Brand::class);
    }

    public function category(){
      return $this->belongsTo(Category::class);
    }

    public function colors(){
      return $this->belongsToMany(Color::class)->withTimestamps();
    }

    public function sizes(){
      return $this->belongsToMany(Size::class)->withTimestamps();
    }

    public function user(){
      return $this->belongsTo(User::class);
    }

}
