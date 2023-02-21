from Human import Human
class Mahasiswa(Human):
    def __init__(self):
        self.nim = ""
        self.fakultas = ""
        self.prodi = ""
    
    #set dan get
    def setNim(self, nim):
        #set nim
        self.nim = nim
    def getNim(self):
        #kembalikan nim
        return self.nim
    
    def setFakultas(self, fakultas):
        #set fakultas
        self.fakultas = fakultas
    def getFakultas(self):
        #kembalikan fakultas
        return self.fakultas
    
    def setProdi(self, prodi):
        #set prodi
        self.prodi = prodi
    def getProdi(self):
        #kembalikan prodi
        return self.prodi