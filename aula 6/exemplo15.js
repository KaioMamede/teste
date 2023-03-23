class Livro{
    constructor(pNome, pPreco){
        this.pNome
        this.pPreco
    }
    
    get Nome(){return this.nome}
    set Nome(pNome) {this.nome = pNome}

    get Preco(){return this.preco}
    set Preco(){pPreco = pPreco}
}

var obj_livro1 = new Livro("Use a cabeça Java")
console.Log("O livro "+ obj_livro1.nome+ "custa" +)
obj_livro1.preco+ "reais"

console.log("Preco: "+obj_livro1.preco)