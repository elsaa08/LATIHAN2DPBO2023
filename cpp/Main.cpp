#include <bits/stdc++.h>
/*
Saya [Elsa Nabiilah] [2108805]
mengerjakan LATIHAN 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan.
Aamiin.
*/
using namespace std;

// import lib file
#include "sivitas.cpp"

int main(int argc, char const *argv[])
{
    // untuk menampung objek
    vector<sivitas> temp;
    // deklarasi
    sivitas m1;
    // memasukan data
    m1.setnik("320429480xxxxx");
    m1.setnama("Elsa Nabiilah");
    m1.setjk("P");
    m1.setuniv("UI");
    m1.setemail("el@ui.edu");
    m1.setnim("210998626389");
    m1.setprodi("kriminologi");
    m1.setfak("FH");
    temp.push_back(m1);
    // memasukan data pada objek kedua
    sivitas m2;
    m2.setnik("32042948170796xx");
    m2.setnama("Wonwoo");
    m2.setjk("L");
    m2.setuniv("Universitas Pendidikan Indonesia");
    m2.setemail("ww@upi.edu");
    m2.setnim("2108805");
    m2.setprodi("Ilmu Komputer");
    m2.setfak("FPMIPA");
    temp.push_back(m2);
    // menampilkan  data mahasiswa
    cout << "======= DAFTAR MAHASISWA BERPRESTASI =======" << endl;

    for (int i = 0; i < temp.size(); i++) // looping sebanyak adanya data yang telah masuk sesuai objek
    {
        cout << "No            : " << i + 1 << endl; // looping untuk memberi nomor (iterasi)
        // memanggil fungsi print atribut
        temp[i].printnik();
        temp[i].printnama();
        temp[i].printjk();
        temp[i].printuniv();
        temp[i].printmail();
        temp[i].printnim();
        temp[i].printps();
        temp[i].printfak();
        cout << "===========================" << endl;
    }
}