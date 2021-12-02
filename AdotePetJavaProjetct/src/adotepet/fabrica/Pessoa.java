package adotepet.fabrica;
import java.util.Date;

public class Pessoa{
    private String nome, cpf, endereco, email, telefone;
    private Date dataNascimento;

    public Pessoa(String nome, String cpf, String endereco, String email, String telefone){
        setNome(nome);
        setCpf(cpf);
        setEndereco(endereco);
        setEmail(email);
        setTelefone(telefone);
    }


    public String getNome(){
        return nome;
    }

    public void setNome(String nome){
        this.nome=nome;
    }

    public String getCpf(){
        return cpf;
    }

    public void setCpf(String cpf){
        this.cpf=cpf;
    }

    public String getEndereco(){
        return endereco;
    }

    public void setEndereco(String endereco){
        this.endereco=endereco;
    }

    public String getEmail(){
        return email;
    }

    public void setEmail(String email){
        this.email=email;
    }

    public String getTelefone(){
        return telefone;
    }

    public void setTelefone(String telefone){
        this.telefone=telefone;
    }

    public Date getDataNascimento(){
        return dataNascimento;
    }

    public void setDataNascimento(Date dataNascimento){
        this.dataNascimento=dataNascimento;
    }
}