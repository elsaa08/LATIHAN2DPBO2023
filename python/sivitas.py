from Mahasiswa import Mahasiswa


class sivitas(Mahasiswa):

    # sivitas menjadi child dari mahasiswa karena sesuai dengan
    # hakikatnya setiap mahasiswa pasti memiliki atribut/identitas kampus seperti
    # asal universitas dan email

    def __init__(self):
        self.__univ = ""
        self.__email = ""

    # getter setter method

    def getuniv(self):
        return self.__univ

    def setuniv(self, univ):
        self.__univ = univ

    def getemail(self):
        return self.__email

    def setemail(self, email):
        self.__email = email

    # membuat fungsi menampilkan per atribut
    def printuniv(self):
        print("Asal Univ     : ", self.__univ)

    def printmail(self):
        print("Email Univ    : ", self.__email)
