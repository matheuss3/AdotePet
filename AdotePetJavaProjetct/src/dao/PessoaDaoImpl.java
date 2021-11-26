package dao;


import java.util.ArrayList;
import java.util.List;

public class PessoaDaoImpl implements IPessoaDao {

    //List is working as a database
    List<Pessoa> pessoas;

    //Alterar classe depois
    public PessoaDaoImpl(){
        pessoas = new ArrayList<Pessoa>();

        //Utilizando apenas de teste, substituir em breve
        Pessoa pessoa1 = new Pessoa("Marcus","12345");
        Pessoa pessoa2 = new Pessoa("Guilherme", "45678");

        pessoas.add(pessoa1);
        pessoa1.add(pessoa2);
    }

    @Override
    public void deletePessoa(Pessoa pessoa) {
        pessoas.remove(pessoa.getCpf());
        System.out.println("Pessoa de cpf "+pessoa.getCpf()+", deletada!");
    }

    //recebe a lista de pessoas de um banco de dados
    @Override
    public List<Pessoas> getAllPessoas() {
        return pessoas;
    }

    @Override
    public Pessoa getPessoa(string cpf){
        return pessoas.get(cpf);
    }


}
