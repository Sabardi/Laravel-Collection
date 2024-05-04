Collection adalah object khusus Laravel yang dipakai untuk menampung data. Atau pengertian
yang lebih sederhana, collection adalah array dengan superpower. atau  Ini sering digunakan untuk memanipulasi array dari hasil query database atau set data lainnya. Laravel Collections menawarkan banyak metode bawaan yang memungkinkan kita untuk melakukan operasi umum seperti filter, map, reduce, dan banyak lagi, dengan cara yang jauh lebih mudah dan lebih bersih dibandingkan dengan manipulasi array biasa.
Namun karena merupakan sebuah object, collection
memiliki berbagai method bawaan (total tersedia 116 method yang bisa kita pakai). Jika Laravel
meng-generate data dalam jumlah banyak, besar kemungkinan itu disajikan dalam bentuk
collection, bukan array biasa. 

seperti contoh nya ketika kita ingin mengambil data dari database  di php biasa kita harus melakukan select * from ....... dan selain nya.

contoh penggunaan collaccionini juga adalah saat mengirim inputan data dari form. 

Tentu, berikut adalah penjelasan singkat untuk setiap metode yang disediakan oleh Laravel Collection:

colaction bye chat gpt hahha 
1. **aggregate()**: Menghitung hasil agregat pada collection, seperti rata-rata, jumlah, maksimum, minimum, dll.
2. **all()**: Mengembalikan semua item dalam collection.
3. **average()**: Menghitung rata-rata dari semua nilai dalam collection.
4. **avg()**: Alias untuk metode average().
5. **chunk()**: Membagi collection menjadi potongan-potongan tertentu.
6. **collapse()**: Menggabungkan array multi-dimensi menjadi satu dimensi.
7. **combine()**: Menggabungkan dua array menjadi satu array asosiatif.
8. **concat()**: Menggabungkan collection dengan collection lain.
9. **contains()**: Memeriksa apakah collection mengandung nilai tertentu.
10. **containsStrict()**: Memeriksa apakah collection mengandung nilai tertentu secara ketat (dengan tipe data yang sama).
11. **count()**: Menghitung jumlah item dalam collection.
12. **crossJoin()**: Menggabungkan setiap item dalam collection dengan setiap item dalam collection lainnya.
13. **dd()**: Dump dan die; mirip dengan var_dump() namun berhenti eksekusi setelah itu.
14. **diff()**: Mengambil selisih antara dua collection.
15. **diffAssoc()**: Mengambil selisih asosiatif antara dua collection.
16. **diffKeys()**: Mengambil selisih kunci antara dua collection.
17. **dump()**: Dump collection dan lanjutkan eksekusi.
18. **each()**: Melakukan iterasi pada setiap item dalam collection dengan callback tertentu.
19. **eachSpread()**: Mirip dengan each(), namun menerima argumen yang tersebar sebagai parameter callback.
20. **every()**: Memeriksa apakah semua item dalam collection memenuhi kriteria tertentu.
21. **except()**: Menghilangkan item tertentu dari collection berdasarkan kunci.
22. **filter()**: Memfilter item dalam collection berdasarkan kriteria tertentu.
23. **first()**: Mengambil item pertama dalam collection.
24. **firstWhere()**: Mengambil item pertama dalam collection yang memenuhi kondisi tertentu.
25. **flatMap()**: Mirip dengan map(), namun menggabungkan hasilnya menjadi satu collection.
26. **flatten()**: Mengubah collection multi-dimensi menjadi satu dimensi.
27. **flip()**: Menukar kunci dan nilai dalam collection.
28. **forget()**: Menghapus item dari collection berdasarkan kunci.
29. **forPage()**: Mengambil sejumlah item dari halaman tertentu dari collection.
30. **get()**: Mengambil item dari collection berdasarkan kunci.
31. **groupBy()**: Mengelompokkan item dalam collection berdasarkan kriteria tertentu.
32. **has()**: Memeriksa apakah collection mengandung kunci tertentu.
33. **implode()**: Menggabungkan nilai-nilai dalam collection menjadi satu string.
34. **intersect()**: Mengambil irisan antara dua collection.
35. **intersectByKeys()**: Mengambil irisan kunci antara dua collection.
36. **isEmpty()**: Memeriksa apakah collection kosong.
37. **isNotEmpty()**: Memeriksa apakah collection tidak kosong.
38. **keyBy()**: Mengindeks collection berdasarkan kriteria tertentu.
39. **keys()**: Mengambil semua kunci dari collection.
40. **last()**: Mengambil item terakhir dalam collection.
41. **macro()**: Mendaftarkan macro baru untuk Collection.
42. **map()**: Mengaplikasikan callback ke setiap item dalam collection dan mengembalikan collection baru dari hasil callback tersebut.
43. **mapInto()**: Mirip dengan map(), namun menginstansiasi objek baru dengan hasilnya.
44. **mapSpread()**: Mirip dengan map(), namun menerima argumen yang tersebar sebagai parameter callback.
45. **mapToGroups()**: Mirip dengan map(), namun mengelompokkan hasilnya.
46. **mapWithKeys()**: Mirip dengan map(), namun mengembalikan collection asosiatif.
47. **max()**: Mengambil nilai maksimum dari collection.
48. **median()**: Mengambil nilai median dari collection.
49. **merge()**: Menggabungkan collection dengan collection lain.
50. **mergeRecursive()**: Menggabungkan collection secara rekursif.
51. **min()**: Mengambil nilai minimum dari collection.
52. **mode()**: Mengambil nilai modus dari collection.
53. **nth()**: Mengambil setiap n-th item dari collection.
54. **only()**: Mengambil item tertentu dari collection berdasarkan kunci.
55. **pad()**: Membuat collection baru dengan item yang diulang sebanyak yang ditentukan.
56. **partition()**: Memisahkan collection menjadi dua collection berdasarkan kriteria tertentu.
57. **pipe()**: Meneruskan collection melalui pipeline dari fungsi callable.
58. **pluck()**: Mengambil semua nilai dari field tertentu dalam collection.
59. **pop()**: Menghapus dan mengembalikan item terakhir dari collection.
60. **prepend()**: Menambahkan item ke awal collection.
61. **pull()**: Menghapus dan mengembalikan item dari collection berdasarkan kunci.
62. **push()**: Menambahkan item ke akhir collection.
63. **put()**: Menetapkan nilai untuk kunci tertentu dalam collection.
64. **random()**: Mengambil item acak dari collection.
65. **reduce()**: Reduksi collection menjadi satu nilai dengan callback tertentu.
66. **reject()**: Memfilter item dalam collection dengan kondisi negatif.
67. **replace()**: Menggantikan nilai dalam collection dengan nilai baru.
68. **replaceRecursive()**: Menggantikan nilai dalam collection secara rekursif.
69. **reverse()**: Membalik urutan item dalam collection.
70. **search()**: Mencari nilai tertentu dalam collection dan mengembalikan kuncinya.
71. **shift()**: Menghapus dan mengembalikan item pertama dari collection.
72. **shuffle()**: Mengacak urutan item dalam collection.
73. **skip()**: Melewati sejumlah item dari awal collection.
74. **slice()**: Mengambil sejumlah item dari awal atau akhir collection.
75. **some()**: Memeriksa apakah setidaknya satu item dalam collection memenuhi kondisi tertentu.
76. **sort()**: Mengurutkan collection.
77. **sortBy()**: Mengurutkan collection berdasarkan kriteria tertentu.
78. **sortByDesc()**: Mengurutkan collection berdasarkan kriteria tert

