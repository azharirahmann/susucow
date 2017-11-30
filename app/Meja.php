<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meja extends Model
{
    protected $fillable = [
        'nomor_meja', 'kapasitas'
    ];

    public function order(){
        return $this->hasMany('App\Order');
    }
}
