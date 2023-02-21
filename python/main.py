from sivitasAkademik import sivitasAkademik

masukan = sivitasAkademik()

#mengeset masukan
masukan.setNik("123456789")
masukan.setNama("Farah Balqist")
masukan.setJenisKelamin("Perempuan")
masukan.setNim("2007339")
masukan.setFakultas("FPMIPA")
masukan.setProdi("Ilmu Komputer")
masukan.setAsalUniversitas("UPI")
masukan.setEmailEdu("fb@upi.edu")

#menampilkan hasil
print("Nik              : " + str(masukan.getNik()))
print("Nama             : " + str(masukan.getNama()))
print("Jenis Kelamin    : " + str(masukan.getJenisKelamin()))
print("Nim              : " + str(masukan.getNim()))
print("Fakultas         : " + str(masukan.getFakultas()))
print("Prodi            : " + str(masukan.getProdi()))
print("Asal Universitas : " + str(masukan.getAsalUniversitas()))
print("Email Edu        : " + str(masukan.getEmailEdu()))