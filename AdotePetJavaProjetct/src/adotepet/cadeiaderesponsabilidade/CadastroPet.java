package adotepet.cadeiaderesponsabilidade;
import adotepet.Tipo;

public abstract class CadastroPet {
    protected CadastroPet proximo;
    protected Tipo identificadorPet;
 
    public CadastroPet(Tipo id) {
        proximo = null;
        identificadorPet = id;
    }
 
    public void setNext(CadastroPet forma) {
        if (proximo == null) {
            proximo = forma;
        } else {
            proximo.setNext(forma);
        }
    }
    
    public void efetuarCadastro(Tipo id) throws Exception {
        if (podeEfetuarCadastro(id)) {
            efetuaCadastro();
        } else {
            if (proximo == null) {
                throw new Exception("banco não cadastrado");
            }
            proximo.efetuarCadastro(id);
        }
    }

    private boolean podeEfetuarCadastro(Tipo id) {
        if (identificadorPet == id) {
            return true;
        }
        return false;
    }

    protected abstract void efetuaCadastro();
}
