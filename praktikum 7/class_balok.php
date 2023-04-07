<?php 

class Balok {
    //Membuat Property
    public $panjang;
    public $lebar;
    public $tinggi;
    
    //Membuat Method
    public function __construct($p , $l , $t){
        $this->panjang = $p;
        $this->lebar = $l;
        $this->tinggi = $t;
    }

    public function luas(){
        return 2 * (($this->panjang*$this->lebar) + ($this->panjang*$this->tinggi) + ($this->lebar*$this->tinggi)) ;
    }

    public function keliling(){
        return 4 * ($this->panjang + $this->lebar + $this->tinggi) ;
    }

    public function volume(){
        return $this->panjang * $this->lebar * $this->tinggi ;
    }

}

//Membuat Objek / Instance
$balok1 = new Balok(7 , 5 , 10);
echo "Luas Balok = " . $balok1-> luas();
echo "<br>";
echo "Keliling Balok = " . $balok1-> keliling();
echo "<br>";
echo "Volume Balok = " . $balok1-> volume();
echo "<hr>";
$balok2 = new Balok(15 , 20 , 25);
echo "Luas Balok = " . $balok2-> luas() . " cm";
echo "<br>";
echo "Keliling Balok = " . $balok2-> keliling() . " cm";
echo "<br>";
echo "Volume Balok = " . $balok2-> volume() . " cm";