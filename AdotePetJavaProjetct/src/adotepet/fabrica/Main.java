package adotepet.fabrica;
import java.util.Date;
import java.util.Scanner;

public class Main{
    public static void main(String[] args){
	Scanner tipo=new Scanner(System.in);
	String pessoa=tipo.nextLine();
	ITipoPessoa individuo=FabricaPessoa.criarPessoa(pessoa, "nome", "cpf", "rua", "email", "tel", "comprovanteResidencia", new Date(2000, 04, 30));
	individuo.criaPessoa();
        if(pessoa.equalsIgnoreCase("Doador")){
            ITipoAnimal animal=FabricaAnimal.criarAnimal("cachorro", "vira-lata", "Totó", 1);
            animal.criaAnimal();
        }
        tipo.close();
    }
}