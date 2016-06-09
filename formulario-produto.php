<?php require_once("cabecalho.php");
require_once("banco-categoria.php");
require_once("logica-usuario.php");

verificaUsuario();

$produto = array("nome" => "" , "preco" => "" , "descricao" => "" , "categoria_id" => "1");
//$usado = "";
$categorias = listarCategoria($conexao);
?>
           <h1>Adiciona Produto</h1>
            <html>
    <form action="adiciona-produto.php" method="post">
        <table class="table">
            <?php include("formulario-base.php")?>
            <tr>
                <td><input type="submit" value="Cadastrar"class="btn btn-primary"/></td>
            </tr>

        </table>

    </form>
</html>
<?php include("rodape.php") ?>