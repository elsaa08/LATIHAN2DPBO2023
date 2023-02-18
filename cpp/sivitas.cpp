#include <bits/stdc++.h>
/*
Saya [Elsa Nabiilah] [2108805]
mengerjakan LATIHAN 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan.
Aamiin.
*/
using namespace std;

#include "Mahasiswa.cpp"

class sivitas : public Mahasiswa
{
    // sivitas menjadi child dari mahasiswa karena sesuai dengan
    // hakikatnya setiap mahasiswa pasti memiliki atribut/identitas kampus seperti
    // asal universitas dan email

    //  deklarasi variabel private
private:
    string univ;
    string email;

    // conctructor
public:
    sivitas()
    {
    }

    sivitas(string univ, string email)
    {
        this->univ = univ;
        this->email = email;
    }

    // getter setter method
    string getuniv()
    {
        return this->univ;
    }

    void setuniv(string univ)
    {
        this->univ = univ;
    }

    string getemail()
    {
        return this->email;
    }

    void setemail(string email)
    {
        this->email = email;
    }

    // membuat fungsi menampilkan per atribut
    void printuniv()
    {
        cout << "Asal Univ     : " << this->getuniv() << endl;
    }
    void printmail()
    {
        cout << "Email Univ    : " << this->getemail() << endl;
    }

    ~sivitas() {}
};
