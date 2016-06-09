<tr>
                <td>Nome</td>
                <td><input type="text" name="nome"  class="form-control" value="<?=$produto['nome']?>"/></td>
            </tr>

            <tr>
                <td>Preço</td>
                <td><input type="number" name="preco" class="form-control" value="<?=$produto['preco']?>"/></td>
            </tr> 
            <tr>
                <td>Descrição</td>
                <td><textarea name="descricao" class="form-control"><?=$produto['descricao']?></textarea></td>
            </tr>
            <tr>
            <td>Usado</td>
                <td><input type="checkbox" name="usado" <?= $usado ?> value="true"></td>
            </tr>
            <tr>
                <td>Categoria</td>
                <td>
                <select name="categoria_id" class="form-control">
                <?php foreach($categorias as $categoria): 
                    $essaEACategoria= $produto['categoria_id']==$categoria['id'];
                    $selecao = $essaEACategoria ? "selected = 'selected'" : "";
                    ?>
                 <option value="<?=$categoria['id']?>" <?=$selecao?>>
                    <?=$categoria['nome']?>
                 </option> 
                <?php endforeach ?>
                </select>
                </td>
            </tr>