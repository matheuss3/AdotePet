package adotepet.fabrica;

public class Adotante extends Pessoa implements ITipoPessoa{
    private char comprovanteResidencia;

    public Adotante(String nome, String cpf, String endereco, String email, String telefone){
        super(nome, cpf, endereco, email, telefone);
    }

    public char getComprovanteResidencia(){
        return comprovanteResidencia;
    }

    public void setComprovanteResidencia(char comprovanteResidencia){
        this.comprovanteResidencia=comprovanteResidencia;
    }
    
    @Override
    public void criaPessoa(){
        System.out.println("Adotante criado");
    }
}