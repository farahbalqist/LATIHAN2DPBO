<?php
    include "Human.php";
    include "Mahasiswa.php";
    include "sivitasAkademik.php";

    $aHuman = new Human();
    $aHuman->setNik("123456789");
    $aHuman->setNama("Farah Balqist");
    $aHuman->setJenisKelamin("Perempuan");

    echo "Nik                   : ".$aHuman->getNik()."<br/>";
    echo "Nama                  : ".$aHuman->getNama()."<br/>";
    echo "Jenis Kelamin         : ".$aHuman->getJenisKelamin()."<br/>";

    $bMahasiswa = new Mahasiswa();
    $bMahasiswa->setNim("2007339");
    $bMahasiswa->setFakultas("FPMIPA");
    $bMahasiswa->setProdi("Ilmu Komputer");

    echo "Nim                   : ".$bMahasiswa->getNim()."<br/>";
    echo "Fakultas              : ".$bMahasiswa->getFakultas()."<br/>";
    echo "Prodi                 : ".$bMahasiswa->getProdi()."<br/>";

    $csivitasAkademik = new sivitasAkademik();
    $csivitasAkademik->setAsalUniversitas("UPI");
    $csivitasAkademik->setEmailEdu("fb@upi.edu");

    echo "Asal Universitas      : ".$csivitasAkademik->getAsalUniversitas()."<br/>";
    echo "Email Edu             : ".$csivitasAkademik->getEmailEdu()."<br/>";

?>