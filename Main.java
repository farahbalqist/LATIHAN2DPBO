/*
    Saya Farah Balqist 2007339 mengerjakan Latihan Multi-level dalam mata kuliah DPBO
    untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin
*/

//kelas Human
class Human{
    void nik(){
        System.out.println("123456789");
    }
    void nama(){
        System.out.println("Farah Balqist");
    }
    void jenis_kelamin(){
        System.out.println("Perempuan");
    }
}

//kelas Mahasiswa
class Mahasiswa extends Human{
    void nim(){
        System.out.println("2007339");
    }
    void nama(){
        System.out.println("Farah Balqist");
    }
    void jenis_kelamin(){
        System.out.println("Perempuan");
    }
    void fakultas(){
        System.out.println("FPMIPA");
    }
    void prodi(){
        System.out.println("Ilmu Komputer");
    }
}

//kelas SivitasAkademik
class SivitasAkademik extends Mahasiswa{
    void asal_universitas(){
        System.out.println("UPI");
    }
    void email_edu(){
        System.out.println("fb@upi.edu");
    }
}

class Main{
    public static void main(String[] args){
        SivitasAkademik sivitas_akademik = new SivitasAkademik();

        sivitas_akademik.nik();
        sivitas_akademik.nama();
        sivitas_akademik.jenis_kelamin();
        sivitas_akademik.nim();
        sivitas_akademik.fakultas();
        sivitas_akademik.prodi();
        sivitas_akademik.asal_universitas();
        sivitas_akademik.email_edu();
    }
}