package adotepet;

public class MensagemNegado extends MensagemAnuncioHandler {
    public static String MENSAGEM = "Que pena :( Não foi dessa vez " +
            "outra pessoa foi escolhida para ficar com o animalzinho, tente adotar outro animal!";

    public void enviaMensagem(Adotante a, Doador d) {
        Mensagem m = new Mensagem(MENSAGEM, a, d);

        m.addObservador(a);

        m.envio();
        System.out.println("");
    }
}