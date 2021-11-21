package adotepet;

import java.util.Date;

public class DiretorAnuncioAdocao {
    
    public AnuncioAdocao biulder(String raca, String tipo,
            String nome, int idade, String link, String desc,
            String localizacao, Date dataHora, String descricao){

        Animal animal = null;
        AnuncioAdocao anuncioAdocao = null;
        Especie especie = null;
        Foto foto = null;
        
        BiulderAnuncioAdocao biulderAnuncioAdocao = new BiulderAnuncioAdocao(anuncioAdocao, animal, foto, especie); // criando o objeto biulder
        
        //criando tudo que o anuncio precisa
        biulderAnuncioAdocao.criaEspecie(tipo);
        biulderAnuncioAdocao.criaAnimal(raca, nome, idade, especie);
        biulderAnuncioAdocao.criaFoto(link, desc);
        biulderAnuncioAdocao.criaAnuncioAdocao(localizacao, dataHora, descricao, animal, foto);
               
        AnuncioAdocao anuncio = new AnuncioAdocao(localizacao, dataHora, descricao, animal, foto); //criando o objeto anuncio com todas as criações que ele precisa realizadas
        biulderAnuncioAdocao.imprimeAnuncio();
        return anuncio;
    } 
    
    
    
}
