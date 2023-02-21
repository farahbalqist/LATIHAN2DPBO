<?php
class Mahasiswa extends Human{
    private $nim;
    private $fakultas;
    private $prodi;

    function __construct(){
    }

    function setNim($nim){
        $this->nim = $nim;
    }

    function getNim(){
        return $this->nim;
    }

    function setFakultas($fakultas){
        $this->fakultas = $fakultas;
    }

    function getFakultas(){
        return $this->fakultas;
    }

    function setProdi($prodi){
        $this->prodi = $prodi;
    }

    function getProdi(){
        return $this->prodi;
    }

    function __destruct(){
    }
}
?>