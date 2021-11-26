import java.util.ArrayList;
import java.util.List;

public class PessoaDaoImpl implements IPessoaDao {

    //List is working as a database
    List<Pessoa> pessoas;

    //Alterar classe depois
    public PessoaDaoImpl(){
        pessoas = new ArrayList<Pessoa>();

        //Utilizando apenas de teste, substituir em breve
        Pessoa pessoa1 = new Pessoa("Fulana", "1234567890", "rua poo2", "fulana@gmail.com", "987456123", "01/02/2000");
        Pessoa pessoa2 = new Pessoa("Fulana", "1234567890", "rua poo2", "fulana@gmail.com", "987456123", "01/02/2000");

        pessoas.add(pessoa1);
        pessoas.add(pessoa2);
    }

    @Override
    public void deletePessoa(Pessoa pessoa) {
        pessoas.remove(Pessoa.getCpf());
        System.out.println("Pessoa de cpf "+ pessoa.getCpf()+ ", deletada!");
    }

    //recebe a lista de pessoas de um banco de dados
    @Override
    public List<Pessoa> getAllPessoas() {
        return pessoas;
    }

    @Override
    public Pessoa getPessoa(String cpf){
        return pessoas.get(cpf);
    }
}