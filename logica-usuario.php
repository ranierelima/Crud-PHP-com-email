<?php 

//session_start();

SESSION_START();

function usuarioEstaLogado(){
    return isset($_SESSION["usuario_logado"]);
}

function verificaUsuario(){
    if(!usuarioEstaLogado()){
            $_SESSION["danger"] = "Você não tem acesso a essa funcionalidade do sistema";
             header("Location: index.php");
                die();
    }
}

function usuarioLogado(){
    return $_SESSION["usuario_logado"];
}


function logaUsuario($email){
    $_SESSION["usuario_logado"] = $email;
}

function logout(){
    session_destroy();
    //unset($_SESSION["usario_logado"]);
    session_start();
}

