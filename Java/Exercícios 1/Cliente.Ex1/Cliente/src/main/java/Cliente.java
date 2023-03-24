
public class Cliente {
    String nome;
    String endereco;
    String telefone;
    String email;
    //Arrumar
    public static void main(String[] args) {
        Cliente c1;
        c1 = new Cliente();
        
        c1.nome = "Fulano";
        c1.endereco = "Rua josé afonso";
        c1.telefone = "11 952426176";
        c1.email = "fulano01@gmail.com";
        
        System.out.println("Nome: " + c1.nome);
        System.out.println("Endereco: " + c1.endereco);
        System.out.println("Telefone: " + c1.telefone);
        System.out.println("Email: " + c1.email);
    }
}
