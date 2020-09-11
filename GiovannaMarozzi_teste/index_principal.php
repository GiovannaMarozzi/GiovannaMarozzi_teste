<!DOCTYPE html>
<html lang="PT-Br">
<head>
    <meta charset="utf-8">
    <title>Carro por aplictivo</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <style type="text/css">
        *{
    margin: 0%;
}


#menu{
    background: #000;
    height: auto;
    
}

#menu ul {
    background-color:#000;
    list-style:none;
}

#menu ul li { display: inline; }

#menu ul li a {
    margin-left: 2%;
    font-size: 15px;
    padding: 30px 0px;
    display: inline-block;
    color: #A9A9A9;
    text-decoration: none;
    font-family:Times New Roman;
    border-bottom:3px solid #EDEDED;
}



#linguagem{
    text-align: center;
    font-family: arial black;
}

footer{
    text-align: center;
    margin-top:1%;
}

#container{
    width: 75%;
    margin-top: -5%;
    font-family:Segoe UI Light;
    background: rgb(229, 223, 223);
    margin-left: 10%;
}

.sobre_mim{
    width: 75%;
    height: 45%;
    margin-left: 10%;
    font-size: 17px;
    font-family:Segoe UI Light;
    margin-top: 4%; 
}


h1{
    font-family:serif;
    font-size: 250%;
    margin-top: 12%;
    font-family:Segoe UI Light;
    }


    </style>
</head>

<body>
   
    <nav id="menu">
       <ul>
        <li><a href="index_principal.php">Home</a></li>
        <li><a href="CORRIDAS/cadastrar.php">Cadastre sua Corrida</a></li>
        <li><a href="CORRIDAS/exibir2.php">Lista de Corrida</a></li>
        <li><a href="MOTORISTAS/index.php">Login Motorista</a></li>
        <li><a href="MOTORISTAS/cadastro.php">Cadastro de Motorista</a></li>
        <li><a href="MOTORISTAS/exibir2.php">Lista de Motorista</a></li>
        <li><a href="CLIENTES/index.php">Login Passageiro</a></li>
        <li><a href="CLIENTES/cadastro.php">Cadastro de Passageiro</a></li>
        <li><a href="CLIENTES/exibir2.php">Lista de Passageiro</a></li>
        </ul>
    </nav>   
    
    <div id="container">
        <h1>Motoristas e Passageiros: Venha fazer parte você também!</h1><br>
        <h2>Uma empresa feita para ajudar quem gosta de conforto e rapidez naquela hora que mais precisamos.</h2><br>
        <h2>E para você que está precisando daquele dinheirinho extra venha também, aqui funciona como um emprego extra, você pode escolher as suas escalas, colocando-as nos dias em que você pode.<br> Venha, estamos te esperando!</h2></div>
        
        <div class="row">
        <div class="sobre_mim">
            <h2>Saiba mais sobre meu Perfil:</h2>
            <p>
                Para me conhecer melhor visite meu perfil no LinkedIn e saiba mais sobre minha formação, experiência profissional, cursos realizados, palestras assistidas, etc.<br>
                Caso queira e precise pode entrar em contato comigo atraves do meu e-mail: giovanna.machado99@hotmail.com / giovanna.machado99.gm@gmail.com
            </p>
            <p>
                <a class="btn btn-default" href="https://www.linkedin.com/in/giovanna-machado-cipolletta-marozzi-709475164/">LinkedIn »</a>
            </p>
        </div>  <br>
            <div id="linguagem"><p><li>Linguaguem usada: PHP, JavaScript, CSS.</li></p></div>
    </div>
    <br>
    <br>
    <br>
<hr>
            <footer class="text-center">
                <p>© 2020 - Motoristas e Passageiros</p>
            </footer>
</body>
</html>
