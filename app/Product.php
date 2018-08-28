<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Product extends Model
{

    protected $fillable = [
        'name',
        'description',
        'image1',
        'image2',
        'image3',
        'image4',
        'rate',
        'price',
        'count',
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function sum()
    {
        $products = Session::get('products');

        $t = 0;
        if ($products){
            foreach ($products as $p) {
                $t += ($p->price);
            }
            return $t;
        } else
            return $t;

    }
}
