import java.util.List;

public interface IPessoaDao {
    public List<Pessoa> getAllPessoas();
    public Pessoa getPessoa(String cpf);
    public void updatePessoa(Pessoa pessoa);
    public void deletePessoa(Pessoa pessoa);
}