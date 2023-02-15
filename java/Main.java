import java.util.ArrayList;
import java.util.List;

public class Main {
    public static void main(String[] args) {
        // lupa gapake arraylisttttttttttt

        // List<Mahasiswa> hlist = new Mahasiswa;

        // memanggil child terakhir
        sivitas human1 = new sivitas();
        // set isi variabel " hardcore"
        human1.setnim("2108805");
        human1.setnama("Elsa Nabiilah");
        human1.setjk("P");
        human1.setfak("FPMIPA");
        human1.setprodi("ILKOM");
        human1.setnik("320429480703xxxx");
        // human1.setuniv("UPI")

        human1.setuniv("upi");
        human1.setemail("e@upi.edu");

        sivitas human2 = new sivitas();

        human2.setnim("21098");
        human2.setnama("Nabiilah");
        human2.setjk("P");
        human2.setfak("FPMIPA");
        human2.setprodi("ILKOM");
        human2.setnik("320429464743xxxx");
        human2.setuniv("Unpad");
        human2.setemail("e@upi.edu");

        // memanggil fungsi2 yang sudah di heritance
        human1.nim();
        human1.nik();
        human1.nm();
        human1.jenisk();
        human1.fak();
        human1.prod();
        human1.asal_univ();
        human1.email();
        System.out.println("\n");
        human2.nim();
        human2.nik();
        human2.nm();
        human2.jenisk();
        human2.fak();
        human2.prod();
        human2.asal_univ();
        human1.email();
    }

}
