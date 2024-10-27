<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';
?>

<div class="container mt-5">
    <h2>Criar Novo Veículo</h2>

    <form method="post">
        <div class="mb-3">
            <label for="data" class="form-label">Data de cadastro</label>
            <input type="date" name="data" id="data" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="produto_id" class="form-label">Modelo</label>
            <select name="produto_id" id="produto_id" class="form-select" required>
                    <option value="1">Selecione o modelo</option>
                    <option value="2">Agile</option>
                    <option value="3">Onix</option>
            </select>           
        </div>
        <div class="mb-3">
            <label for="placa" class="form-label">Placa</label>
            <input type="text" name="placa" id="placa" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Criar Veículo</button>
    </form>
</div>

<?php require_once 'rodape.php'; ?>
