<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    //
    public function satu(){
        $myarray = [1,2,3,4,5,6,7,8,9,10,11,12];
        $colaction = collect($myarray);

        echo "<pre>";
        var_dump($colaction);
        echo "</pre>";
    }

    public function dua(){

    }

    public function tiga(){

    }

    public function empat(){

    }

}
