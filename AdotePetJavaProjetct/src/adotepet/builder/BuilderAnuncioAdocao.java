package adotepet.builder;
import java.util.ArrayList;
import adotepet.Animal;
import adotepet.Foto;
import adotepet.AnuncioAdocao;
import java.util.Date;

public class BuilderAnuncioAdocao{
    private AnuncioAdocao anuncioAdocao;
    private Animal animal;
    private Foto foto;
    
    public BuilderAnuncioAdocao(AnuncioAdocao anuncioAdocao, Animal animal, Foto foto){        
        setAnuncioAdocao(anuncioAdocao);
        setAnimal(animal);
        setFoto(foto);
    }
    
    public void imprimeAnuncio(){
        System.out.println("Anúncio de adoção da " + this.animal.getNome() + " cadastrado com sucesso!");
        System.out.println("---- Imprimindo anuncio de adoção cadastrado ----");
        System.out.println("Raça do animal: " + this.animal.getRaca());
        System.out.println("Idade do animal: " + this.animal.getIdade());
        System.out.println("Descrição do anúncio: " + this.anuncioAdocao.getDescricao());
    }
    
    public void criaAnimal(String tipo, String raca, String nome, int idade){
        Animal animal=new Animal(tipo, raca, nome, idade);     
        setAnimal(animal);
    }
    
    public void criaFoto(String link, String descricao){
        Foto foto=new Foto(link, descricao);
        this.foto=foto;
    }
    
    public void criaAnuncioAdocao(String localizacao, Date dataHora, String descricao, Animal animal, Foto foto){
        AnuncioAdocao anuncioadocao=new AnuncioAdocao(localizacao, dataHora, descricao, animal, foto);
        this.anuncioAdocao=anuncioadocao;
    }
    
    public AnuncioAdocao getAnuncioAdocao(){
        return anuncioAdocao;
    }

    public void setAnuncioAdocao(AnuncioAdocao anuncioAdocao){
        this.anuncioAdocao=anuncioAdocao;
    }

    public Animal getAnimal(){
        return animal;
    }

    public void setAnimal(Animal animal){
        this.animal=animal;
    }

    public Foto getFoto(){
        return foto;
    }

    public void setFoto(Foto foto){
        this.foto=foto;
    }
}