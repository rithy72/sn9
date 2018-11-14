<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;

    public function category() {
        return $this->belongsTo('App\Category', 'cat_id');
    }

    public function type() {
        return $this->belongsTo('App\Type', 'tid');
    }

    public function brand() {
        return $this->belongsTo('App\Brand', 'bid');
    }

    public function productimages() {
        return $this->hasMany('App\ProductImage', 'pid');
    }

    public function productstatus() {
        return $this->hasMany('App\ProductStatus', 'pid');
    }

    public function productdetails() {
        return $this->hasMany('App\ProductDetail', 'pid');
    }

    public function favoriteproducts() {
        return $this->hasMany('App\FavoriteProduct', 'pid');
    }
}
