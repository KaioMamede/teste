class Conta {
    constructor(){
        this.saldo = 0
    }
}

class Corrente extends Conta{
    constructor(pLimite){
        super()
        this.limite = pLimite
    }

    get Limite(){return this.limite}
    set Limite(pLimite){this.limite = pLimite}
}

var obj_corrente = new Corrente(300)
console.log(obj_corrente)