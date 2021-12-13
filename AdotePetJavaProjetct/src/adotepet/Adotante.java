package adotepet;
import adotepet.fabrica.ITipoPessoa;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import adotepet.observador.Observado;
import java.util.Date;

public class Adotante extends Pessoa implements ITipoPessoa{
    private String comprovanteResidencia;

    public Adotante(String nome, String cpf, Date dataNascimento, String endereco, String email, String telefone, String comprovanteResidencia){
        super(nome, cpf, dataNascimento, endereco, email, telefone); 
        setComprovanteResidencia(comprovanteResidencia);
    }

    public String getComprovanteResidencia(){
        return comprovanteResidencia;
    }

    public void setComprovanteResidencia(String comprovanteResidencia){
        this.comprovanteResidencia=comprovanteResidencia;
    }
    
    @Override
    public void criaPessoa(){
        System.out.println("Adotante criado");
    }
    
    public void update(Observado o) {
        Mensagem m=(Mensagem) o;
        System.out.println("Sou o adotante");
        String pattern="MM/dd/yyyy HH:mm:ss";
        DateFormat df=new SimpleDateFormat(pattern);
        String data=df.format(m.getData());
        System.out.println("Data da mensagem: " + data);
        leMensagem(m);
    }
}