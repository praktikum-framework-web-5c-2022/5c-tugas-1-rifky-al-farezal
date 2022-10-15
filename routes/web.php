<?php

use Illuminate\Support\Facades\Route;

Route::get('/dosen', function(){
    $list_dosen = ["Naruto Uzumaki", "Sasuke Uchiha", "Itachi Uchiha", 
    "Boruto Uzumaki", "Kakashi Hatake", "Tobirama Senju",
    "Hashirama Senju", "Sakura Haruno", "Hinata Hyuuga", "Madara Uchiha"];
    return view('dosen')->with('dosen_s', $list_dosen);
});

Route::get('/matakuliah', function(){
    $list_matakuliah = ["Cloud Computing", "Data Mining", "Blockchain", "Machine Learning",
     "PB MobileData Mining", "Framewrok PW", "Algoritma",
    "Technopreneur", "Statistika", "Struktur Data"];
    return view('matakuliah')->with('matakuliah_s', $list_matakuliah);
});

Route::get('/mahasiswa', function(){
    $list_mahasiswa = ["Andi Aja", "Bambang Iya", "Charlie Rahmat",
     "Deden Green", "Fahri Always", "Gani Gani",
    "Hacim Kipuw", "Iya Alfarizi", "Jajang Mendes", "Kevin Biasa"];
    return view('mahasiswa')->with('mahasiswa_s', $list_mahasiswa);
});
