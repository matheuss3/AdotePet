package adotepet;
import adotepet.fabrica.ITipoPessoa;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.Date;
import adotepet.observador.Observado;

public class Doador extends Pessoa implements ITipoPessoa{  
    public Doador(String nome, String cpf, Date dataNascimento, String endereco, String email, String telefone){
        super(nome, cpf, dataNascimento, endereco, email, telefone);
    }
    
    @Override
    public void criaPessoa(){
        System.out.println("Doador criado");
    }
    
    public void update(Observado o) {
        Mensagem m=(Mensagem) o;
        System.out.println("Sou o doador");
        String pattern="MM/dd/yyyy HH:mm:ss";
        DateFormat df=new SimpleDateFormat(pattern);
        String data=df.format(m.getData());
        System.out.println("Data da mensagem: " + data);
        leMensagem(m);
    }
}