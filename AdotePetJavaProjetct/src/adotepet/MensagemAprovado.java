package adotepet;

public class MensagemAprovado extends MensagemAnuncioHandler {
    public static String MENSAGEM = "Parabéns!! Você foi o adotante escolhido para " +
            "ficar com o animalzinho!";

    public void enviaMensagem(Adotante a, Doador d) {
        Mensagem m = new Mensagem(MENSAGEM, a, d);

        m.addObservador(a);

        m.envio();
        System.out.println("");
    }
}
