<?php
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Mercadinho do Zé</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,200&display=swap');   /* Importando font Poppins*/
*{
    margin: 0;
    padding: 0;
}
html{
  scroll-behavior: smooth;    /* Movimento de rolagem ao clicar no item*/
  transition: .2s;
}
body,ul {   /* Corpo e lista */
  margin: 0px;
  padding: 0px;
  font-family: 'Poppins', sans-serif;
}
body::-webkit-scrollbar {   /* Alterando a cor e tamanho do scroll lateral*/
  width: 10px;
}
body::-webkit-scrollbar-track {   /* Alterando a cor e tamanho do scroll lateral*/
  background: rgba(0, 0, 0, 0.05);
}
body::-webkit-scrollbar-thumb {   /* Alterando a cor e tamanho do scroll lateral*/
  background-color: #BAD7F2;
  border-radius: 40px;
  border: 5px solid rgba(0, 0, 0, 0.05);
}
a {   /* Estilizando texto e icone header*/
  color: black;
  font-weight: bolder;
  text-decoration: none;
  transition: all 0.5s;
  cursor: pointer;
}

.logo:hover{
  transform: scale(1);
}
a:hover {   /* Estilizando texto e icone header - Zoom*/
 color: #000000;
 transition: 0.5s;
 -webkit-transform: scale(1.2);
  transform: scale(1.2);
}
.contato{   /* Estilizando contato e icone header*/
  color: aliceblue;
}
#logo {   /*Imagem Logo Supermercado*/
  width: 100px;
  padding: 10px 0px 0px 5px;
  display: block;
}

#header {   /* Header */
  width: 100%;
  box-sizing: border-box;
  height: 100px;
  padding: 1rem;
  display: flex;
  position: fixed;
  align-items: center;
  justify-content: space-between;
  z-index: 1000;
  background: #2980B9; 
  background: -webkit-linear-gradient(to right, #FFFFFF, #6DD5FA, #2980B9); 
  background: linear-gradient(to right, #FFFFFF, #6DD5FA, #2980B9); 

 
}
#menu {   /* Menu */
  display: flex;
  list-style: none;
  gap: 0.5rem;
}
#menu a {
  display: block;
  padding: 0.5rem;
}
#btn-mobile {
  display: none;
}
#icon {
  padding: 0px 0px 0px 3px;
}
#banner{
  width: 100%;
}
#cat-peixes{ /* Imagem peixes*/
  width: 100%;
  height: auto;
  background-image: url("images/fundo-margarina.jpeg");
  background-repeat: no-repeat;
  background-size: cover;
}
.titulo-peixes{ /* peixes*/
  width: 100%;
  height: 80px;
  color: rgb(0,191,255);
  text-align: center;
}
#cat-frutas{ /* Imagem frutas*/
  width: 100%;
  height: auto;
  background-image: url("images/fundo-margarina.jpeg");
  background-repeat: no-repeat;
  background-size: cover;
}
.titulo-frutas{ /* frutas*/
  width: 100%;
  height: 80px;
  color: rgb(0,191,255);
  text-align: center;
}
#cat-legumes{ /* Imagem legumes*/
  width: 100%;
  height: auto;
  background-image: url("images/fundo-margarina.jpeg");
  background-repeat: no-repeat;
  background-size: cover;
}
.titulo-legumes{ /* legumes*/
  width: 100%;
  height: 80px;
  color: rgb(0,191,255);
  text-align: center;
}

#cat-limpeza{ /* Imagem limpeza*/
  width: 100%;
  height: auto;
  background-image: url("images/fundo-margarina.jpeg");
  background-repeat: no-repeat;
  background-size: cover;
}
.titulo-limpeza{ /* Titulo limpeza*/
  width: 100%;
  height: 80px;
  color: rgb(0,191,255);
  text-align: center;
}

#cat-bebidas{ /* Imagem fundo bebidas*/
  width: 100%;
  height: auto;
  background-image: url("images/fundo-margarina.jpeg");
  background-repeat: no-repeat;
  background-size: cover;
}
.titulo-bebidas{ /* Titulo bebidas*/
  width: 100%;
  height: 80px;
  color: rgb(0,191,255);
  text-align: center;
}

#cat-doces{ /* Imagem fundo doces*/
  width: 100%;
  height: auto;
  background-image: url("images/fundo-margarina.jpeg");
  background-repeat: no-repeat;
  background-size: cover;
}
.titulo-doces{ /* Titulo doces*/
  width: 100%;
  height: 80px;
  color: rgb(0,191,255);
  text-align: center;
}

