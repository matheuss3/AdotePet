package adotepet.cadeiaderesponsabilidade;
import static java.lang.String.format;
import static java.lang.System.out;
import adotepet.Animal;
import adotepet.Tipo;
import adotepet.fabrica.FabricaAnimal;
import adotepet.fabrica.FabricaPessoa;
import adotepet.fabrica.ITipoAnimal;
import adotepet.fabrica.ITipoPessoa;
import java.util.Date;
import java.util.Scanner;

public class Main {
    private String tipo;
    public static void main(String[] args) {
        Scanner tipo=new Scanner(System.in);
	String pessoa=tipo.nextLine();
	ITipoPessoa individuo=FabricaPessoa.criarPessoa(pessoa, "nome", "cpf", "rua", "email", "tel", "comprovanteResidencia", new Date(2000, 04, 30));
	individuo.criaPessoa();
        CadastroPet pet = new TipoCachorro();
        pet.setNext(new TipoGato());
        pet.setNext(new TipoPassaro());
        pet.setNext(new TipoPeixe());
        //tipo.close();
        try {
            if(pessoa.equalsIgnoreCase("Doador")){
                Scanner pet1=new Scanner(System.in);
                String especie=pet1.nextLine();
                ITipoAnimal animal=FabricaAnimal.criarAnimal(especie, "vira-lata", "Totó", 1);
                animal.criaAnimal();
                if(especie.equalsIgnoreCase("cachorro")){
                    pet.efetuarCadastro(Tipo.CACHORRO);
                }else if(especie.equalsIgnoreCase("passaro")){
                    pet.efetuarCadastro(Tipo.PASSARO);
                }else if(especie.equalsIgnoreCase("peixe")){
                    pet.efetuarCadastro(Tipo.PEIXE);
                }else{
                    pet.efetuarCadastro(Tipo.GATO);
                }
                pet1.close();
            }
        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}
