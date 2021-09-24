<?php

session_start();

require_once("./funcoes.php");

//PRIMEIRA POSSIBILIDAE

    
    //pegando os dados do forms
    if(isset($_POST["txt_usuario"]) || isset($_POST["txt_senha"])) //verifica se os dados estão vindo do formulário
    {
        $usuario= $_POST["txt_usuario"];
        $senha= $_POST["txt_senha"];

        //usando dados na funcao
        realizarLogin($usuario, $senha, lerAquivo("./dados/usuarios.json"));
    }
    elseif ($_GET["logout"]) 
    {
        finalizarLogin();
    }

?>