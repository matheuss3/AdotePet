package adotepet;
import java.util.Date;

public class Vacina{
    private String nome;
    private Date dataVacinacao;

    public String getNome(){
        return nome;
    }
	
    public void setNome(String nome){
        this.nome=nome;
    }

    public Date getDataVacinacao(){
        return dataVacinacao;
    }
	
    public void setDataVacinacao(Date dataVacinacao){
        this.dataVacinacao=dataVacinacao;
    }
}
