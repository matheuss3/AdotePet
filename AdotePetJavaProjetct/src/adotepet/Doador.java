package adotepet;

import java.util.Date;

public class Doador extends Pessoa{
    public Doador(String nome, String cpf, Date dataNascimento, String endereco, String email, String telefone) {
        super(nome, cpf, dataNascimento, endereco, email, telefone);
    }

    public void update(Observado o) {
        Mensagem m = (Mensagem) o;
        System.out.println("Sou o doador");
        leMensagem(m);
    }

}
