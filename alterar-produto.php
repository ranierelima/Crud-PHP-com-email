<?php require_once("cabecalho.php");
      require_once("banco-produto.php"); 
      require_once("logica-usuario.php");


        $id=$_POST['id'];
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $descricao = $_POST['descricao'];
        $categoria_id = $_POST['categoria_id']; 
        if(array_key_exists('usado',$_POST)){
        $usado="true";
        }else{
        $usado="false";
        }

        if(AlterarProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado)) {
    ?>
            <p class="text-sucess">Produto <?php echo $nome; ?>, de valor R$<?php echo $preco;?>             foi alterado com sucesso!</p>
<?php }else {
        $msg=mysqli_error($conexao); ?>
            <p class="text-danger">Produto não foi alterado: <?= $msg ?> ></p>
    <?php 
           
            }
        mysqli_close($conexao);
    ?>
        
<?php include("rodape.php"); ?>