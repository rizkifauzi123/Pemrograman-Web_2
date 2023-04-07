<?php

class fruit {
    // membuat property 
    public $name;
    public $color;
    public $flavor;

    //membuat method
    public function getName(){
        return $this->name;
    }
    public function getInfo(){
        return "Buah = ". $this->name . "<br>Warna = " . $this->color . "<br>Rasa = " . $this->flavor;    
    }
} 

//membuat object / instance 
$fruit1 = new fruit ();
$fruit1->name = "Semangka";
$fruit1->color = "Hijau";
$fruit1->flavor = "Manis<hr>";
echo "buah = " . $fruit1->getName();
echo "<br>";
echo $fruit1->getInfo();

$fruit1 = new fruit ();
$fruit1->name = "Mangga";
$fruit1->color = "Hijau ke kuning-kuningan";
$fruit1->flavor = "Sedikit asam";
echo $fruit1->getInfo();