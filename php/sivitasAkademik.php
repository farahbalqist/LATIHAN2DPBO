<?php
class sivitasAkademik extends Mahasiswa{
    private $asal_universitas;
    private $email_edu;

    function __construct(){
    }

    function setAsalUniversitas($asal_universitas){
        $this->asal_universitas = $asal_universitas;
    }

    function getAsalUniversitas(){
        return $this->asal_universitas;
    }

    function setEmailEdu($email_edu){
        $this->email_edu = $email_edu;
    }

    function getEmailEdu(){
        return $this->email_edu;
    }

    function __destruct(){
    }
}
?>