entu secara descending.
79. **splice()**: Menghapus dan/atau menambahkan item dalam collection pada posisi tertentu.
80. **split()**: Membagi collection menjadi dua collection berdasarkan kondisi tertentu.
81. **sum()**: Menjumlahkan semua nilai dalam collection.
82. **take()**: Mengambil sejumlah item dari awal collection.
83. **tap()**: Menjalankan callback pada collection dan mengembalikan collection itu sendiri.
84. **times()**: Membuat collection baru dengan item yang dihasilkan sejumlah tertentu.
85. **toArray()**: Mengubah collection menjadi array.
86. **toJson()**: Mengubah collection menjadi JSON.
87. **transform()**: Mengubah item dalam collection menggunakan callback tertentu.
88. **union()**: Menggabungkan collection dengan collection lain tanpa duplikasi.
89. **unique()**: Menghapus nilai duplikat dari collection.
90. **uniqueStrict()**: Menghapus nilai duplikat dari collection secara ketat (dengan tipe data yang sama).
91. **unless()**: Mirip dengan when(), namun berfungsi sebagai kebalikan dari kondisi.
92. **unwrap()**: Mengembalikan nilai dari collection jika hanya terdiri dari satu item.
93. **values()**: Mengambil semua nilai dari collection.
94. **when()**: Menjalankan callback pada collection berdasarkan kondisi tertentu.
95. **where()**: Memfilter item dalam collection berdasarkan kondisi tertentu.
96. **whereStrict()**: Memfilter item dalam collection secara ketat berdasarkan kondisi tertentu.
97. **whereBetween()**: Memfilter item dalam collection berdasarkan rentang nilai tertentu.
98. **whereNotBetween()**: Memfilter item dalam collection berdasarkan rentang nilai tertentu yang tidak termasuk.
99. **whereIn()**: Memfilter item dalam collection berdasarkan kumpulan nilai tertentu.
100. **whereNotIn()**: Memfilter item dalam collection berdasarkan kumpulan nilai tertentu yang tidak termasuk.
101. **whereInstanceOf()**: Memfilter item dalam collection berdasarkan instansi dari kelas tertentu.
102. **whereNull()**: Memfilter item dalam collection berdasarkan nilai null.
103. **whereNotNull()**: Memfilter item dalam collection berdasarkan nilai yang tidak null.
104. **whereDate()**: Memfilter item dalam collection berdasarkan tanggal.
105. **whereMonth()**: Memfilter item dalam collection berdasarkan bulan.
106. **whereDay()**: Memfilter item dalam collection berdasarkan hari.
107. **whereYear()**: Memfilter item dalam collection berdasarkan tahun.
108. **whereTime()**: Memfilter item dalam collection berdasarkan waktu.
109. **with()**: Memasukkan item tambahan ke dalam collection.
110. **wrap()**: Mengubah nilai menjadi collection jika belum collection.
111. **zip()**: Menggabungkan dua collection bersama dengan array lainnya dalam tuple.
112. **macro()**: Mendaftarkan macro baru untuk Collection.
113. **macroCall()**: Menjalankan macro yang telah didaftarkan.
114. **collect()**: Membuat collection baru.
115. **make()**: Membuat collection baru dari array.
116. **cursor()**: Memproses item collection secara lazy dan efisien.

