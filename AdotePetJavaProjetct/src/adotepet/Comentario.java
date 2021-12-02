package adotepet;
import java.util.Date;

public class Comentario{
    private Date dataHora;
    private String descricao;

    public Date getDataHora(){
        return dataHora;
    }

    public void setDataHora(Date dataHora){
        this.dataHora=dataHora;
    }

    public String getDescricao(){
        return descricao;
    }

    public void setDescricao(String descricao) {
        this.descricao=descricao;
    }
}