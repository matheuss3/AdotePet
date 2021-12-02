package adotepet.builder;
import java.util.Date;
import adotepet.Animal;
import adotepet.Foto;
import adotepet.Especie;

public class DiretorAnuncioAdocao{
    public AnuncioAdocao biulder(String raca, String tipo, String nome, int idade, String link, String desc, String localizacao, Date dataHora, String descricao){
        Animal animal=null;
        AnuncioAdocao anuncioAdocao=null;
        Especie especie=null;
        Foto foto=null;
        
        BuilderAnuncioAdocao builderAnuncioAdocao=new BuilderAnuncioAdocao(anuncioAdocao, animal, foto, especie); // criando o objeto biulder
        
        //criando tudo que o anuncio precisa
        builderAnuncioAdocao.criaEspecie(tipo);
        builderAnuncioAdocao.criaAnimal(raca, nome, idade, especie);
        builderAnuncioAdocao.criaFoto(link, desc);
        builderAnuncioAdocao.criaAnuncioAdocao(localizacao, dataHora, descricao, animal, foto);
               
        AnuncioAdocao anuncio=new AnuncioAdocao(localizacao, dataHora, descricao, animal, foto); //criando o objeto anuncio com todas as criações que ele precisa realizadas
        builderAnuncioAdocao.imprimeAnuncio();
        return anuncio;
    }
}
