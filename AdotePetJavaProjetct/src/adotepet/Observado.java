package adotepet;

import java.util.ArrayList;

public class Observado {
    ArrayList<Observador> observadores = new ArrayList<>();

    public void addObservador(Observador o) {
        observadores.add(o);
    }

    public void removeObservador(Observador o) {
        observadores.remove(o);
    }

    public void notificaTodos() {
        for (Observador ob : observadores) {
            ob.update(this);
        }
    }
}
