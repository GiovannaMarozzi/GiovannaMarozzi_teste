<?php 
session_start();

 ?>

<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="CSS/estilo.css">
    <title>Login</title>
 
 <script type="text/javascript">
            function validar_form_de_login(){
                var usuario = login.usuario.value;
                var email = login.email.value;
                var cpf = login.cpf.value;
                var senha = login.senha.value;
                
               if(usuario == " "){
                    alert("Campo nome é obrigatorio");
                    login.usuario.focus();
                    return false;
                }if(email == " "){
                    alert("Campo email é obrigatorio");
                    login.email.focus();
                    return false;
                }if(cpf == " "){
                    alert("Campo nome é obrigatorio");
                    login.cpf.focus();
                    return false;
                }if(senha == " "){
                    alert("Campo email é obrigatorio");
                    login.senha.focus();
                    return false;
                }
            }
        </script>
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
    height: 40%;
    width: 100%;
    margin: 2%;
    border-radius: 20px;
    border: 1px solid white;
    text-align: center;
    font-size: 13pt;
    background: rgba(255,255,255,0.10);
    outline: none;

}

#acessar{
    color: white;
    background: #BC8F8F ;
    font-size: 17pt;
    cursor: pointer;
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
    text-align: center;
        
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
#tipo1{
    display:block;
    margin-left: 5%;
}

#opcao1{
    margin-top: 5%;
}

.opcoes1{
    margin-top: -6%;
    margin-left: 37%;
}

#tipo2{
    margin-left:0%;
    margin-top: 2%;
}
.opcoes2{
    margin-top: -6%;
    margin-left: 15%;
}

#tipo3{
    margin-left:0%;
    margin-top: 3%;
}
.opcoes3{
    margin-top: -6%;
    margin-left: 15%;
}

h1{
    text-align: center;
}
select {
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
    margin-left: 15%;
    margin-top: -2.8%;  
}


#entrar{
    margin-top:10%;
    text-align: center;
    
}

#erro{
    text-align: center;
    margin: auto;
}
.text-center{
    text-align: center;
    margin-top:0%;
    color: #706969;
}

hr{
    margin-top: 32%;
}

#fim{
        color: #706969;
   
}
#fim1{
    margin-top:-12%;
}

        </style>

</head>

<body>
    <div id = "entrar"><h2>Entrar</h2></div>
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
?>           </div>

             <div id="corpo-form">
             <form action="exibir2.php" name="login" method="POST">
                 <p><input name="usuario" name="text" placeholder="Digite seu ID" required=""></p>
                 <p><input name="email" type="text" placeholder="Digite seu email" required=""></p>
                 <p><input name="cpf" name="text" placeholder="Digite seu CPF" required=""></p>
                 <p><input name="senha" type="password" placeholder="Digite sua senha" required=""></p>
                <p><input type="submit" id="acessar" value="Acessar" onclick="return validar_form_de_login()"></p>
            <p><a href="cadastro.php">Ainda nao faz parte? <strong>Cadastre-se</strong></a></p>
        </form>

    </div>

    <div id="fim1">
  <hr>
            <footer class="text-center">
                <p>© 2020 - Giovanna Marozzi</p>
            </footer></div>
</body>

</html>