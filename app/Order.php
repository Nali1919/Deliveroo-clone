<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = ['total', 'address'];

    public function menu()
    {
        return $this->belongsToMany('App\menu');
    }
}
