<?php

//array adalah tipe data yang berisi beberapa tipe data(string maupun integer)
//keynya diawali dengan angka 0 dst


//Array asosiatif
//keynya berubah menjadi tipe data string

$siswa = [
    //keynya bisa int/string
    'sipalingganteng' => 'arjuna',
    'sipalingcantik' => 'nita',
    'sipalingnetral' => 'ahmad sandi'
];

//echo "siapa yang paling ganteng? {$siswa['sipalingganteng']}";

//array multidimension
//ada array didalam array

$togel = [
    [1, 2, 3, 4, 5],//0
    [6, 7, 8, 9, 22],//1
    [12, 15, 13, 14, 51],//2
    [19, 21, 31, 47, 35],//3

];

// cara manggil array
//echo $togel[2][4];

//array push
//array


$sayur = ['bayem','kangkung','sawi'];
$buah = ['pisang','kelapa','coklat']; 

array_push($buah, 'timun');

//cara yang kedua
$sayur[] = 'labu';

echo $buah[3];
echo $sayur[3];


?>