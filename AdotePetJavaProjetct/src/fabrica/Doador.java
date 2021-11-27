package fabrica;

import fabrica.Pessoa;

public class Doador extends Pessoa implements ITipoPessoa{

    public Doador(String nome, String cpf, String endereco, String email, String telefone){
        super(nome, cpf, endereco, email, telefone);

    }

    @Override
    public void criaPessoa(){
        System.out.println("Doador criado");

    }


}
