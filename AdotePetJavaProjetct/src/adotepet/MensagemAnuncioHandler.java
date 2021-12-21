package adotepet;

import java.util.ArrayList;

public abstract class MensagemAnuncioHandler implements MensagemAnuncio {
    private static int INDEX = 0;
    private MensagemAnuncio nextMensagemAnuncioHandler;

    public void setNextHandler(MensagemAnuncio nextMensagem) {
        nextMensagemAnuncioHandler = nextMensagem;
    }

    public void processHandler(ArrayList<Adotante> adotantes, Doador d) {
        if (INDEX == 0) {
            enviaMensagem(adotantes.get(INDEX), d);
            INDEX++;
        } else {
            enviaMensagem(adotantes.get(INDEX), d);
        }
        if (nextMensagemAnuncioHandler != null && INDEX < adotantes.size()) {
            nextMensagemAnuncioHandler.processHandler(adotantes, d);
        }


    }

    public abstract void enviaMensagem(Adotante a, Doador d);
}
