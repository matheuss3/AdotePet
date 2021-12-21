package adotepet;

import java.util.Date;

public class Main {
    public static void main(String[] args) {


        Doador doador = new Doador("Thais de Souza", "123883838218",
                new Date(1999, 11, 24), "Rua Nelson Teixeira", "thaissouzaifes@adotepet.com",
                "+552743289049");

        Especie e = new Especie("Cachorro");
        Animal animal = new Animal("Bulldog", "Janio", 2, e);
        Foto foto = new Foto("linkfcticio", "Foto janio correndo");

        AnuncioAdocao a = new AnuncioAdocao("Serra - ES", new Date(),
                "Animal encontrado abandonado!", animal, foto, doador);


        Adotante adotante = new Adotante("George Matheus", "13878487989",
                new Date(2000, 04, 30), "Rua Sao Francisco", "georgematheus@adotepet.com",
                "+5527988798848", "CONTA DE LUZ");

        PedidoAdocao pa1 = new PedidoAdocao(new Date(), "Quero adotar o janio", adotante);

        Adotante adotante2 = new Adotante("Matheus Oliveira", "13878487989",
                new Date(2000, 04, 03), "Rua Sao Francisco", "matheus@adotepet.com",
                "+5527988778848", "CONTA DE AGUA");

        PedidoAdocao pa2 = new PedidoAdocao(new Date(), "O janio é muito bonitinho", adotante2);

        a.adicionaPedido(pa1);
        a.adicionaPedido(pa2);
        a.escolhePedido();
        a.finalizaAnuncio();

    }
}
