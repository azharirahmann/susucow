<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetController extends Controller
{
    public function getImage($location, $filename){
        $image = storage_path('app/public/'.$location). '/' . $filename;
        return response()->file($image);
    }
}
