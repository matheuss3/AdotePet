package adotepet;

import java.util.Calendar;
import java.util.Date;

public class Mensagem extends Observado {
    private Date data;
    private String conteudo;
    private Pessoa pessoaDestino;
    private Pessoa pessoaOrigem;

    public Mensagem(String conteudo, Pessoa pd, Pessoa po) {
        setConteudo(conteudo);
        setPessoaDestino(pd);
        setPessoaOrigem(po);
    }

    public void envio() {
        setData(Calendar.getInstance().getTime());
        notificaTodos();
    }

    public Date getData() {
        return data;
    }

    public void setData(Date data) {
        this.data = data;
    }

    public String getConteudo() {
        return conteudo;
    }

    public void setConteudo(String conteudo) {
        this.conteudo = conteudo;
    }

    public Pessoa getPessoaDestino() {
        return pessoaDestino;
    }

    public void setPessoaDestino(Pessoa pessoaDestino) {
        this.pessoaDestino = pessoaDestino;
    }

    public Pessoa getPessoaOrigem() {
        return pessoaOrigem;
    }

    public void setPessoaOrigem(Pessoa pessoaOrigem) {
        this.pessoaOrigem = pessoaOrigem;
    }
}
