===== intro PHP ====
1.PHP singakatan dari PHP :Hypertext Preprosessor

- PHP adalah bahasa pemrograman yang opensourse
- extension file PHP adalah index.php

==== apa aja yang bisa di buat dengan mengunakan PHP ===

- server-side scripting
- Command line scripting
- Desktop Application

=== file PHP ===

- di awal kode program harus ada (<?php) . lalu di akir kode program juga perlu (?>) (tapi tidak wajib)
- penamaan file PHP tidak ada aturan nya, akantetapi agar mempermudah untuk menjalan kan file php , direkomendasikan tidak mengunakan Spasi
- untuk menampilkan tulisan php , kita bisa mengunakan perintah (echo)

=== tipe data number ===
Ada dua jenis tipe data number

- (int) bilangan bulat decimal(base 10) tidak ada koma
- (float) bilanga pecahan

=== tipe data boolean ===

- tipe data boolean adalah tipe data yang paling sederhana di PHP
- tipe data boolean memiliki 2 nilai (benar atau salah)
- nilai benar dipresentesihak dengan (true)
- nilai salah dipresentesihak dengan (false)

=== tipe data string ===

- tipe data string adalah tipe data yg representasi dari teks
- string bisa mengandung kosong atau banyak karakter
  ==== multiline string ====
- heredoc adalah fitur untuk membuat string yg panjang

===== variable =====

- variable ialah tempat untuk menyimpan data
- variable di PHP bisa menampung berbagai jenis tipe data dan bisa berubah-ubah tipe data nya
- variable di PHP bisa dibuat dengan tanda $(dolar) lalu diikuti dengan nama variable nya
- penamaan nya tidak boleh mengunakan spasi

==== constant =====

- constant adalah tempat utuk menyimpan data yang tidak bisa dubah lagi setelah di deklarasikan
- untuk membuat constant bisa mengunakan fugsi define()

=== Data NULL ====

- nilai NULL merepresentasikan sebuah variable tanpa nilai
- untuk membuat data NULL kita bisa menuggunakan kata kunci NULL(case insensitive)

cara mengecek apakah data itu null

- untuk mengecek nya kita bisa mengunakan function is_null($variable)

menghapus variable

- untuk menghapus variable bisa mengunakan function unset($variable)
- tapi kita juga harus hati-hati dalam menghapus nya karena setelah kita hapus variable itu tidak bisa diakses lagi
- agar lebih aman kita bisa mengunakan function isset($variable) untuk mengecek apakah sebuah variable ada dan nilai nya tidak NULL

==== Tipe Data Array =====

- adalah tipe data yg berisikan kosong atau banyak data
- array di php bisa berisikan data dengan jenis yg berbeda beda
- array di php memiliki panjang dinamis , jadi kita bisa menambah data ke array dengan jumlah yg banyak , dan tidak di batasi kapasitasnya

== operasi array ==

- $array[index] "mengakses data di array pada nomor index"
- $array[index] = value "mengubah data di array pada nomor index dengan value baru"
- $array[] = value "menambah data array pada posisi belakang"
- unset($array[index]) "menghapus data array , index otomatis hilang dari array"
- count($array) "mengambil total data array"

== array sbg Map ==

- di bahasa pemograman lain itu ada tipe data yg nama nya Map , yaitu asosiasi antara key dan value
- namun di PHP Map bisa di buat dengan array
- secara default array akan mengunakan index(number) sebagai key, dan value nya kita bisa bebas untuk mengisi nya
- namun kita ingin, kita juga bisa mengubah index nya tidak harus mengunakan number , bisa mengunakan tipe data yg lain
- hal tersebut terlihat seperti Map di bahasa pemograman yg lain
