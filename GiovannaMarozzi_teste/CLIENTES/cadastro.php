<?php 
    session_start();
    include ('conexao.php');
   ?>
<html> 
<!-- Cadastro passageiro -->

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="CSS/estilo.css">
    <title>Cadastrar - Passageiro</title>

    <script type="text/javascript">
            function validar_form_de_cadastro(){
                var usuario = cadastro.usuario.value;
                var email = cadastro.email.value;
                var cpf = cadastro.cpf.value;
                var data_de_nascimento = cadastro.data_de_nascimento.value;
                var sexo = cadastro.sexo.value;
                
                if(usuario == " "){
                    alert("Campo nome é obrigatorio");
                    cadastro.usuario.focus();
                    return false;
                }if(email == " "){
                    alert("Campo email é obrigatorio");
                    cadastro.email.focus();
                    return false;
                }if(cpf == " "){
                    alert("Campo cpf é obrigatorio");
                    cadastro.cpf.focus();
                    return false;
                }if(data_de_nascimento == " "){
                    alert("Campo data_de_nascimento é obrigatorio");
                    cadastro.data_de_nascimento.focus();
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
    margin-top: 25%;
    text-align: center;
}</style>
<body>

    <div id="corpo-form-cad">
        <h1><div id="palavra">Cadastrar</div></h1>
        <?php 
            if (isset($_SESSION['status_cadastro'])): 
        ?>
        <div class="notificacao_sucesso">
            <p>Cadastro efetuado com sucesso!</p>
            <p>Faça login informando o que for pedido na pagina de login <a href="index.php">aqui</a></p>
        </div>
        <?php 
        endif;
        unset($_SESSION['status_cadastro']);
        ?>
        <?php 
            if (isset($_SESSION['usuario_existe'])):
        ?>
        <div class="notificacao_existente">
            <p>CPF informado já exisente. Informe outro e tente novamente</p>
        </div>
        <?php 
        endif;
        unset($_SESSION['usuario_existe']);
        ?>
        <form method="post" id="cad" name="cadastro" action="cadastrar.php">
            <p><input value="" type="type" class="input" name="usuario" placeholder="Digite seu nome inteiro" maxlength="50" required=""></p>
            <p><input value="" type="text"  class="input" name="cpf" placeholder="Digite seu CPF" maxlength="15" required=""></p>
            <p><input value="" type="text" class="input" name="data_de_nascimento" placeholder="Data de Nascimento" maxlength="15" required=""></p>
            <p><input type="text"  class="input" name="email" placeholder="Digite seu e-mail" required=""></p>
            <div id="sexo1">
                <p>Sexo: </p></div>
                <select name="sexo" id="sexo2" size="1" >
                    <option value="selecione">Selecione</option>
                    <option value="feminino">Feminino</option>
                    <option value="masculino">Masculino</option>
                    <option value="outros">Outros</option>
                </select>
            <p><input type="password" class="input" name="senha" placeholder="Digite sua Senha" maxlength="12" required=""></p>
            <p><input type="submit" id="cadastrarr" onclick="return validar_form_de_cadastro()" value="Cadastrar"></p>
        </form>
    </div>
    <div id="fim">
  <hr>
            <footer class="text-center">
                <p>© 2020 - Giovanna Marozzi</p>
            </footer></div>
  
</body>

</html>