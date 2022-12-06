<?php

//cara membuat function
function mgoding(){

}

//function bisa dikategorikan menggunakan public, protected, private
class vscode{
    public function coding_php(){

    }
}

//mencoba buat fungsi sapa teman
function sapa_teman(){
    echo "<h1>Hai gais<h1>";
    echo "<h3>ketemu lagi bersama guweh</h3>";
}

//mencoba membuat fungsi yang ada parameter
function temen($temen_guweh, $umur){
    $temen_1 = "rizki";
    echo "<h2>Heyy disini guweh sama {$temen_guweh}<h2>";
    echo "<h2>Umur die segini {$umur}<h2>";
}

//cara manggil fungsi
//tuliskan nama fungsinya bersama()
sapa_teman();
//jika fungsi menggunakan parameter, harus ditulis saat pemanggilannya
temen("rizki", 20);

//mencoba membuat fungsi menggunakan percabangans
function kasir ($nama, $jumlah){
    echo "<h3>Hai ($nama), Terima kasih telah berkunjung!!<h3>";
    echo "<h3>Jangan lupa kembali lagi<h3>";

    //membuat perulangan menggunakan if (jika jumlah lebih maka akan dapat hadiah)
    if ($jumlah > 10){
        echo "<h3>Gokill, kamu dapat mobil karena telah berkunjung
        sebanyak ($jumlah)kali <h3>";
    }
}
kasir ("Akbar",9)
?>