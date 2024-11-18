<?php
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';  
    require_once '../funcoes/veiculos.php';
    
    $produtos = buscarProdutos();    
?>

<div class="container mt-5">
    <h2>Gerenciamento de Veículos</h2>
    <a href="novo_veiculo.php" class="btn btn-success mb-3">Novo Veículo</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Modelo</th>
            
            </tr>
        </thead>
        <tbody>
            
            <tr>
                <td>1</td>
                <td>Ford</td>
                <td>Ká</td>
               
                <td>
                <a href="editar_produto.php?id=<?= $p['id'] ?>" class="btn btn-warning">Editar</a>
                <a href="excluir_produto.php?id=<?= $p['id'] ?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>

            <tr>
                <td>2</td>
                <td>Chevrolet</td>
                <td>Celta</td>
               
                <td>
                <a href="editar_produto.php?id=<?= $p['id'] ?>" class="btn btn-warning">Editar</a>
                <a href="excluir_produto.php?id=<?= $p['id'] ?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
           
            
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>
