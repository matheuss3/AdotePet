import fabrica.FabricaPessoa;
import fabrica.ITipoPessoa;

import java.util.Date;
import java.util.Scanner;


public class Main {

    
    public static void main(String[] args) {
                
//        DiretorAnuncioAdocao diretor = new DiretorAnuncioAdocao();
//        AnuncioAdocao anuncio;
//
//        Date data = new Date();
//        anuncio = diretor.biulder("pitbull", "cachorro", "kiara", 2, "captura/foto.png", "kiara pulando na cama", "serra", data, "Kiara esta em busca de uma familia que ira dar muita atenção e carinho");


        ITipoPessoa pessoa = FabricaPessoa.criarPessoa("Doador", "Matheus", "12364", "Rua Vasco da Gama", "email@email.com", "3334-4562");
        pessoa.criaPessoa();

        
    }
    
}
