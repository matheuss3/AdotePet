package adotepet.observador;
import adotepet.Adotante;
import adotepet.Doador;
import adotepet.Mensagem;
import java.util.Date;
import java.text.SimpleDateFormat;
import adotepet.observador.Observador;

public class Main{
    public static void main(String[] args){
        Adotante adotante=new Adotante("George Matheus", "13878487989", new Date(2000, 04, 30), "Rua Sao Francisco", "georgematheus@adotepet.com", "+5527988798848", "CONTA DE LUZ");
        Doador doador=new Doador("Thais de Souza", "123883838218", new Date(1999, 11, 24), "Rua Nelson Teixeira", "thaissouzaifes@adotepet.com", "+552743289049");
        Mensagem m=new Mensagem("Quero adotar seu pet", doador, adotante);
        m.addObservador(adotante);
        m.addObservador(doador);
        m.envio();
    }
}