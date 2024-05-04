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
        $collaction = collect([
            ['NamaProduk' => 'Laptop Azus', 'harga' => 60000000],
            ['NamaProduk' => 'smartphon', 'harga' => 30000],
            ['NamaProduk' => 'airpod', 'harga' => 5000000]
        ]);

        dump($collaction);
        dump($collaction->sortBy('harga'));
        // dari termurah sampai termahal

        dump($collaction->sortByDesc('harga'));
        // dari termahal sampai termurah

        // melakukan filtering data biasa nya di gunakan di database
        $harga = $collaction->filter(function ($value , $key){
            return $value['harga']>200000;
        });
        dump($harga);
    }

    public function empat(){

    }

}
