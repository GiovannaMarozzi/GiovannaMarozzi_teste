<?php session_start();
 ?>

<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="CSS/estilo.css">
    <title>Login</title>

    <style type="text/css">
        * {
    margin: 0%;
    padding: 0%;
}

body {
   background: #000;
    color: white;

}

input {
    display: block;
    height: 10%;
    width: 30%;
    margin: 2%;
    border-radius: 20px;
    border: 1px solid white;
    text-align: center;
    font-size: 13pt;
    background: rgba(255,255,255,0.10);
    outline: none;
    margin: auto;
    margin-top: 3%;

}

#acessar{
    color: white;
    background: #BC8F8F ;
    font-size: 17pt;
    cursor: pointer;
    width: 100%;
    height: 25%;
}
a {
    color: white;
    text-decoration: none;
}

a:hover{
    text-decoration: underline;
}

#corpo-form {
    width: 25%;
    height: 25%;
    margin-left: 36%;
    text-align: center;  }

#corpo-form-cad {
    margin-top: -5%;    
}


::-webkit-input-placeholder {
   color: white;
}

:-moz-placeholder { /* Firefox 18- */
   color: white;  
}

::-moz-placeholder {  /* Firefox 19+ */
   color: white;  
}

:-ms-input-placeholder {  
   color: white;  
}


#cad {
    width: 60%;
    height: 25%;
    margin-left:20%;
    text-align: center;
    color: white;
}

.input{
    width: 50%;
    height: 30%;
}
#entrar{
    margin-top:15%;
    text-align: center;
    
}

#erro{
    text-align: center;
    margin: auto;
}

#palavra{
    margin-left: 38%;
    margin-top: 8%;
}

title{
    margin-left: 45%;
}

#sexo1{
    margin-left: -15%;
    margin-top: 3%;
}
#sexo2{
   -webkit-appearance: button;
    -moz-appearance: button;
    -webkit-user-select: none;
    -moz-user-select: none;
    -webkit-padding-end: 20px;
    -moz-padding-end: 20px;
    -webkit-padding-start: 2px;
    -moz-padding-start: 2px;
    background-color: #fff;
    background-position: center right;
    background-repeat: no-repeat;
    border: 2px solid #AAA;
    border-radius: 5px;
    box-shadow:rgba(192,192,192, 0.5);
    color: #555;
    font-size: inherit;
    overflow: hidden;
    padding-top: 2px;
    padding-bottom: 2px;
    text-overflow: ellipsis;
    white-space: nowrap;
    margin-left: 5%;
    margin-top: -2.8%;  
}

#emaill{
  width: 100%;
  height: 25%;
}
#senhaa{
  width: 100%;
  height: 25%;
}
#cadastrarr{
   width: 50%;
    height: 30%;
  background: #BC8F8F;

}


    </style>
</head>


<body>
    <div id = "palavra"><h2>Veja ou Cadastre suas corridas:</h2></div>
            <div id = "erro">
                <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
            <div class="notificacao">
                <p>ERRO: Usuário ou senha inválidos.</p>
            </div>
            <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
            ?></div>


             <div id="corpo-form">
            <form method="post" action="cadastrar.php">
            <p><input type="submit" id="acessar" value="Cadastrar"></p>
            </form>
            <form method="post" action="exibir2.php">
            <p><input type="submit" id="acessar" value="Exibir"></p>
            </form>

        </div>
</body>

</html>