package adotepet;

import java.util.Date;

public class Adotante extends Pessoa {
    public Adotante(String nome, String cpf, Date dataNascimento, String endereco, String email, String telefone, String comprovanteResidencia) {
        super(nome, cpf, dataNascimento, endereco, email, telefone);
        this.comprovanteResidencia = comprovanteResidencia;
    }

    public void update(Observado o) {
        Mensagem m = (Mensagem) o;
        System.out.println("Sou o adotante");
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
