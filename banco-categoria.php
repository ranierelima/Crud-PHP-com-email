<?php
require_once("conecta.php");
function listarCategoria($conexao){
    $categorias = array();
    $query = "select * from categoria";
    $resultado = mysqli_query($conexao, $query);
    while($categoria = mysqli_fetch_assoc($resultado)){
        array_push($categorias, $categoria);
    }
    return $categorias;
}