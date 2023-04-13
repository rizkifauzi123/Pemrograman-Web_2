<?php

class bmi {
    // membuat property
    public $nama;
    public $umur;
    public $jenis_kelamin;
    public $berat;
    public $tinggi;

    // membuat method
    public function __construct($nama, $umur, $jenis_kelamin, $berat, $tinggi){
        $this->nama = $nama;
        $this->umur = $umur;
        $this->jenis_kelamin = $jenis_kelamin;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }

    public function bmi(){
        $tinggi = $this->tinggi/100;
        return $this->berat / ($tinggi*$tinggi);
        return round($bmi);
    }


    public function ketBMI(){
        $bmi = $this->bmi();
        if($bmi < 18.5){
            return "Kekurangan Berat Badan";
        }elseif($bmi >= 18.5 && $bmi <= 24.9){
            return "Ideal";
        }elseif($bmi >= 25 && $bmi <= 29.9){
            return "Kelebihan Berat Badan";
        }else{
            return "Obesitas";
        };
}

}