package fabrica;
import java.util.Scanner;

public class Main{
	public static void main(String[] args){
		Scanner tipo=new Scanner(System.in);
		String pessoa=tipo.nextLine();

		ITipoPessoa individuo = FabricaPessoa.criarPessoa(pessoa, "nome", "cpf", "rua", "email", "tel");
		individuo.criaPessoa();
		
		tipo.close();
	}
}