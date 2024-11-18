<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
    require_once '../funcoes/veiculos.php';
    require_once '../funcoes/motoristas.php';

    $categorias = buscarCategorias();
    $erro = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        try {
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $preco = floatval($_POST['preco']);
            $estoque_minimo = intval($_POST['estoque_minimo']);
            $categoria_id = intval($_POST['categoria_id']);
            if (empty($nome) || empty($descricao)){
                $erro = "Informe os valores obrigatórios!";
            } else {
                if (criarProduto($nome, $descricao, 
                                    $preco, $estoque_minimo, $categoria_id)){
                    header('Location: produtos.php');
                    exit();
                } else {
                    $erro = "Erro ao inserir o produto!";
                }
            }
        } catch (Exception $e){
            $erro = "Erro: ".$e->getMessage();
        }
    }

?>

<div class="container mt-5">
    <h2>Criar Novo Veículo</h2>

    <?php if(!empty($erro)):?>
        <p class="text-danger"><?= $erro ?></p>
    <?php endif; ?>

    <form method="post">
        <div class="mb-3">
            <label for="texto" class="form-label">Marca</label>
            <input type="text" name="marca" id="marca" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="veiculo_id" class="form-label">Modelo</label>
            <select name="veiculo_id" id="veiculo_id" class="form-select" required>
                <?php foreach($categorias as $c): ?>
                    <option value="<?= $c['id']?>"><?= $c['nome'] ?></option>
                <?php endforeach; ?>
            </select>           
        </div>
        
        <button type="submit" class="btn btn-primary">Criar Veículo</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
