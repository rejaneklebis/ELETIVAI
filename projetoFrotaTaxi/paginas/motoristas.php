<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';    
?>

<div class="container mt-5">
    <h2>Gerenciamento de Motoristas</h2>
    <a href="novo_motorista.php" class="btn btn-success mb-3">Novo Motorista</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Motorista 1</td>
                <td>
                    <a href="editar_motorista.php" class="btn btn-warning">Editar</a>
                    <a href="excluir_motorista.php" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>
