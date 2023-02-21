from Mahasiswa import Mahasiswa
class sivitasAkademik(Mahasiswa):
    def __init__(self):
        self.asal_universitas = " "
        self.email_edu = " "
    
    #set dan get
    def setAsalUniversitas(self, asal_universitas):
        #set asal_universitas
        self.asal_universitas = asal_universitas
    def getAsalUniversitas(self):
        #kembalikan asal_universitas
        return self.asal_universitas
    
    def setEmailEdu(self, email_edu):
        #set email_upi
        self.email_edu = email_edu
    def getEmailEdu(self):
        #kembalikan email_edu
        return self.email_edu