package adotepet;

import java.util.Date;
import java.util.Scanner;


public class Main {

    
    public static void main(String[] args) {
                
        DiretorAnuncioAdocao diretor = new DiretorAnuncioAdocao();
        AnuncioAdocao anuncio;
        // BIULDER QUE ORGANIZA AS NOSSAS CRIAÇÕES 
        
        Date data = new Date();
        anuncio = diretor.biulder("pitbull", "cachorro", "kiara", 2, "captura/foto.png", "kiara pulando na cama", "serra", data, "Kiara esta em busca de uma familia que ira dar muita atenção e carinho");
        
        
        
        
        
        
    }
    
}
