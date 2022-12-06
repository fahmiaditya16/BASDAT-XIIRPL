<?php

// variabel lokal hanya bisa di akses dari scope dimana dia di definisikan
$nama = "guanteng bingitz";

function halodunia(){
    $nama = "Pak Saiful";
    echo $nama;
}

halodunia();
echo $nama;

?>