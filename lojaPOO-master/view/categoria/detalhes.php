<?php
//capturo o objeto categoria que foi passado em $dados
$categoria = $dados['categorias'][0];
?>
<h1>Detalhes da categoria</h1>
<a href="index.php?acao=deletar&id=<?= utf8_encode($categoria->getId()) ?>">Deletar categoria</a>
<form method="post" action="index.php?acao=atualizar">
<p>id: <input type="text" name="id" value="<?= utf8_encode($categoria->getId()) ?>"/></p>
<p>nome: <input type="text" name="nome" value="<?= utf8_encode($categoria->getNome()) ?>"></p>
<p>descrição:<?= utf8_encode($categoria->getDescricao()) ?></p>
<input type="submit" value="Atualizar"/>
</form>


