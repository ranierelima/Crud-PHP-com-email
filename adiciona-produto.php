<?php require_once("cabecalho.php");
      require_once("banco-produto.php"); 
      require_once("logica-usuario.php");

verificaUsuario();

        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $descricao = $_POST['descricao'];
        $categoria_id = $_POST['categoria_id']; 
        if(array_key_exists('usado',$_POST)){
        $usado="true";
        }else{
        $usado="false";
        }

        if(InserirProduto($conexao,$nome, $preco, $descricao, $categoria_id, $usado)) {
    ?>
            <p class="text-sucess">Produto <?php echo $nome; ?>, de valor R$<?php echo $preco;?>             foi adicionado com sucesso!</p>
<?php }else {
        $msg=mysqli_error($conexao); ?>
            <p class="text-danger">Produto não foi adicionado: <?= $msg ?> ></p>
    <?php 
           
            }
        mysqli_close($conexao);
    ?>
        
<?php include("rodape.php"); ?>