package adotepet.builder;
import adotepet.Animal;
import adotepet.Foto;
import adotepet.AnuncioAdocao;
import java.util.Date;

public class DiretorAnuncioAdocao{
    public AnuncioAdocao biulder(String raca, String tipo, String nome, int idade, String link, String desc, String localizacao, Date dataHora, String descricao){
        Animal animal=null;
        AnuncioAdocao anuncioAdocao=null;
        Foto foto=null;
        
        BuilderAnuncioAdocao builderAnuncioAdocao=new BuilderAnuncioAdocao(anuncioAdocao, animal, foto); // criando o objeto biulder
        
        //criando tudo que o anuncio precisa
        builderAnuncioAdocao.criaAnimal(tipo, raca, nome, idade);
        builderAnuncioAdocao.criaFoto(link, desc);
        builderAnuncioAdocao.criaAnuncioAdocao(localizacao, dataHora, descricao, animal, foto);
               
        AnuncioAdocao anuncio=new AnuncioAdocao(localizacao, dataHora, descricao, animal, foto); //criando o objeto anuncio com todas as criações que ele precisa realizadas
        builderAnuncioAdocao.imprimeAnuncio();
        return anuncio;
    }
}
