<?php

// ============ program hello world ==========
// echo "Hello World";


// ========= tipe data number ========
// tipe data number int
// echo "decimal : ";
// var_dump(1234);

// echo "octal : ";
// var_dump(01234);

// echo "hexadecimal : ";
// var_dump(0x1A);

// echo "binary : ";
// var_dump(0b11111);

// echo "underscore in number : ";
// var_dump(1_345_321);

// tipe data number float 

// echo "Floating pint ; ";
// var_dump(1.234);

// ========= tipe data boolean ========

// echo "benar : ";
// var_dump(true);

// echo "salah : ";
// var_dump(false);

// ========= tipe data string ========
// single quote
// echo 'nama : ';
// echo 'arga';
// echo "\n";

// double quote
// bisa mengunakan escape sequence untuk beberapa hal, (\n) untuk enter (\t) untuk tab dll
// echo "nama : ";
// echo "furqan\n";

// heredoc
// echo <<<SAN
// ini adalah contoh string yg 
// sangat panjang, dan juga gak perlu
// ngetik ENTER secara manual, "bisa quote" jg
// SAN;

// newdoc
// echo <<<'SAN'
// ini adalah contoh string yg 
// sangat panjang, dan juga gak perlu
// ngetik ENTER secara manual, "bisa quote" jg
// ini adalah contoh string yg 
// sangat panjang, dan juga gak perlu
// ngetik ENTER secara manual, "bisa quote" jg
// SAN;


// ==== variable ===
// $nama = "arga";
// $age = 16;

// echo "Nama : ";
// echo $nama;
// echo "\n";

// echo "Umur : ";
// echo $age;
// echo "\n";

// ===== constant ====
// define("NAMA", "arga hidarta");

// echo NAMA;
// echo "\n";

// $ism = "araga";

// $ism = null;

// echo $ism;
// untuk mengecek apakah data ini null atau tidak
// echo is_null($ism);

// cara hapus variale

// $ism = "araga";
// unset($ism);
// var_dump(isset($ism));

// ==== tipe data array ====
$no = array(1,2,3,4);

var_dump($no);

$nama = ["arga", "fian", "udin"];
var_dump($nama);