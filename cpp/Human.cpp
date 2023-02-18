// package //cpp;
#include <bits/stdc++.h>
using namespace std;
/*
Saya [Elsa Nabiilah] [2108805]
mengerjakan LATIHAN 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan.
Aamiin.
*/
class Human
{
    // human menjadi class parent karena
    // meliputi keseluruhan objek class lain
    // artinya class lain memiliki objek Human

private:
    // deklarasi variabel
    string NIK;
    string nama;
    string jk;

public:
    // constructor
    Human()
    {
    }

    Human(string NIK, string nama, string jk)
    {
        this->NIK = NIK;
        this->nama = nama;
        this->jk = jk;
    }
    // getter setter method
    string getnik()
    {
        return this->NIK;
    }

    void setnik(string NIK)
    {
        this->NIK = NIK;
    }

    string getnama()
    {
        return this->nama;
    }

    void setnama(string nama)
    {
        this->nama = nama;
    }

    string getjk()
    {
        return this->jk;
    }

    void setjk(string jk)
    {
        this->jk = jk;
    }

    // function untuk menampilkan per atribut
    void printnik()
    {
        cout << "NIK           : " << this->getnik() << endl;
    }
    void printnama()
    {
        cout << "Nama          : " << this->getnama() << endl;
    }
    void printjk()
    {
        cout << "Jenis kelamin : " << this->getjk() << endl;
    }
    // destructor
    ~Human() {}
};
