package adotepet.fabrica;
import adotepet.Adotante;
import adotepet.Doador;
import java.util.Date;

public class FabricaPessoa{
    public static ITipoPessoa criarPessoa(String tipo, String nome, String cpf, String endereco, String email, String telefone, String comprovanteResidencia, Date dataNascimento){
        ITipoPessoa pessoa=null;
        if(tipo.equalsIgnoreCase("Adotante")){
            pessoa=new Adotante(nome, cpf, dataNascimento, endereco, email, telefone, comprovanteResidencia);
        } else if (tipo.equalsIgnoreCase("Doador")){
            pessoa=new Doador(nome, cpf, dataNascimento, endereco, email, telefone);
        }
        return pessoa;
    }
}