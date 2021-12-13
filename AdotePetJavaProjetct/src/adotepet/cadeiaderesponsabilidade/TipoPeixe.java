package adotepet.cadeiaderesponsabilidade;
import adotepet.Tipo;

public class TipoPeixe extends CadastroPet {
    public TipoPeixe() {
        super(Tipo.PEIXE);
    }
 
    //@Override
    protected void efetuaCadastro() {
        System.out.println("Efetuado no Peixe");
    }
}