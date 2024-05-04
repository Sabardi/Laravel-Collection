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

        $colaction = [1,2,3,4,5,6,7,8,9,10,11,12];
        echo $colaction[0]; echo "<br>";
        echo $colaction[1]; echo "<br>";
        echo $colaction[2]; echo "<br>";

        foreach($colaction as $collact){
            echo "$collact";
        }
        // Collection dari berbagai tipe data
        $collection = collect(["belajar", "laravel", 1, 2, 3]);
        echo "<br>";
        echo "$collection";

        // Collection dari associative array
        $data = collect(
            [
                "nama" => "Sabardi",
                "alamat" => "Bagu",
                "umur" => 20,
                "pekerjaan" => "Mahasiswa"
            ]);

            echo "<br>";
            echo "$data";
    }

    public function tiga(){
    }

    public function empat(){

    }

}
