<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
?>

<div class="container mt-5">
    <h2>Excluir Veículo</h2>
    <p>Tem certeza de que deseja excluir o veículo abaixo?</p>
    <ul>
        <li><strong>Data:</strong> </li>
        <li><strong>Produto:</strong> </li>
        <li><strong>Quantidade:</strong> </li>
    </ul>
    <form method="post">
        <button type="submit" name="confirmar" class="btn btn-danger">Excluir</button>
        <a href="compras.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
