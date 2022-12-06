<?php

$warnaterang = ['kuning','hijau','pink'];
$warnagelap = ['hitam','abu-abu','cokelat'];

//gabungan 2 array tersebut menjadi 1

$warna_warna = array_merge($warnaterang,$warnagelap);

//array_merge bisa ditambahkan lebih dari 2
$semua_warna = array_merge(
    $warnaterang,
    $warnagelap,
    ['magenta','cyan','hijau kelabu']
);

//unpacking untuk mengekstrak array menggunakan ....
$list_buah_lokal = ['mangga','rambutan'];
$list_buah = ['kurma','anggur', $list_buah_lokal , 'kismis'];



//kurma , anggur , mangga , rambutan , kismis

//explode array berfungsi memecah-belah string lalu diubah kedalam array

// explode ada 2 parameter : delimiter (pemisah), string sasaran (sasaran yang akan kita pecah menjadi array)

$siswa = "andi budi dono kasino indro";
//var_dump(explode(" ", $siswa))

// impload fungsi kebalikannya expload
// impload dia 2 parameter : glue , (penggabung), array sasaran (sasaran yang akan kita gabung menjadi string)

$siswa_pintar = ['refa','agus','novan'];//array

$siswa_jago = implode(' ',$siswa_pintar);//implode

echo $siswa_jago;

?>