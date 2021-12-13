package adotepet;
import java.util.Date;
import adotepet.observador.Observador;
import adotepet.observador.Observado;

public class Pessoa implements Observador{
    private String nome, cpf, endereco, email, telefone;
    private Date dataNascimento;
    
    public Pessoa(String nome, String cpf, Date dataNascimento, String endereco, String email, String telefone){
        this.setNome(nome);
        this.setCpf(cpf);
        this.setDataNascimento(dataNascimento);
        this.setEndereco(endereco);
        this.setEmail(email);
        this.setTelefone(telefone);
    }

    @Override
    public void update(Observado o){
        Mensagem m=(Mensagem) o;
        leMensagem(m);
    }

    public void leMensagem(Mensagem m){
        System.out.println(m.getConteudo());
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

    public Date getDataNascimento(){
        return dataNascimento;
    }

    public void setDataNascimento(Date dataNascimento){
        this.dataNascimento=dataNascimento;
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
}