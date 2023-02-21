class Human{
    private:
        string nik;
        string nama;
        string jenis_kelamin;
    
    public:
        Human(){
        }

        void setNik(string nik){
            this->nik = nik;
        }

        string getNik(){
            return this->nik;
        }

        void setNama(string nama){
            this->nama = nama;
        }

        string getNama(){
            return this->nama;
        }

        void setJenisKelamin(string jenis_kelamin){
            this->jenis_kelamin = jenis_kelamin;
        }

        string getJenisKelamin(){
            return this->jenis_kelamin;
        }

        ~Human(){
        }
};