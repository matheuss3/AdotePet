package adotepet.cadeiaderesponsabilidade;
import adotepet.Tipo;

public class TipoGato extends CadastroPet {
    public TipoGato() {
        super(Tipo.GATO);
    }
 
    //@Override
    protected void efetuaCadastro() {
        System.out.println("Efetuado no Gato");
    }
}