<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestimonyController extends Controller
{
    public function testimony(){
        return view('front.testimony');
    }
}
