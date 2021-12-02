package adotepet;

public class Animal{
    private String raca, nome;
    private int idade;
    private Especie especie;
    
    public Animal(String raca, String nome, int idade, Especie especie){
        setRaca(raca);
        setNome(nome);
        setIdade(idade);
        setEspecie(especie);
    }

    public String getNome(){
        return nome;
    }

    public void setNome(String nome){
        this.nome=nome;
    }

    public String getRaca(){
        return raca;
    }

    public void setRaca(String raca){
        this.raca=raca;
    }

    public int getIdade(){
        return idade;
    }

    public void setIdade(int idade){
        this.idade=idade;
    }

    public Especie getEspecie(){
        return especie;
    }

    public void setEspecie(Especie especie){
        this.especie=especie;
    }
}