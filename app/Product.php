<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

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
    ];


    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
