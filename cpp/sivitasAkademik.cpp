class sivitasAkademik : public Mahasiswa{
    private:
        string asal_universitas;
        string email_edu;
    
    public:
        sivitasAkademik(){
        }

        void setAsalUniversitas(string asal_universitas){
            this->asal_universitas = asal_universitas;
        }

        string getAsalUniversitas(){
            return this->asal_universitas;
        }

        void setEmailEdu(string email_edu){
            this->email_edu = email_edu;
        }

        string getEmailEdu(){
            return this->email_edu;
        }

        ~sivitasAkademik(){
        }
};