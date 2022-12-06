<?php
//statis adalah mempertahankan nilai aslinya

function test(){
    static $angka = 0; //mendefinisikan variabel
    //variabel lokal jika sudah melewati scopenya akan kembali ke nilai awal
    //static mempertahankan nilai diluar scope
    echo "A : {$angka} <br>";
    $a++; //menambahkan fungsi increment
}

test();
test();
test();


?>