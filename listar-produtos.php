<?php require_once("cabecalho.php"); 
require_once("banco-produto.php");


?>
<table class="table table-striped table-bordered">
    <?php
    mostraAlerta("success");
    $produtos = ListarProdutos($conexao);
    foreach($produtos as $produto){
    ?>
        <tr>
            <td><?= $produto['nome'] ?></td>
            <td><?= $produto['preco'] ?></td>
            <td><?= substr($produto['descricao'], 0,90) ?></td>
            <td> <?= $produto['categoria_nome'] ?> </td>
            <td><a class="btn btn-primary" href="formulario-editar-produto.php?id=<?=$produto['id']?>"> Editar</a></td>
            <td>
                <form action="remover-produto.php?id=" method="post">
                    <input type="hidden" name="id" value="<?=$produto['id']?>">
                    <button class="btn btn-danger">Remover</button>
                </form>
            </td>
    </tr>

<?php
    }
    ?>
</table>

<?php include("rodape.php"); ?>