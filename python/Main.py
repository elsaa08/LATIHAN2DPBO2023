from sivitas import sivitas
# Saya [Elsa Nabiilah] [2108805]
# mengerjakan LATIHAN 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek
# untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan.
# Aamiin.

temp = []  # pembuatan/deklarasi variabel array untuk menampung

# alokasi m1 sebagai objek sivitas pertama
m1 = sivitas()
# memasukan data
m1.setnik("320429480xxxxx")
m1.setnama("Elsa Nabiilah")
m1.setjk("P")
m1.setnim("210998626389")
m1.setprodi("kriminologi")
m1.setfak("FH")
m1.setuniv("UI")
m1.setemail("el@ui.edu")
temp.append(m1)
# memasukan data pada objek kedua

# alokasi m2 sebagai objek sivitas kedua
m2 = sivitas()

m2.setnik("32042948170796xx")
m2.setnama("Wonwoo")
m2.setjk("L")
m2.setnim("2108805")
m2.setprodi("Ilmu Komputer")
m2.setfak("FPMIPA")
m2.setuniv("Universitas Pendidikan Indonesia")
m2.setemail("ww@upi.edu")
temp.append(m2)
# menampilkan  data mahasiswa
print("======= DAFTAR MAHASISWA BERPRESTASI =======")

for i in range(len(temp)):  # looping sebanyak adanya data yang telah masuk sesuai objek
    print("No            :  " + str(i+1))
    # ooping untuk memberi nomor(iterasi)
    # memanggil fungsi print atribut
    temp[i].printnik()
    temp[i].printnama()
    temp[i].printjk()
    temp[i].printnim()
    temp[i].printps()
    temp[i].printfak()
    temp[i].printuniv()
    temp[i].printmail()

    print("===========================")
