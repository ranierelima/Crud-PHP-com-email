<?php require_once("cabecalho.php");
      require_once("banco-categoria.php"); 
      require_once("banco-produto.php");


$id= $_GET['id'];
$produto = buscarProduto($conexao, $id);
$categorias = listarCategoria($conexao);
$usado = $produto['usado'] ? "checked='checked'" : "";
?>
           <h1>Adiciona Produto</h1>
            <html>
    <form action="alterar-produto.php" method="post">
        <input type="hidden" name="id" value="<?=$produto['id']?>">
        <table class="table">
            
            <?php include("formulario-base.php")?>
            <tr>
                <td><input type="submit" value="Alterar" class="btn btn-primary"/></td>
            </tr>

        </table>

    </form>
</html>
<?php include("rodape.php") ?>