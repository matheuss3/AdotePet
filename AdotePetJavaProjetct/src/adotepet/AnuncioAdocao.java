package adotepet;

import java.lang.reflect.Array;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;
import java.util.Scanner;

public class AnuncioAdocao {
    
    private String localizacao;
    private Date dataHora;
    private String descricao;
    private Animal animal;
    private Foto foto;
    private Doador doador;
    private PedidoAdocao pedidoEscolhido;
    private ArrayList<PedidoAdocao> pedidos;
    
    public AnuncioAdocao(String localizacao, Date dataHora, String descricao,
                         Animal animal, Foto foto, Doador d){

        pedidos = new ArrayList<>();
        doador = d;
        setLocalizacao(localizacao);
        setDataHora(dataHora);
        setDescricao(descricao);
        setAnimal(animal);
        setFoto(foto); 
    }    

    public void adicionaPedido(PedidoAdocao pa) {
        pedidos.add(pa);
    }

    public void escolhePedido() {
        int i = 0;

        for(PedidoAdocao pedido : pedidos) {
            System.out.println("Pedido: " + (i + 1) + "\n" +
                    "Adotante: " + pedido.getAdotante().getNome() + "\n" +
                    "Descrição: " + pedido.getDescricao());
            System.out.println("");

            i++;
        }

        Scanner s = new Scanner(System.in);
        System.out.println("Digite o número do pedido do adotante para ficar com o animal: ");
        int indexPedidoEscolhido = s.nextInt() - 1;

        pedidoEscolhido = pedidos.remove(indexPedidoEscolhido);
    }

    public void finalizaAnuncio() {
        MensagemAprovado ma = new MensagemAprovado();
        MensagemNegado mn = new MensagemNegado();

        ma.setNextHandler(mn);

        ArrayList<Adotante> a = new ArrayList<Adotante>();
        a.add(pedidoEscolhido.getAdotante());

        for(PedidoAdocao pedido : pedidos) {
            a.add(pedido.getAdotante());
        }

        ma.processHandler(a, doador);
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
