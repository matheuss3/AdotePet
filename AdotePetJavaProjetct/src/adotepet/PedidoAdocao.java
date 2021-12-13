package adotepet;
import java.util.Date;

public class PedidoAdocao{
    public Date getDataHora(){
        return dataHora;
    }

    public void setDataHora(Date dataHora){
        this.dataHora=dataHora;
    }

    public String getDescricao(){
        return descricao;
    }
    
    public void setDescricao(String descricao){
        this.descricao=descricao;
    }
    
    public String getSituacao(){
        return situacao;
    }
    
    public void setSituacao(String situacao){
        this.situacao=situacao;
    }
    
    public Date getDataAlteracaoSituacao(){
        return dataAlteracaoSituacao;
    }
    
    public void setDataAlteracaoSituacao(Date dataAlteracaoSituacao){
        this.dataAlteracaoSituacao=dataAlteracaoSituacao;
    }
    
    private Date dataHora, dataAlteracaoSituacao;
    private String descricao, situacao;
}