#cat-graos{ /* Imagem fundo graos*/
  width: 100%;
  height: auto;
  background-image: url("images/fundo-margarina.jpeg");
  background-repeat: no-repeat;
  background-size: cover;
}
.titulo-graos{ /* Titulo graos*/
  width: 100%;
  height: 80px;
  color: rgb(0,191,255);
  text-align: center;
}
#cat-carne{ /* Imagem Fundo Carnes & Frangos */
  width: 100%;
  height: auto;
  margin-top: -20px;
  background-image: url("images/fundo.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}
.titulo-carne{  /* Titulo Tamanho Carnes & Frangos */
  width: 100%;
  height: 80px;
  color: rgb(224, 39, 39);
  text-align: center;
}

.textotitulo{ /* Texto Tamanho Carnes & Frangos */
  font-size: 30px;
  font-weight: bold;
  padding-top: 15px;
}
#cat-margarinas{ /* Imagem Fundo Margarinas */
  width: 100%;
  height: auto;
  background-image: url("images/fundo-margarina.jpeg");
  background-repeat: no-repeat;
  background-size: cover;
}
.titulo-margarinas{  /* Titulo Tamanho Margarina */
  width: 100%;
  height: 80px;
  color: rgb(0,191,255);
  text-align: center;
}
.container{ /* Card Para todas Categorias */
  position: relative;
  gap: 20px;
  height: auto;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  padding: 30px;
}
.container .card{
  position: relative;
  max-width: 300px;
  height: 400px;
  background: #fff;
  margin: 30px 10px;
  display: flex;
  flex-direction: column;
  box-shadow: 0 5px 202px rgba(0,0,0,0.2);
  border-radius: 20px;
  transition: 0.3s ease-in-out;
}
.carnes-img{
  width: 200px;
  height: 200px;
}
.container .card:hover{
  height: 800px;
}
.container .card .imgBx{
  position: relative;
  border-radius: 20px;
  width: 200px;
  height: 260px;
  left: 50px;
  margin-top: -50px;
  z-index: 1;
  box-shadow: 0 5px 20px rgba(0,0,0,0.2);
}
.container .card .imgBx img{
  max-width: 100%;
  border-radius: 4px;
}
.container .card .content{
  position: relative;
  margin-top: -140px;
  padding: 10px 15px;
  text-align: center;
  color: #111;
  visibility: hidden;
  opacity: 0;
  transition: 0.3s ease-in-out;
}
.container .card:hover .content{
  visibility: visible;
  opacity: 1;
  margin-top: 20px;
  transition-delay: 0.3s;
}

@media (max-width: 1050px) {  /* Responsivando Site e Menu */
  #menu {
    display: flex;
    flex-direction: column;
    align-items: center;
    position: absolute;
    width: 100%;
    top: 100px;
    right: 0px;
    background: #2980B9;
    transition: 0.6s;
    z-index: 1000;
    height: 0px;
    visibility: hidden;
    overflow-y: hidden;
  }
  #nav.active #menu {
    height: 90vh;
    visibility: visible;
  }
  #menu a {
    padding: 1rem 0;
    margin: 0 1rem;
    border-bottom: 2px solid rgba(0, 0, 0, 0.05);
  }
  #btn-mobile {
    display: flex;
    padding: 0.5rem 1rem;
    font-size: 1rem;
    border: none;
    background: none;
    cursor: pointer;
    gap: 0.5rem;
  }
  #hamburger {
    border-top: 2px solid;
    width: 20px;
  }
  #hamburger::after,
  #hamburger::before {
    content: '';
    display: block;
    width: 20px;
    height: 2px;
    background: currentColor;
    margin-top: 5px;
    transition: 0.3s;
    position: relative;
  }
  #nav.active #hamburger {
    border-top-color: transparent;
  }
  #nav.active #hamburger::before {
    transform: rotate(135deg);
  }
  #nav.active #hamburger::after {
    transform: rotate(-135deg);
    top: -7px;
  }
}
@media only screen and (max-width: 480px) {
  #banner {
    width: 100%;
  }
}
  </style>
</head>

