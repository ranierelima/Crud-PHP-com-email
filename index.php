<?php require_once("cabecalho.php");
       require_once("logica-usuario.php");
        ?>
          
      <h1>Bem Vindo</h1>
          
        <?php if(usuarioEstaLogado()) {?>
            
            <p class="text-success">Você está logado como: <?= usuarioLogado() ?>
            <a href="logout.php">Deslogar</a></p>


            <?php } else{?>
          
        <h2>Realize seu Login</h2>
            <form method="post" action="login.php">
                <table class="table">
                <tr><td>E-mail: </td>
                    <td><input type="email" name="email" class="form-control"></td>
                </tr>
                    <tr><td>Senha: </td>
                    <td><input type="password" name = "senha" class="form-control"></td>
                </tr>
                <tr>
                    <td><button class="btn btn-primary">Login</button></td>
                </tr>
                </table>
            </form>

            <?php } ?>

<?php include("rodape.php"); ?>