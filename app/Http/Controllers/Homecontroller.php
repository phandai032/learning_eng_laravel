<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;

class Homecontroller extends BaseController
{
    public function show($a,$b){
        echo 'san pham '.$a .': '. $b;
    }
    public function hello() {
        return view('hello');
    }
}
