public class Produto {
    String marca;
    String  fabricante;
    String cod_barras;
    float preco;

    public Produto() {
    }

    public Produto(String m, String f, String c, float p) {
        this.marca = m;
        this.fabricante = f;
        this.cod_barras = c;
        this.preco = p;
    }
    public static void main(String[] args) {
        Produto p = new Produto();
        
        p.marca = "Iphone";
        p.fabricante = "Apple";
        p.cod_barras = "123456789-11";
        p.preco = 3000;
        
        System.out.println("Marca:" + p.marca);
        System.out.println("Fabricante:" + p.fabricante);
        System.out.println("Cod_barras:" + p.cod_barras);
        System.out.println("Preço:" + p.preco);
    }
}
