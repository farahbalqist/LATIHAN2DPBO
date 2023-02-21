<?php
class Human{
    private $nik;
    private $nama;
    private $jenis_kelamin;

    function __construct(){
    }

    function setNik($nik){
        $this->nik = $nik;
    }

    function getNik(){
        return $this->nik;
    }

    function setNama($nama){
        $this->nama = $nama;
    }

    function getNama(){
        return $this->nama;
    }

    function setJenisKelamin($jenis_kelamin){
        $this->jenis_kelamin = $jenis_kelamin;
    }

    function getJenisKelamin(){
        return $this->jenis_kelamin;
    }

    function __destruct(){
    }
}
?>