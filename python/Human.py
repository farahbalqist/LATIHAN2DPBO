class Human:
    def __init__(self):
        self.nik = " "
        self.nama = " "
        self.jenis_kelamin = " "

    #set dan get
    def setNik(self, nik):
        #set nik
        self.nik = nik
    def getNik(self):
        #kembalikan nik
        return self.nik

    def setNama(self, nama):
        #set nama
        self.nama = nama
    def getNama(self):
        #kembalikan nik
        return self.nama
    
    def setJenisKelamin(self, jenis_kelamin):
        #set nama
        self.jenis_kelamin = jenis_kelamin
    def getJenisKelamin(self):
        #kembalikan nik
        return self.jenis_kelamin