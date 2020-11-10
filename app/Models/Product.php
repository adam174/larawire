<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

     //champ modifiable dans la bdd
      protected $fillable = [
        'name',
        'description',
        'category_id',
        'user_id',
        'condition_id'
    ];


     public function category() {
        return $this->belongsTo('App\Models\Category');
    }

     public function user() {
        return $this->belongsTo('App\Models\User');
    }

     public function condition() {
        return $this->belongsTo('App\Models\Condition');
    }

    public function taker()
    {
        return $this->hasOne(Order::class, 'product_id')->with('user');
    }

}
