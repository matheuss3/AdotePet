package adotepet;

import adotepet.fabrica.ITipoAnimal;

public class Animal implements ITipoAnimal{
    private String raca, nome, tipo;
    private int idade;
    
    public Animal(String tipo, String raca, String nome, int idade){
        setTipo(tipo);
        setRaca(raca);
        setNome(nome);
        setIdade(idade);
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

    public String getTipo(){
        return tipo;
    }

    public void setTipo(String tipo){
        this.tipo=tipo;
    }
    
    public void criaAnimal(){
        System.out.println("Animal criado");
    }
}