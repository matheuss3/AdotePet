package adotepet;

import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.Date;

public class Adotante extends Pessoa {
    public Adotante(String nome, String cpf, Date dataNascimento, String endereco, String email, String telefone, String comprovanteResidencia) {
        super(nome, cpf, dataNascimento, endereco, email, telefone);
        this.comprovanteResidencia = comprovanteResidencia;
    }

    public void update(Observado o) {
        Mensagem m = (Mensagem) o;
        System.out.println("Sou o adotante");

        String pattern = "MM/dd/yyyy HH:mm:ss";

        // Create an instance of SimpleDateFormat used for formatting
        // the string representation of date according to the chosen pattern
        DateFormat df = new SimpleDateFormat(pattern);
        String data = df.format(m.getData());
        System.out.println("Data da mensagem: " + data);
        leMensagem(m);
    }

    private String comprovanteResidencia;

    public String getComprovanteResidencia() {
        return comprovanteResidencia;
    }

    public void setComprovanteResidencia(String comprovanteResidencia) {
        this.comprovanteResidencia = comprovanteResidencia;
    }

}
