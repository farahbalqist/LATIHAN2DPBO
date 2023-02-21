class Mahasiswa : public Human{
    private:
        string nim;
        string fakultas;
        string prodi;
    
    public:
        Mahasiswa(){
        }

        void setNim(string nim){
            this->nim = nim;
        }

        string getNim(){
            return this->nim;
        }

        void setFakultas(string fakultas){
            this->fakultas = fakultas;
        }

        string getFakultas(){
            return this->fakultas;
        }

        void setProdi(string prodi){
            this->prodi = prodi;
        }

        string getProdi(){
            return this->prodi;
        }

        ~Mahasiswa(){
        }
};