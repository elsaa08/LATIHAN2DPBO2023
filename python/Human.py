class Human:
    __NIK = ""
    __nama = ""
    __jk = ""

    # human menjadi class parent karena
    # meliputi keseluruhan objek class lain
    # artinya class lain memiliki objek Human

    # deklarasi variabel

    # constructor
    # initialize variabel
    def __init__(self, NIK="", nama="", jk=""):
        self.__NIK = NIK
        self.__nama = nama
        self.__jk = jk

    # getter setter method
    def getnik(self):
        return self.__NIK

    def setnik(self, __NIK):
        self.NIK = __NIK

    def getnama(self):
        return self.__nama

    def setnama(self, nama):
        self.__nama = nama

    def getjk(self):
        return self.__jk

    def setjk(self, jk):

        self.__jk = jk

    # function untuk menampilkan per atribut
    def printnik(self):

        print("NIK           : ", self.NIK)

    def printnama(self):
        print("Nama          : ", self.__nama)

    def printjk(self):
        print("Jenis kelamin : ", self.__jk)
