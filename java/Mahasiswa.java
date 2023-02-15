
/*
Saya [Elsa Nabiilah] [2108805] mengerjakan LATIHAN 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan.
Aamiin.
*/

//membuat class
public class Mahasiswa extends Human {
    private String nim;
    private String nama;
    private String jk;
    private String fak;
    private String prodi;

    // initialize
    public Mahasiswa() {
        this.nim = "";
        this.nama = "";
        this.jk = "";
        this.fak = "";
        this.prodi = "";
    }

    public Mahasiswa(String nim, String nama, String jk, String fak, String prodi) {
        this.nim = nim;
        this.nama = nama;
        this.jk = jk;
        this.fak = fak;
        this.prodi = prodi;
    }

    // getter setter method
    public String getnim() {
        return this.nim;
    }

    public void setnim(String nim) {
        this.nim = nim;
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
        this.jk = jk;
    }

    public String getfak() {
        return this.fak;
    }

    public void setfak(String fak) {
        this.fak = fak;
    }

    public String getprof() {
        return this.prodi;
    }

    public void setprodi(String prodi) {
        this.prodi = prodi;
    }

    // function
    void nim() {
        System.out.println("NIM           : " + this.nim);

    }

    void fak() {
        System.out.println("Fakultas      : " + this.fak);
    }

    void prod() {
        System.out.println("Program Studi : " + this.prodi);
    }

    void nm() {
        System.out.println("Nama          : " + this.nama);
    }

    void jenisk() {
        System.out.println("Jenis Kelamin : " + this.jk);
    }

}
