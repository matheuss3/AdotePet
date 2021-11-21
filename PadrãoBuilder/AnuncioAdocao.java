package adotepet;

import java.util.Date;
import java.util.Scanner;

public class AnuncioAdocao {
    
    private String localizacao;
    private Date dataHora;
    private String descricao;
    private Animal animal;
    private Foto foto;
    
    public AnuncioAdocao(String localizacao, Date dataHora, String descricao, Animal animal, Foto foto){
        
        setLocalizacao(localizacao);
        setDataHora(dataHora);
        setDescricao(descricao);
        setAnimal(animal);
        setFoto(foto); 
    }    
    
    public String getLocalizacao() {
        return localizacao;
    }

    public void setLocalizacao(String localizacao) {
        this.localizacao = localizacao;
    }
  
    public Date getDataHora() {
        return dataHora;
    }
 
    public void setDataHora(Date dataHora) {
        this.dataHora = dataHora;
    }
  
    public String getDescricao() {
        return descricao;
    }

   
    public void setDescricao(String descricao) {
        this.descricao = descricao;
    }

    public Animal getAnimal() {
        return animal;
    }

    public void setAnimal(Animal animal) {
        this.animal = animal;
    }

    public Foto getFoto() {
        return foto;
    }

    public void setFoto(Foto foto) {
        this.foto = foto;
    }
    
}
