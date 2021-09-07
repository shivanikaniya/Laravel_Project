<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable = ['category_id', 'name','description','price','stock'];
    public function categoies()
    {
      return $this->belongsTo(Category::class,'parent_id');
    }
    public function image()
  {
    return $this->hasMany('App\Models\Images','product_id');
   
  }

}