Setiap metode ini menyediakan fungsionalitas yang unik dan berguna dalam manipulasi data dalam Collection. Dengan menggunakan kombinasi dari berbagai metode ini, Anda dapat mengelola dan memanipulasi data dengan sangat efisien dalam aplikasi Laravel Anda.


1. membuat collection
buatlah file controller bernama CollectionController dengan perintah php artisan make:controller CollectionController (menyala abangku); kemudian seperti bisaa buka folder app/Http/Controllers/CollectionController.php

eitsss jangan lupa untuk membuatkan routes nya dikarenakan apapun yg kita inginkan itu selalu melalui route terlebih dahulu. route ini di ibaratkan pelang jalan kita mau kemana hahah. cara nya seperti biasa seperti tutorial sebelum nya

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollectionController;

Route::get('/satu', [CollectionController::class,'satu']);
Route::get('/dua', [CollectionController::class,'dua']);
Route::get('/tiga', [CollectionController::class,'tiga']);
Route::get('/empat', [CollectionController::class,'empat']);

cara nya jangan di ikutin ya karna lagi males ngetik untuk nentuin kelas nya kalian bisa membuat nya dengan collectionsatu dan seterus nya

selanjut nya tinggal kita buat aja public function nya

    public function satu(){
        $myarray = [1,2,3,4,5,6,7,8,9,10,11,12];
        $colaction = collect($myarray);

        echo "<pre>";
        var_dump($colaction);
        echo "</pre>";
    }

disini  seperti biasa membuat sebuah variabel yang menampung nilai nya 
si array membuat variable lagi  untuk menyimpan data yang akan di collacction disini kita menggunakan collaction nya hasil nya tidak jauh beda dengan kita menampilkan array nya.



2. mengakses collaction
untuk mengakses collaction 
cara nya sama dengan mengakses array biasa Selain itu collection juga bisa diakses menggunakan perulangan
foreach.
tidak jauh beda pasti nya.

    public function dua(){

        $colaction = [1,2,3,4,5,6,7,8,9,10,11,12];
        echo $colaction[0]; echo "<br>";
        echo $colaction[1]; echo "<br>";
        echo $colaction[2]; echo "<br>";

        foreach($colaction as $collact){
            echo "$collact";
        }

    }

nah bagaimana jika berbeda tipe data? hmm penasaran pasti nya

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

tidak jauh beda kan jangan lupa titik koma di akhir collaction nya ada kurung siku tutup dan kurung tutup (mksd lu apa min haahh) collaction([]) ini ges


jika penggunaan method nya nanti ya di saat latihan CRUD nya berlaku method collaction ini


3. Nested Array Collection Method
Beberapa method bawaan collection ada yang lebih cocok dipakai untuk element yang lebih
kompleks

Struktur seperti ini
sebagai simulasi data yang berasal dari tabel MySQL. 
    public function tiga(){
        $collaction = collect([
            ['NamaProduk' => 'Laptop Azus', 'harga' => 60000000],
            ['NamaProduk' => 'smartphon', 'harga' => 30000000],
            ['NamaProduk' => 'airpod', 'harga' => 5000000]
        ]);

        dump($collaction);
    }

kita bisa mengurutkan data nya juga  menggunakan method  sortBY() dan sortbyDESc()

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

    }
