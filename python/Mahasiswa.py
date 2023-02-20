
# Saya [Elsa Nabiilah] [2108805]
# mengerjakan LATIHAN 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek
# untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan.
# Aamiin.

from Human import Human


class Mahasiswa(Human):

    # class mahasiswa mejadi child/toodler dari class human karena
    # atribut Mahasiswa melekat kaitannya dengan atribut Human karena sam- sama mengarah
    # kepada point-point identitas
    # deklarasi private atribut

    def __init__(self):
        self.__nim = ""
        self.__fak = ""
        self.__prodi = ""
    #  self

    # setter getter method
    def getnim(self):
        # getter nim
        return self.__nim

    def setnim(self, nim):
        # setter nim
        self.__nim = nim

    def getfak(self):
        # getter fakultas
        return self.__fak

    def setfak(self, fak):
        # setter fakultas
        self.__fak = fak

    def getprof(self):
        # getter prodi
        return self.__prodi

    def setprodi(self, prodi):
        # setter prodi
        self.__prodi = prodi

    # function untuk menampilkan per atribut
    def printnim(self):
        print("NIM           : ", self.__nim)

    def printps(self):
        print("Program Studi : ", self.__prodi)

    def printfak(self):
        print("Fakultas      : ", self.__fak)
