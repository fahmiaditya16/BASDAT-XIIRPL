<?php
//Pewarisan atau Inheritance


//class induk
class komputer{
    //property
    public $merk;
    public $prosesor;
    public $memory;

    //fungsi/operasi membuat beli komputer
    public function beli_komputer(){
        return "Beli komputer baru";
    }

}

//kelas turunan / extends dari class komputer ke class laptop
class laptop extends komputer{
    public function lihat_spek(){
        return "merk: $this->merk, prosesor;
        $this->prosesor, memory: $this->memory";
    }
}
//Instansiasi
//membuat objek baru dari class laptop (kelas turunan)
$laptop_baru = new laptop();

//isi property
$laptop_baru->merk = "asus";
$laptop_baru->prosesor = "AMD Ryzen 9X";
$laptop_baru->memory = "1 PetaByte";

//panggil functionnya
echo $laptop_baru->beli_komputer();
echo "<br/>";
echo $laptop_baru->lihat_spek();

?>