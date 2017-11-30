<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function meja(){
        return $this->belongsTo('App\Meja');
    }

    public function user(){
        return $this->hasMany('App\User');
    }

    protected $fillable = [
        'waktu', 'meja_id', 'user_id'
    ];
}
