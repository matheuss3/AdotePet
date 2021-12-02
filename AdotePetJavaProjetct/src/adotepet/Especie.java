package adotepet;

public class Especie{
    private String tipo;
    
    public Especie(String tipo){
        
        setTipo(tipo);
    }

    public String getTipo(){
        return tipo;
    }

    public void setTipo(String tipo){
        this.tipo=tipo;
    }
}