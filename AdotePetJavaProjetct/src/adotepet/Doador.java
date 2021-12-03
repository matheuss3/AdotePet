package adotepet;

import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.Date;

public class Doador extends Pessoa{
    public Doador(String nome, String cpf, Date dataNascimento, String endereco, String email, String telefone) {
        super(nome, cpf, dataNascimento, endereco, email, telefone);
    }

    public void update(Observado o) {
        Mensagem m = (Mensagem) o;
        System.out.println("Sou o doador");
        String pattern = "MM/dd/yyyy HH:mm:ss";

        // Create an instance of SimpleDateFormat used for formatting
        // the string representation of date according to the chosen pattern
        DateFormat df = new SimpleDateFormat(pattern);
        String data = df.format(m.getData());
        System.out.println("Data da mensagem: " + data);
        leMensagem(m);
    }

}
