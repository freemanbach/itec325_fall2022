

import java.util.Random;
import java.util.ArrayList;
import java.util.Collections;

public class SpecialLotto {

    public static ArrayList<Integer> genMagickNumList() {
        ArrayList<Integer> mynum = new ArrayList<>(71);

        for (int i = 1; i < 71; i++) {
            mynum.add(i);
        }
        return mynum;
    }

    public static ArrayList<Integer> getTicket() {
        ArrayList<Integer> lotto = new ArrayList<>();
        Random rn = new Random();
        ArrayList<Integer> a = genMagickNumList();
        int z = 0;
        while (z < 5) {
            int index = rn.nextInt(a.size() - 1);
            int value = a.get(index);
            lotto.add(value);
            a.remove(index);
            z++;
        }
        Collections.sort(lotto);
        lotto.add(rn.nextInt(25)+1);

        return lotto;
    }

    public static void main(String [] args) {
        int size=10;
        ArrayList<ArrayList<Integer>> a = new ArrayList<ArrayList<Integer>>(size);
        for (int i=0; i < size; i++) {
            a.add(getTicket());
        }
        for (ArrayList<Integer> i : a ) {
            System.out.println(i);
        }
    }
}