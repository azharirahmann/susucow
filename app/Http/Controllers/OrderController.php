<?php

namespace App\Http\Controllers;

use App\Meja;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create(){
        return view ('backend.user.order.create');
    }

    public function book(){
        return view ('backend.user.booking');
    }
}
