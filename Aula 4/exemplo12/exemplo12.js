function cacularIMC(){
    var peso = (document.getElementById("peso").value)
    var altura = (document.getElementById("altura").value)
    var imc = peso / (altura + altura)
    document.getElementById("res").innerHTML = imc

    var classificacao = ""
    
    if (imc <18.5){
         classificacao = "Desnutrido"
    }
    else if (imc < 25){
         classificacao = "Peso normal"
    }
    else if (imc < 30){
         classificacao = "Sobrepeso"
    }
    else if (imc < 35){
        classificacao = "Obesidade I"
    }
    else if (imc < 40){
        classificacao = "Obesidade II"
    }
    else if (imc <45){
        classificacao = "Obesidade III"
    }









    /*console.log("peso:" + peso)
    console.log("altura:" + altura)
    console.log("IMC: "+imc)
    */
}