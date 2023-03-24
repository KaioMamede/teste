public class Paciente {
    String nome;
    String rg;
    String endereco;
    String telefone;
    String profissao;

    public Paciente() {
    }

    public Paciente(String nome, String rg, String endereco, String telefone, String profissao) {
        this.nome = nome;
        this.rg = rg;
        this.endereco = endereco;
        this.telefone = telefone;
        this.profissao = profissao;
    }
    public static void main(String[] args) {
         Paciente P = new Paciente();
         
         P.nome = "Fulano";
         P.rg = "57691333";
         P.endereco ="Rua joão pinto nascimento";
         P.telefone = "11 952426176";
         P.profissao = "Programador";
         
         System.out.println("Nome: " +P.nome);
         System.out.println("RG: " +P.rg);
         System.out.println("Endereco: " +P.endereco);
         System.out.println("Telefone: " +P.telefone);
         System.out.println("Profissao: " +P.profissao);
         
    }
 
    
    
    
}
