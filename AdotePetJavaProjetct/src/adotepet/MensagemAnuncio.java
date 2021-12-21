package adotepet;

import java.util.ArrayList;

public interface MensagemAnuncio {
    public void setNextHandler(MensagemAnuncio nextMensagem);
    public void processHandler(ArrayList<Adotante> adotantes, Doador d);
}
