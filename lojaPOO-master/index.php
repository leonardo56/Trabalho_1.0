<?php

require_once "controller/CategoriaController.php";

//ROTAS -

if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}

switch ($acao){
    case 'index':
        $cat = new CategoriaController();
        $cat->principal();
        exit;
    case 'detalhes':
        //pega o ID enviado
        $id = $_GET['id'];
        //instancia o controlador
        $cat = new CategoriaController();
        //chama o método
        $cat->detalhes($id);
        exit;
    case 'incluir':
        $cat = new CategoriaController();
        $cat->incluir();
        exit;
    case 'gravaInserir':
        //pegar dados do POST
        $categoriaNova = new Categoria();
        $categoriaNova->setNome($_POST['nome']);
        $categoriaNova->setDescricao($_POST['descricao']);
        $cat = new CategoriaController();
        $cat->inserir($categoriaNova);
        exit;
    case 'atualizar':
        $categoria = new Categoria();
        $categoria->setNome($_POST['nome']);
        $categoria->setId($_POST['id']);
        $cat = new CategoriaController();
        $cat->atualizar($categoria);
        exit;
    case 'confirmaDeletar':
        $cat = new CategoriaController();
        $id = $_GET['id'];

        $cat->confirmaDeletar($id);

    case 'deletar':
        $categoria = new Categoria();
        $categoria->setId($_GET['id']);
        $cat = new CategoriaController();
        $cat->deletar($categoria);
        exit;
    default:
        echo "Ação inválida";

}




