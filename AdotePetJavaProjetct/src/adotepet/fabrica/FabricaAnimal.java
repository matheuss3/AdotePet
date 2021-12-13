package adotepet.fabrica;
import adotepet.Animal;

public class FabricaAnimal{
    public static ITipoAnimal criarAnimal(String tipo, String raca, String nome, int idade){
        ITipoAnimal animal=null;
        animal=new Animal(tipo, raca, nome, idade);
        return animal;
    }
}
