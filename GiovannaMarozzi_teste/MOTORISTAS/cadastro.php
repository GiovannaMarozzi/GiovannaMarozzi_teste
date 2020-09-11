<?php 
    session_start();
    include ('conexao.php');
   ?>
<html> 
<!-- Cadastro motorista -->

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="CSS/estilo.css">
    <title>Cadastrar - Motorista</title>
<script type="text/javascript">
            function validar_form_de_cadastro(){
                var usuario = cadastro.usuario.value;
                var email = cadastro.email.value;
                var cpf = cadastro.cpf.value;
                var data_de_nascimento = cadastro.data_de_nascimento.value;
                
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

#corpo-form-cad{
    width: 25%;
    height: 25%;
    margin-left: 35%;
    margin-right: 40%;
    margin-top: 1%;
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
#fim2{
    margin-top:15%;
}
        </style>

</head>

<body>

    <div id="corpo-form-cad">
        <h1>Cadastrar</h1>
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
        <form method="post" name="cadastro" action="cadastrar.php">
            <p><input value="" type="type" name="usuario" placeholder="Digite seu nome inteiro" maxlength="50" required=""></p>
            <p><input value="" type="text" name="cpf" placeholder="Digite seu CPF" maxlength="15" required=""></p>
            <p><input value="" type="text" name="data_de_nascimento" placeholder="Data de Nascimento" maxlength="15" required=""></p>
            <p><input type="text" name="email" placeholder="Digite seu e-mail" required=""></p>
            <div id="tipo1"><div id="opcao1"><p>Modelo do Carro: <br></p></div>
            <select name = "carros" class="opcoes1" size="1">
                <option value="cupe">Selecione</option>
                <option value="cupe">Cupe</option>
                <option value="crossover">Crossover</option>
                <option value="esportivo">Esportivo</option>
                <option value="hatch">Hatch</option>
                <option value="hatchback">Hatchback</option>
                <option value="jipe">Jipe</option>
                <option value="picape">Picape</option>
                <option value="sedan">Sedan</option>
                <option value="suv">SUV</option>
                <option value="van_e_minivan">Van e Minivan</option></select>
                
                <div id="tipo2"><p>Status: <br></p></div>
            <p><select name="status" class="opcoes2" size="1"></p>
                <option value="-">-</option>
                <option value="ativo">Ativo</option>
                <option value="inativo">Inativo</option></select>
                
            <div id="tipo3"><p>Sexo: <br></p></div>
            <p><select name="sexo" class="opcoes3" size="1" ></p>
                <option value="feminino">Selecione</option>
                <option value="feminino">Feminino</option>
                <option value="masculino">Masculino</option>
                <option value="outros">Outros</option></select>
            </div>
            <p><input type="password" name="senha" placeholder="Digite sua Senha" maxlength="12"></p>
            <p><input type="submit" id="acessar" onclick="return validar_form_de_cadastro()" value="Cadastrar"></p>
        </form>
    </div>
  
  <div id="fim">
  <hr>
            <footer class="text-center">
                <p>© 2020 - Giovanna Marozzi</p>
            </footer></div>
</body>

</html>