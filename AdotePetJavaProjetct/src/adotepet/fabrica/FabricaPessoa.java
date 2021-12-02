package adotepet.fabrica;

public class FabricaPessoa{
    public static ITipoPessoa criarPessoa(String tipo, String nome, String cpf, String endereco, String email, String telefone){
        ITipoPessoa pessoa=null;
        
        if(tipo.equalsIgnoreCase("Adotante")){
            pessoa=new Adotante(nome, cpf, endereco, email, telefone);
        } else if (tipo.equalsIgnoreCase("Doador")){
            pessoa=new Doador(nome, cpf, endereco, email, telefone);
        }
        return pessoa;
    }
}
