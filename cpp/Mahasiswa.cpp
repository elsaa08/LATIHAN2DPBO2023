#include <bits/stdc++.h>
using namespace std;
#include "Human.cpp"
/*
Saya [Elsa Nabiilah] [2108805]
mengerjakan LATIHAN 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan.
Aamiin.
*/
class Mahasiswa : public Human
{
    // class mahasiswa mejadi child/toodler dari class human karena
    // atribut Mahasiswa melekat kaitannya dengan atribut Human karena sama - sama mengarah
    // kepada point-point identitas
private: // deklarasi private atribut
    string nim;

    string fak;

    string prodi;

public:
    // contructor
    Mahasiswa()
    {
    }
    Mahasiswa(string nim, string fak, string prodi)
    {
        this->nim = nim;
        this->fak = fak;
        this->prodi = prodi;
    }
    // setter getter method
    string getnim()
    {
        // getter nim
        return this->nim;
    }

    void setnim(string nim)
    {
        // setter nim
        this->nim = nim;
    }

    string getfak()
    {
        // getter fakultas
        return this->fak;
    }

    void setfak(string fak)
    { // setter fakultas
        this->fak = fak;
    }

    string getprof()
    {
        // getter prodi
        return this->prodi;
    }

    void setprodi(string prodi)
    { // setter prodi
        this->prodi = prodi;
    }

    // function untuk menampilkan per atribut
    void printnim()
    {
        cout << "NIM           : " << this->getnim() << endl;
    }
    void printps()
    {
        cout << "Program Studi : " << this->getprof() << endl;
    }
    void printfak()
    {
        cout << "Fakultas      : " << this->getfak() << endl;
    }

    ~Mahasiswa() {}
};
