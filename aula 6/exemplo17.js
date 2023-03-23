class Livro{
    constructor(pNome, pPreco){
        this.pNome
        this.pPreco
    }
    
    get Nome(){return this.nome}
    set Nome(pNome) {this.nome = pNome}

    get Preco(){return this.preco}
    set Preco(pPreco){this.preco = pPreco}

    calcularDesconto(pDesconto){
        this.preco= this.preco - (this.preco * pDesconto)/ 100
    }
}

var obj_livro1 = new Livro("Use a cabeça Java",200)
var obj_livro2 = new Livro("Use a cabeça c#",170)

var lista = []

lista.push(obj_livro1)
lista.push(obj_livro2)

console.log(lista(1))

