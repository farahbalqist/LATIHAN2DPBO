#include<string>
#include<iostream>
using namespace std;
#include "Human.cpp"
#include "Mahasiswa.cpp"
#include "sivitasAkademik.cpp"

int main(){
    Human aHuman;
    Mahasiswa bMahasiswa;
    sivitasAkademik csivitasAkademik;

    aHuman.setNik("123456789");
    aHuman.setNama("Farah Balqist");
    aHuman.setJenisKelamin("Perempuan");

    cout << "Nik                : " << aHuman.getNik() << endl;
    cout << "Nama               : " << aHuman.getNama() << endl;
    cout << "Jenis Kelamin      : " << aHuman.getJenisKelamin() << endl;

    bMahasiswa.setNim("2007339");
    bMahasiswa.setFakultas("FPMIPA");
    bMahasiswa.setProdi("Ilmu Komputer");

    cout << "Nim                : " << bMahasiswa.getNim() << endl;
    cout << "Fakultas           : " <<bMahasiswa.getFakultas() << endl;
    cout << "Prodi              : " << bMahasiswa.getProdi() << endl;

    csivitasAkademik.setAsalUniversitas("UPI");
    csivitasAkademik.setEmailEdu("fb@upi.edu");

    cout << "Asal Universitas   : " <<csivitasAkademik.getAsalUniversitas() << endl;
    cout << "Email Edu          : " << csivitasAkademik.getEmailEdu() << endl;
}