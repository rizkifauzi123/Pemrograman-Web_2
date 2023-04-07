<?php

class lingkaran {
    //membuat property 
    public $jari_jari;
    public const PHI = 3.14;

    //membuat method
    public function __construct($r){
        $this->jari_jari = $r;
    }
    public function luas(){
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }
    public function kel(){
        return 2 * self ::PHI * $this->jari_jari * $this->jari_jari;
    }

}

//membuat object/instance
$lingkaran1 = new Lingkaran(5);
echo"Luas Lingkaran = " . $lingkaran1->luas();
echo"Keliling Lingkaran = " . $lingkaran1->kel();