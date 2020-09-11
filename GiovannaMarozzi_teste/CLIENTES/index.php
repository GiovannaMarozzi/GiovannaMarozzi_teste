<?php session_start();
 ?>

<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="CSS/estilo.css">
    <title>Login</title>
</head>

<body>

    <script type="text/javascript">
            function validar_form_de_login(){
                var email = login.email.value;
                var senha = login.senha.value;
                
                if(usuario == " "){
                    alert("Campo nome é obrigatorio");
                    login.email.focus();
                    return false;
                }if(email == " "){
                    alert("Campo email é obrigatorio");
                    login.senha.focus();
                    return false;
                }
            }
        </script>
             </script>
        <style type="text/css">
            * {
    margin: 0%;
    padding: 0%;
}

body {
    background-color: #000;
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
    margin-left: 45%;
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

#fim{
    margin-top: 22%;
    text-align: center;

}

</style>
<body>
    <div id = "palavra"><h2>Entrar</h2></div>
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
            <form method="post" name="login" action="exibir2.php">
                 <p><input name="email" type="text" id="emaill" placeholder="Digite seu email" required=""></p>
                 <p><input name="senha" type="password" id="senhaa" placeholder="Digite sua senha" required=""></p>
                 <p><input type="submit" id="acessar" onclick="return validar_form_de_login()" value="Acessar"></p>
                 <p><a href="cadastro.php">Ainda nao faz parte? <strong>Cadastre-se</strong></a></p>
            </form>

        </div>

        <div id="fim">
  <hr>
            <footer class="text-center">
                <p>© 2020 - Giovanna Marozzi</p>
            </footer></div>
</body>

</html>