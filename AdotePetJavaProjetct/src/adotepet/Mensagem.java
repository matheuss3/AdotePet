package adotepet;
import java.util.Date;

public class Mensagem{
    private Date dataHora;
    private String conteudo;

    public Date getDataHora(){
        return dataHora;
    }

    public void setDataHora(Date dataHora){
        this.dataHora=dataHora;
    }

    public String getConteudo(){
        return conteudo;
    }

    public void setConteudo(String conteudo){
        this.conteudo=conteudo;
    }
}
