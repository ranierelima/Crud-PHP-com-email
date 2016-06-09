<?php require_once("banco-usuario.php");
      require_once("logica-usuario.php");
     
$usuario =   buscarUsuario($conexao, $_POST["email"], $_POST["senha"]); 
//var_dump($usuario);

if($usuario==null){
    $_SESSION["danger"] = "Usuario ou Senha invalidos";
    header("Location: index.php");
    
} else{

   logaUsuario($usuario["email"]);
    $_SESSION["success"] = "Usuario logado com sucesso";
    header("Location: index.php");

}

die();