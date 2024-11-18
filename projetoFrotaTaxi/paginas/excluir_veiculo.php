<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
    require_once '../funcoes/produtos.php';
    require_once '../funcoes/categorias.php';
    $id = $_GET['id'];
    if (!$id){
        header('Location: produtos.php');
        exit();
    }
    $produto = buscarProdutoPorId($id);
    if (!$produto){
        header('Location: produtos.php');
        exit();
    }
    $categorias = buscarCategorias();
    $erro = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        try {
            $id = intval($_POST['id']);
            if (empty($id)){
                header('Location: produtos.php');
                exit();
            } else{
                if (excluirProduto($id)){
                    header('Location: produtos.php');
                    exit();
                } else {
                    $erro = "Erro ao excluir o produto!"; 
                }
            }
        } catch (Exception $e) {
            $erro = "Erro: ".$e->getMessage();
        }
    }

?>

<div class="container mt-5">
    <h2>Excluir Veículo</h2>
    <p>Tem certeza de que deseja excluir o veículo abaixo?</p>
    <ul>
        <li><strong>Nome:</strong> <?= $produto['nome'] ?></li>
        <li><strong>Descrição:</strong> <?= $produto['descricao'] ?></li>
        <li><strong>Categoria:</strong> <?= $produto['nome_categoria'] ?></li>
    </ul>
    <form method="post">
        <input type="hidden" name="id" value="<?= $id ?>" >
        <button type="submit" name="confirmar" class="btn btn-danger">Excluir</button>
        <a href="compras.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
