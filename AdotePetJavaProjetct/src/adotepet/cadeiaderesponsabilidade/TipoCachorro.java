package adotepet.cadeiaderesponsabilidade;
import adotepet.Tipo;

public class TipoCachorro extends CadastroPet {
    public TipoCachorro() {
        super(Tipo.CACHORRO);
    }
 
    //@Override
    protected void efetuaCadastro() {
        System.out.println("Efetuado no Cachorro");
    }
}