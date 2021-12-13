package adotepet.cadeiaderesponsabilidade;
import adotepet.Tipo;

public class TipoPassaro extends CadastroPet {
    public TipoPassaro() {
        super(Tipo.PASSARO);
    }
 
    //@Override
    protected void efetuaCadastro() {
        System.out.println("Efetuado no Passaro");
    }
}