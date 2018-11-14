<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Productdetail extends Model
{
    protected $fillable = ['barcode'];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }


}