<body>
  <!--Cabeçalho -- Topo-->
  <header id="header">
    
    <!--Logo-->   
    <a class="logo" href="#banner"><img id="logo" src="images/logoA.png"></a>
    
    <nav id="nav">
      <!--Menu Hamburguer-->
      <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">
        <span id="hamburger"></span>
      </button>
      <!--Lista itens-->
      <ul id="menu" role="menu">
        <li>
          <!--Categoria Carne-->
          <a class="link" href="#cat-carne">Carnes  <!--Linkando no href com o id da section direcionada-->
            <img src="images/carne.png">
          </a>
        </li>
        <li>
          <!--Categoria Margarina-->
          <a class="link" href="#cat-margarinas">Margarinas   <!--Linkando no href com o id da section direcionada-->
            <img src="images/manteiga.png">
          </a>
        </li>
        <li>
          <!--Categoria Grãos-->
          <a class="link" href="#cat-graos">Grãos    <!--Linkando no href com o id da section direcionada-->
            <img src="images/graos.png">
          </a>
        </li>
        <li>
          <!--Categoria Doces-->
          <a class="link" href="#cat-doces">Doces    <!--Linkando no href com o id da section direcionada-->
            <img src="images/doce.png">
          </a>
        </li>
        <li>
          <!--Categoria Bebidas-->
          <a class="link" href="#cat-bebidas">Bebidas   <!--Linkando no href com id da section direcionada-->
            <img src="images/bebida.png">
          </a>
        </li>
        <li>
          <!--Categoria Limpeza-->
          <a class="link" href="#cat-limpeza">Limpeza  <!--Linkando no href com id da section direcionada-->
            <img src="images/limpeza.png">
          </a>
        </li>
        <li>
          <!--Categoria Verduras-->
          <a class="link" href="#cat-legumes">Legumes  <!--Linkando no href com id da section direcionada-->
            <img src="images/verdura.png"> 
          </a>
        </li>
        <li>
          <!--Categoria Frutas-->  
          <a class="link" href="#cat-frutas">Frutas  <!--Linkando no href com id da section direcionada-->
            <img src="images/frutas.png">
          </a>
        </li>
        <li>
          <!--Categoria Peixes-->  
          <a class="link" href="#cat-peixes">Peixes  <!--Linkando no href com id da section direcionada-->
            <img src="images/peixe.png">
          </a>
        </li>
        <li>
            <!--Contato-->
            <a class="link" href="cdProdutos.php">Produtos  <!--Linkando no href com id da section direcionada-->
              <img src="images/tabela.png">
            </p>
          </a>
        </li>
        <li>
          <!--ADM-->
          <a class="link" href="ademares.php">ADM 
            <img src="images/adm.png">
          </a>
        </li>
        
                    
      </ul>
      
    </nav>
    
    
    <br>
    <?php
        echo "<h4>Bem vindo <u>$logado</u></h4>";
    ?>
    <div class="d-flex">
        <a href="sair.php" class="btn btn-danger">Sair</a>
    </div>
    <!--Fim do Cabeçalho-->
  </header>
  <!--Seção Banner Principal-->
  <img src="images/cleiton.jpg" id="banner"> 
  </img>
  <!--Fim da Seção Banner Principal-->
  <!--Categoria Carne-->
  
  <section id="cat-carne">
    <div class="titulo-carne">
      <h3 class="textotitulo">Carnes & Frangos</h3>
    </div>
    <div class="container">
      <div class="card">
        <div class="imgBx">
              <img class="carnes-img" src="images/img1.png">
        </div>
          <div class="content">
              <h2>Picanha - R$ 57,99kg</h2>
              <p>Picanha Friboi tradicional peça a vácuo com preço imperdível, só aqui!</p>
          </div>
      </div>

      <div class="card">
          <div class="imgBx">
              <img class="carnes-img" src="images/img2.png">
          </div>
          <div class="content">
              <h2>Fraldinha - R$ 36,99kg</h2>
              <p>Fraldinha Friboi peça a vácuo com preço imperdível, só aqui!</p>
          </div>
      </div>    

      <div class="card">
          <div class="imgBx">
              <img class="carnes-img" src="images/img3.png">
          </div>
          <div class="content">
              <h2>Contrafilé - R$ 41,99kg</h2>
              <p>Contrafilé pedaço para churrasco com preço imperdível, só aqui!</p>
          </div>
      </div>

      <div class="card">
        <div class="imgBx">
            <img class="carnes-img" src="images/img4.png">
        </div>
        <div class="content">
            <h2>Cordeiro - R$ 45,99kg</h2>
            <p>Paleta de Cordeiro congelada peça com preço imperdível, só aqui!</p>
        </div>
      </div>

      <div class="card">
          <div class="imgBx">
          <img class="carnes-img" src="images/img5.png">
          </div>
        <div class="content">
          <h2>Cupim - R$ 36,99kg</h2>
          <p>Cupim Friboi pedaço para churrasco com preço imperdível, só aqui!</p>
        </div>
      </div>

      <div class="card">
        <div class="imgBx">
          <img class="carnes-img" src="images/img6.png">
        </div>
        <div class="content">
          <h2>Picanha Suína - R$ 26,99kg</h2>
          <p>Picanha Suína Pamplona temperada resfriada com preço imperdível, só aqui!</p>
        </div>
      </div>

      <div class="card">
          <div class="imgBx">
            <img class="carnes-img" src="images/img7.png">
          </div>
        <div class="content">
          <h2>Costela Suína - R$ 21,99kg</h2>
          <p>Picanha Suína Perdigão a granel com preço imperdível, só aqui!</p>
        </div>
      </div>

      <div class="card">
        <div class="imgBx">
          <img class="carnes-img" src="images/img8.png">
        </div>
        <div class="content">
          <h2>Bisteca Suína - R$ 17,99kg</h2>
          <p>Bisteca Suína Sadia a granel com preço imperdível, só aqui!</p>
        </div>
      </div>

      <div class="card">
        <div class="imgBx">
          <img class="carnes-img" src="images/img9.png">
        </div>
        <div class="content">
          <h2>Coxinha de Frango - R$ 14,99kg</h2>
          <p>Coxinha da asa de frango a granel com preço imperdível, só aqui!</p>
        </div>
      </div>

      <div class="card">
        <div class="imgBx">
          <img class="carnes-img" src="images/img10.png">
        </div>
        <div class="content">
          <h2>Linguiça Toscana - R$ 15,29kg</h2>
          <p>Linguiça Toscana Seara a granel com preço imperdível, só aqui!</p>
        </div>
      </div>

      
      <div class="card">
        <div class="imgBx">
          <img class="carnes-img" src="images/nuggets.png">
        </div>
        <div class="content">
          <h2>Nuggets de Frango Sadia - R$ 16,10 700g</h2>
          <p>Nuggets de Frango Sadia com preço imperdível, só aqui!</p>
        </div>
      </div>

    </div>    
  </section>

  <!--Categoria Margarinas-->
  <section id="cat-margarinas">
    <div class="titulo-margarinas">
      <h3 class="textotitulo">Margarinas</h3>
    </div>
      <div class="container">
        <div class="card">
          <div class="imgBx">
            <img class="margarinas.img" src="images/img12.png">
          </div>
            <div class="content">
              <h2>Margarina Qualy - R$ 4,99</h2>
              <p>Margarina Qualy com preço imperdível, só aqui!</p>
            </div>
        </div>

        <div class="card">
          <div class="imgBx">
            <img class="margarinas.img" src="images/Vigor.png">
          </div>
            <div class="content">
              <h2>Margarina Vigor - R$ 9,90 500g</h2>
              <p>Manteiga de qualidade, só aqui!!</p>
            </div>
        </div>

        <div class="card">
          <div class="imgBx">
              <img class="margarinas.img" src="images/calybom.png">
          </div>
            <div class="content">
              <h2>Margarina Claybom - R$ 7,75 500g</h2>
              <p>Manteiga de cremosidade, só aqui!!</p>
            </div>
        </div>

        <div class="card">
          <div class="imgBx">
            <img class="margarinas.img" src="images/danone.png"> 
          </div>
            <div class="content">
              <h2>Margarina Danone - R$ 13,47 200g</h2>
              <p>Manteiga danone, o melhor só aqui!!</p>
            </div>
        </div>

        <div class="card">
          <div class="imgBx">
            <img class="margarinas.img" src="images/Requeijão.png">
          </div>
            <div class="content">
              <h2>Requeijão cremoso - R$ 9,99 200g</h2>
              <p>Requeijão vigor cremoso com descontos imperdíveis, Só aqui!!</p>
            </div>
        </div>

        <div class="card">
          <div class="imgBx">
            <img class="margarinas.img" src="images/RequeijãoNestle.png">
          </div>
            <div class="content">
              <h2>Requeijão Nestle - R$ 9,69 200g</h2>
              <p>Requeijão Nestle cremoso Com descontos imperdíveis, Só aqui!!</p>
            </div>
        </div>

         <div class="card">
          <div class="imgBx">
            <img class="margarinas.img" src="images/RequeijãoElegê.png">
          </div>
            <div class="content">
              <h2>Requeijão Elegê - R$ 8,28 200g</h2>
              <p>Requeijão Elegê cremoso Com descontos imperdíveis, só Aqui!!</p>
            </div>
         </div> 

         <div class="card">
          <div class="imgBx">
            <img class="margarinas.img" src="images/maionese.png">
          </div>
            <div class="content">
              <h2>Maionese Hellmann's - R$ 8,19 250g</h2>
              <p>Maionese Hellmann's com descontos imperdíveis, Só Aqui!!</p>
            </div>
         </div>

         <div class="card">
            <div class="imgBx">
              <img class="margarinas.img" src="images/MaioneseHeinz.png">
            </div>
              <div class="content">
                <h2>Maionese Heinz - R$ 17,98 215g</h2>
                <p>Maionese Heinz com descontos imperdíveis, Só Aqui!!</p>
              </div>
         </div>
      </div>

  </section>

   <!--Categoria Graos--> 
  <section id="cat-graos">
    <div class="titulo-graos">
        <h3 class="textotitulo">Graos</h3>
    </div>
    <div class="container">
      <div class="card">
        <div class="imgBx">
          <img class="graos-img" src="images/img13.png">
        </div>
          <div class="content">
            <h2>Arroz Blue Ville - R$ 3,56g</h2>
            <p>Arroz Blue Ville com descontos imperdíveis, só a qui!!</p>
          </div>
      </div>

      <div class="card">
      <div class="imgBx">
          <img class="graos-img" src="images/Feijão1.png">
      </div>
        <div class="content">
          <h2>Feijão Camil - R$ 12,00kg</h2>
          <p>Feijão Camil com descontos imperdíveis, só aqui!!!</p>
        </div>
      </div>

      <div class="card">
        <div class="imgBx">
          <img class="graos-img" src="images/FeijãoPreto.png">
        </div>
          <div class="content">
            <h2>Feijão Preto - R$ 6,79kg</h2>
           <p>Feijão Preto Kicaldo com descontos imperdíveis, só aqui!!!</p>
          </div>
      </div>
      
    </div>
  </section>

  <!--Categoria Doces-->
  <section id="cat-doces">
      <div class="titulo-doces">
        <h3 class="textotitulo">Doces</h3>
      </div> 
      <div class="container">
        <div class="card">
          <div class="imgBx">
            <img class="doces-img" src="images/img16.png">
          </div>
            <div class="content">
              <h2>Chocolate - R$ 10,99 165g</h2>
              <p>Chocolate Laka e Lacta com descontos imperdíveis, Só Aqui!! </p>
            </div>
        </div>

        <div class="card">
          <div class="imgBx">
            <img class="doces-img" src="images/img17.png">
          </div>
            <div class="content">
               <h2>Chocolate Lind -  2 Por R$ 40,99 100g</h2>
               <p>Chocolate Lindt e Lindor Milk com descontos imperdíveis, Só Aqui!!</p> 
            </div>
        </div>

        <div class="card">
          <div class="imgBx">
            <img class="doces-img" src="images/img15.png" width="95%" height="95%">
          </div>
            <div class="content">
              <h2>Liete Condensado Moça - R$ 7,89 395g</h2>
              <p>Leite Condensado Moça com descontos imperdíveis, Só Aqui!!</p>
            </div>
        </div>

        <div class="card">
          <div class="imgBx">
            <img class="doces-img" src="images/bauduco.png" >
          </div>
            <div class="content">
              <h2>Bolacha Bauducco - R$ 6,69 80g</h2>
              <p>Bolacha recheado Bauducco com descontos imperdíveis, Só Aqui!!</p>
            </div>
        </div>

        <div class="card">
          <div class="imgBx">
            <img class="doces-img" src="images/milka.png" >
          </div>
            <div class="content">
              <h2>Mikka Oreo - R$ 18,44 100g</h2>
              <p>Chocolate Ao leite Oreo Importado com descontos imperdíveis, Só Aqui!!</p>
            </div>
        </div>
        
        <div class="card">
          <div class="imgBx">
            <img class="doces-img" src="images/cheetos.png" >
          </div>
            <div class="content">
              <h2>Cheetos Assado - R$ 17,98 280g</h2>
              <p>Cheetos Assado com descontos imperdíveis, Só Aqui!!</p>
            </div>
        </div>
      </div> 
  </section>

  <!--Categoria Bebidas-->

  <section id="cat-bebidas">
        <div class="titulo-bebidas">
            <h3 class="textotitulo">Bebidas</h3>
        </div>
        <div class="container">
          <div class="card">
            <div class="imgBx">
              <img class="bebidas-img" src="images/img18.png"  width="100%" height="95%">
          </div>
            <div class="content">
              <h2>Refrigerante H20h Limão e Limão/Citrus - R$ 3,29 500ml</h2>
              <p>Refrigerante H20h com descontos imperdíveis, Só Aqui!!</p>
            </div>
        </div>

        <div class="card">
          <div class="imgBx">
            <img class="bebidas-img" src="images/img19.png" width="90%" height="105%">
          </div>
            <div class="content">
              <h2>Cerveja Bohemia Puro Malte Lata - R$ 3,79 350ml</h2>
              <p>Cerveja Bohemia Lata com descontos imperdíveis, Só Aqui!!!</p>
            </div>
        </div>

        <div class="card">
          <div class="imgBx">
            <img class="bebidas-img" src="images/img21.png" width="70%" height="100%">
          </div>
            <div class="content">
              <h2>Espumante Casa Perini Moscatel - R$ 55,98 750ml</h2>
              <p> Espuamnete Casa Perini com descontos imperdíveis, Só Aquii!!</p>
            </div>
        </div>

        <div class="card">
          <div class="imgBx">
            <img class="bebidas-img" src="images/img22.png" width="70%" height="100%">
          </div>
            <div class="content">
              <h2>Vinho Brasiliero Tinto Intenso Merlot SALTON - R$ 59,99 750ml</h2>
              <p>Vinho Brasiliero com descontos imperdíveis, Só Aquii!!</p>
            </div>
        </div>

        <div class="card">
          <div class="imgBx">
            <img class="bebidas-img" src="images/img23.png" width="70%" height="100%">
          </div>
            <div class="content">
              <h2>Vinho Mioranza rose frisante suave - R$ 21,90 750ml</h2>
              <p>Vinho Rose Suave com descontos imperdíveis, Só Aquii!!</p>
            </div>
        </div>

        <div class="card">
          <div class="imgBx">
            <img class="bebidas-img" src="images/img24.png" width="70%" height="100%">
          </div>
            <div class="content">
              <h2>Vinho Bois Mirail Tinto - R$ 59,30 750ml</h2>
              <p>Vinho Francês com descontos imperdíveis, Só Aquii!!</p>
            </div>
        </div>

        <div class="card">
          <div class="imgBx">
            <img class="bebidas-img" src="images/img25.png" width="70%" height="100%">
          </div>
            <div class="content">
              <h2> Vinho Chileno Três Toros - R$ 48,89 750ml</h2>
              <p>Vinho Chileno com descontos imperdíveis, Só Aquii!!</p>
            </div>
        </div>

        <div class="card">
          <div class="imgBx">
            <img class="bebidas-img" src="images/img26.png" width="70%" height="100%">
          </div>
            <div class="content">
              <h2>Vinho Terra Mãe Tinto - R$ 36,26 750ml</h2>
              <p>Vinho Terra Mãe com descontos imperdíveis, Só Aquii!!</p>
            </div>
        </div>
        
        <div class="card">
          <div class="imgBx">
            <img class="bebidas-img" src="images/cocacola.png">
          </div>
            <div class="content">
              <h2>Coca Cola 1 Litro Garrafa de Vidro - R$ 4,69</h2>
              <p>Refrigerante Coca Cola 1 Litro Garrafa de Vidro com descontos imperdíveis, Só Aquii!!</p>
            </div>
        </div>
        
        <div class="card">
          <div class="imgBx">
            <img class="bebidas-img" src="images/guarana.png">
          </div>
            <div class="content">
              <h2>Antarctica Guaraná Lata - R$ 3,08 350ML</h2>
              <p>Refrigerante Antarctica Guaraná Lata com descontos imperdíveis, Só Aquii!!</p>
            </div>
        </div>
        
        <div class="card">
          <div class="imgBx">
            <img class="bebidas-img" src="images/redbull.png">
          </div>
            <div class="content">
              <h2>Red Bull - R$ 8,18 250ML</h2>
              <p>Energético Red Bull com descontos imperdíveis, Só Aquii!!</p>
            </div>
        </div>
        
        <div class="card">
          <div class="imgBx">
            <img class="bebidas-img" src="images/leite_pira.png">
          </div>
            <div class="content">
              <h2>Leite Piracanjuba - R$ 5,38 1L</h2>
              <p>Leite Piracanjuba Integral com descontos imperdíveis, Só Aquii!!</p>
            </div>
        </div>
      </div>
  </section>

