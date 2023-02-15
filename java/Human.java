/*
Saya [Elsa Nabiilah] [2108805]
mengerjakan LATIHAN 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan.
Aamiin.
*/
/*
Saya [Elsa Nabiilah] [2108805]
mengerjakan LATIHAN 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan.
Aamiin.
*/
public class Human {
    private String NIK;
    private String nama;
    private String jk;

    public Human() {
        this.NIK = "";
        this.nama = "";
        this.jk = "";
    }

    public Human(String NIK, String nama, String jk) {
        this.NIK = NIK;
        this.nama = nama;
        this.jk = jk;
    }

    public String getnik() {
        return this.NIK;
    }

    public void setnik(String NIK) {
        this.NIK = NIK;
    }

    public String getnama() {
        return this.nama;
    }

    public void setnama(String nama) {
        this.nama = nama;
    }

    public String getjk() {
        return this.jk;
    }

    public void setjk(String jk) {
        this.NIK = jk;
    }

    void nik() {
        System.out.println("NIK           : " + this.NIK);
    }

    void nm() {
        System.out.println("Nama : " + this.nama);
    }

    void jenisk() {
        System.out.println("Jenis Kelamin : " + this.jk);
    }
}