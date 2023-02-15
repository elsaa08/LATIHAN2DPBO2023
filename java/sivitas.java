/*
Saya [Elsa Nabiilah] [2108805] mengerjakan LATIHAN 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek
untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan.
Aamiin.
*/

//membuat public class dengan ibu mahasiswa
public class sivitas extends Mahasiswa {
    // deklarasi variabel private
    private String univ;
    private String email;

    // initialize
    public sivitas() {
        this.univ = "";
        this.email = "";

    }

    public sivitas(String univ, String email) {
        this.univ = univ;
        this.email = email;
    }

    // getter setter method
    public String getuniv() {
        return this.univ;
    }

    public void setuniv(String univ) {
        this.univ = univ;
    }

    public String getemail() {
        return this.email;
    }

    public void setemail(String email) {
        this.email = email;
    }

    // membuat fungsi sesuai atribut
    void asal_univ() {
        System.out.println("Asal Univ     : " + this.univ);
    }

    void email() {
        System.out.print("email         : " + this.email);
    }

}