<!--Categoria Limpeza-->

  <section id="cat-limpeza">
    <div class="titulo-limpeza">
        <h3 class="textotitulo">Limpeza</h3>
    </div>
    <div class="container">
      <div class="card">
        <div class="imgBx">
          <img class="limpeza-img" src="images/img27.png"  width="100%" height="95%">
      </div>  
        <div class="content">
          <h2>Enxaguante bucal Colgate - R$ 28,79 250ml</h2>
          <p>Enxaguante bucal colgate com descontos imperdíveis, Só Aqui!!</p>
        </div>
    </div>

    <div class="card">
      <div class="imgBx">
        <img class="limpeza-img" src="images/img28.png">
    </div>  
      <div class="content">
        <h2>Frautas Jhonsons - R$ 60,99 </h2>
        <p>Frautas Jhonsons com descontos imperdíveis, Só Aqui!!</p>  
      </div>
    </div>

    <div class="card">
      <div class="imgBx">
        <img class="limpeza-img" src="images/img29.png"  width="100%" height="95%">
    </div>  
      <div class="content">
        <h2>Sabão Líquido Para Roupas Hipoalergênico Suave E Gentil - R$ 34,90 2L </h2>
        <p>Sabão Líquido Ariel com descontos imperdíveis, Só Aqui!!</p>
      </div>
    </div>
    
    
    <div class="card">
      <div class="imgBx">
        <img class="limpeza-img" src="images/img30.png"  width="80%" height="100%">
    </div>  
      <div class="content">
        <h2>Veja Gold Multiuso - R$ 14,52 500ml</h2>
        <p>Veja Gold Multiuso Original com descontos imperdíveis, Só Aqui!!</p>
      </div>
    </div>

    <div class="card">
      <div class="imgBx">
        <img class="limpeza-img" src="images/img31.png"  width="900%" height="90%">
    </div>  
      <div class="content">
        <h2>Papel Higiênico - R$ 20,40 </h2>
        <p>Papel Higiênico Folha Dupla Neve Fardo Com 8 Rolos com descontos imperdíveis, Só Aqui!!</p>
      </div>
    </div>
    
    <div class="card">
      <div class="imgBx">
        <img class="limpeza-img" src="images/sabao.png" >
    </div>  
      <div class="content">
        <h2>Sabão Vamix - R$ 11.17 1KG </h2>
        <p>Lava Roupas em Pó Vamix com descontos imperdíveis, Só Aqui!!</p>
      </div>
    </div>
  </div>    <!--div do cat-limpeza-->
  </section>

  <!--Categooria Legumes-->

  <section id="cat-legumes">
      <div class="titulo-legumes">
          <h3 class="textotitulo">Legumes</h3>
      </div>
      <div class="container">
        <div class="card">
          <div class="imgBx">
            <img class="verduras-img" src="images/img32.png">
        </div>  
          <div class="content">
            <h2>Abobrinha Italiana - R$ 2,67 por KG</h2>
            <p>Abobrinha Italiana com descontos imperdíveis, Só Aqui!!</p>
          </div>
      </div>

        <div class="card">
          <div class="imgBx">
            <img class="verduras-img" src="images/img33.png">
        </div>  
          <div class="content">
            <h2>Alho Branco - R$ 28,50 por KG</h2>
            <p>Alho branco com descontos imperdíveis, Só Aqui!!</p>
          </div>
      </div>

        <div class="card">
          <div class="imgBx">
            <img class="verduras-img" src="images/img34.png">
        </div>  
          <div class="content">
            <h2>Batata Doce Roxa R$ 3,99 por KG</h2>
            <p>Batata doce roxa com descontos imperdíveis, Só Aqui!!</p>
          </div>
      </div>
      
        <div class="card">
          <div class="imgBx">
            <img class="verduras-img" src="images/img35.png">
        </div>  
          <div class="content">
            <h2>Berinjela Roxa - R$ 5,99 por KG</h2>
            <p>Berinjela Roxa com descontos imperdíveis, Só Aqui!!</p>
          </div>
      </div>

        <div class="card">
          <div class="imgBx">
            <img class="verduras-img" src="images/img36.png">
        </div>  
          <div class="content">
            <h2>Cebola Branca - R$ 4,29 por KG</h2>
            <p>Cebola Branca com descontos imperdíveis, Só Aqui!!</p>
          </div>
      </div>

        <div class="card">
          <div class="imgBx">
            <img class="verduras-img" src="images/img37.png">
        </div>  
          <div class="content">
            <h2>Cenoura Laranja - R$ 2,79 por KG</h2>
            <p>Cenoura Laranja com descontos imperdíveis, Só Aqui!!</p>
          </div>
      </div>

      <div class="card">
        <div class="imgBx">
          <img class="verduras-img" src="images/img37.png">
      </div>  
        <div class="content">
          <h2>Cenoura Laranja - R$ 2,79 por KG</h2>
          <p>Cenoura Laranja com descontos imperdíveis, Só Aqui!!</p>
        </div>
    </div>

    <div class="card">
      <div class="imgBx">
        <img class="verduras-img" src="images/img44.png">
    </div>  
      <div class="content">
        <h2>Pepino Japonês - R$ 3,10 por KG</h2>
        <p>Pepino Comun com descontos imperdíveis, Só Aqui!!</p>
      </div>
    </div>

    <div class="card">
      <div class="imgBx">
        <img class="Frutas-img" src="images/img45.png">
    </div>  
      <div class="content">
        <h2>Pimentão Verde - R$ 3,00 por KG</h2>
        <p>Pimentão Verde com descontos imperdíveis, Só Aqui!!</p>
      </div>
    </div>

    <div class="card">
      <div class="imgBx">
        <img class="Frutas-img" src="images/img46.png">
    </div>  
      <div class="content">
        <h2>Tomate - R$ 3,49 por KG</h2>
        <p>Tomate com descontos imperdíveis, Só Aqui!!</p>
      </div>
    </div>

    <div class="card">
      <div class="imgBx">
        <img class="Frutas-img" src="images/img47.png">
    </div>  
      <div class="content">
        <h2>Mini Tomate - R$ 5,49 por KG</h2>
        <p>Mini Tomate Grape Mel Tresbeschi 180g com descontos imperdíveis, Só Aqui!!</p>
      </div>
    </div>

    <div class="card">
      <div class="imgBx">
        <img class="Frutas-img" src="images/img42.png">
    </div>  
      <div class="content">
        <h2>Mandioquinha - R$ 8,15 por KG</h2>
        <p>Mandioquinha com descontos imperdíveis, Só Aqui!!</p>
      </div>
    </div>
    
    <div class="card">
      <div class="imgBx">
        <img class="Frutas-img" src="images/Batata.png">
    </div>  
      <div class="content">
        <h2>Batata Inglesa - R$ 6,89 por KG</h2>
        <p>Batata Inglesa com descontos imperdíveis, Só Aqui!!</p>
      </div>
    </div>  
    
    </div>
    
  </section>

  <!--Categoria frutas-->
  <section id="cat-frutas">
        <div class="titulo-frutas">
            <h3 class="textotitulo">Frutas</h3>
        </div>
        <div class="container">
          <div class="card">
            <div class="imgBx">
              <img class="Frutas-img" src="images/abacaxi.png">
          </div>  
            <div class="content">
              <h2>Abacaxi - R$ 5,10 A Unidade</h2>
              <p>Abacaxi com descontos imperdíveis, Só Aqui!!</p>
            </div>
        </div>

        <div class="card">
          <div class="imgBx">
            <img class="Frutas-img" src="images/abacate.png">
        </div>  
          <div class="content">
            <h2>Abacate - R$ 8,09 KG</h2>
            <p>Abacate com descontos imperdíveis, Só Aqui!!</p>
          </div>
        </div>
        
        <div class="card">
          <div class="imgBx">
            <img class="Frutas-img" src="images/banana.png">
        </div>  
          <div class="content">
            <h2>Banana Nanica - R$ 4,37 KG</h2>
            <p>Banana Nanica com descontos imperdíveis, Só Aqui!!</p>
          </div>
        </div>
        
        <div class="card">
          <div class="imgBx">
            <img class="Frutas-img" src="images/img50.png">
        </div>  
          <div class="content">
            <h2>Caqui - R$ 6,00 KG</h2>
            <p>Caqui com descontos imperdíveis, Só Aqui!!</p>
          </div>
        </div>
        
        <div class="card">
          <div class="imgBx">
            <img class="Frutas-img" src="images/img51.png">
        </div>  
          <div class="content">
            <h2>Goiaba Vermelha - R$ 5,19 KG</h2>
            <p>Goiaba Vermelha com descontos imperdíveis, Só Aqui!!</p>
          </div>
        </div>
        
        <div class="card">
          <div class="imgBx">
            <img class="Frutas-img" src="images/img52.png">
        </div>  
          <div class="content">
            <h2>Laranja Lima - R$ 5,78 KG</h2>
            <p>Laranja Lima com descontos imperdíveis, Só Aqui!!</p>
          </div>
        </div>
  
        <div class="card">
          <div class="imgBx">
            <img class="Frutas-img" src="images/limao.png">
        </div>  
          <div class="content">
            <h2>Limão Tahiti - R$ 7,48 KG</h2>
            <p>Limão Tahiti com descontos imperdíveis, Só Aqui!!</p>
          </div>
        </div>
        
        <div class="card">
          <div class="imgBx">
            <img class="Frutas-img" src="images/img54.png">
        </div>  
          <div class="content">
            <h2>Maça Gala Vermelha - R$ 11,99 KG</h2>
            <p>Maça Gala Vermelha com descontos imperdíveis, Só Aqui!!</p>
          </div>
        </div>

        <div class="card">
          <div class="imgBx">
            <img class="Frutas-img" src="images/img55.png">
        </div>  
          <div class="content">
            <h2>Maça Senninha - R$ 8,15 1KG</h2>
            <p>Maça Senninha com descontos imperdíveis, Só Aqui!!</p>
          </div>
        </div>
        
        <div class="card">
          <div class="imgBx">
            <img class="Frutas-img" src="images/img56.png">
        </div>  
          <div class="content">
            <h2>Mamão Formosa - R$ 7,99 KG</h2>
            <p>Mamão Formosa com descontos imperdíveis, Só Aqui!!</p>
          </div>
        </div>
        
        <div class="card">
          <div class="imgBx">
            <img class="Frutas-img" src="images/img57.png">
        </div>  
          <div class="content">
            <h2>Manga Bourbon - R$ 6,61 KG</h2>
            <p>Manga Bourbon com descontos imperdíveis, Só Aqui!!</p>
          </div>
        </div>

        <div class="card">
          <div class="imgBx">
            <img class="Frutas-img" src="images/img58.png">
        </div>  
          <div class="content">
            <h2>Maracujá Azedo - R$ 6,54 KG</h2>
            <p>Maracujá Azedo com descontos imperdíveis, Só Aqui!!</p>
          </div>
        </div>
        
        <div class="card">
          <div class="imgBx">
            <img class="Frutas-img" src="images/img59.png">
        </div>  
          <div class="content">
            <h2>Tangerina Cravo - R$ 5,99 KG</h2>
            <p>Tangerina Cravo com descontos imperdíveis, Só Aqui!!</p>
          </div>
        </div>
        
        <div class="card">
          <div class="imgBx">
            <img class="Frutas-img" src="images/img60.png">
        </div>  
          <div class="content">
            <h2>Pera Rocha - R$ 6,79 KG</h2>
            <p>Pera Rocha com descontos imperdíveis, Só Aqui!!</p>
          </div>
        </div>
        
        <div class="card">
          <div class="imgBx">
            <img class="Frutas-img" src="images/img61.png">
        </div>  
           <div class="content">
            <h2>Uva Verde - R$ 24,48 KG</h2>
            <p>Uva Verde com descontos imperdíveis, Só Aqui!!</p>
          </div>
        </div>  

        <div class="card">
          <div class="imgBx">
            <img class="Frutas-img" src="images/img62.png">
        </div>  
          <div class="content">
            <h2>Uva Roxa - R$ 20,00 KG</h2>
            <p>Uva Roxa com descontos imperdíveis, Só Aqui!!</p>
          </div>
        </div>

        <div class="card">
          <div class="imgBx">
            <img class="Frutas-img" src="images/morango.png">
        </div>  
          <div class="content">
            <h2>Morango - R$ 17,00 KG</h2>
            <p>Morango com descontos imperdíveis, Só Aqui!!</p>
          </div>
        </div>

      </div>
  </section>
  <!--Categoria Peixes-->
  <section id="cat-peixes">
        <div class="titulo-peixes">
            <h3 class="textotitulo">Peixes</h3>
        </div>
        <div class="container">
          <div class="card">
            <div class="imgBx">
              <img class="Peixes-img" src="images/img40.png">
          </div>  
            <div class="content">
              <h2>Peixe Pintado - R$ 24,99 KG</h2>
              <p>Peixe Pintado Fresco com descontos imperdíveis, Só Aqui!!</p>
            </div>
        </div>
        
        <div class="card">
          <div class="imgBx">
            <img class="Peixes-img" src="images/img39.png">
        </div>  
          <div class="content">
            <h2>Peixe Tambaqui - R$ 16,72 KG</h2>
            <p>Peixe Tambaqui Fresco com descontos imperdíveis, Só Aqui!!</p>
          </div>
        </div>

        <div class="card">
          <div class="imgBx">
            <img class="Peixes-img" src="images/img38.png">
        </div>  
          <div class="content">
            <h2>Peixe Tilapia - R$ 8,49 KG</h2>
            <p>Peixe Tilapia Fresco com descontos imperdíveis, Só Aqui!!</p>
          </div>
        </div>
        
        <div class="card">
          <div class="imgBx">
            <img class="Peixes-img" src="images/img41.png">
        </div>  
          <div class="content">
            <h2>Camarão Oceani - R$ 51,59 400g</h2>
            <p>Camarão Oceani Pre Cozido com descontos imperdíveis, Só Aqui!!</p>
          </div>
        </div>
    </div>
</section>
  <script>
    const btnMobile = document.getElementById('btn-mobile');
    const links = document.querySelectorAll('.link')

function toggleMenu(event) {
    if (event.type === 'touchstart') event.preventDefault();
        const nav = document.getElementById('nav');
        nav.classList.toggle('active');
        const active = nav.classList.contains('active');
        event.currentTarget.setAttribute('aria-expanded', active);
    if (active) {
        event.currentTarget.setAttribute('aria-label', 'Fechar Menu');
    } else {
        event.currentTarget.setAttribute('aria-label', 'Abrir Menu');
    }
}

btnMobile.addEventListener('click', toggleMenu);
btnMobile.addEventListener('touchstart', toggleMenu);

links.forEach(element => {
  element.addEventListener("click", ()=>{
    const nav = document.getElementById('nav');
    nav.classList.remove("active");
  });
});
  </script>
</body>

</html>