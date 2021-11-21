package adotepet;

public class Foto {
    
    private String link;
    private String descricao;
    
    public Foto(String link, String descricao){
        
        setLink(link);
        setDescricao(descricao);      
    }

    
    public String getLink() {
        return link;
    }

    public void setLink(String link) {
        this.link = link;
    }

    public String getDescricao() {
        return descricao;
    }

    public void setDescricao(String descricao) {
        this.descricao = descricao;
    }
    
    
}
