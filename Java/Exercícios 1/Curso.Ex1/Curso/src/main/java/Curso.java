
public class Curso {
    String nome;
    int qtdealunos;
    String turma;
    
    public static void main(String[] args) {
        Curso c;
        c = new Curso();
      
        c.nome = "kaio";
        c.qtdealunos = 14;
        c.turma = "12";
        
        System.out.println("Nome: " + c.nome);
        System.out.println("Qtdealunos: " + c.qtdealunos);
        System.out.println("Turma: " + c.turma);
    }
}
