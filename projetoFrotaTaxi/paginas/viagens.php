<?php 
    require_once 'cabecalho.php'; 
    require_once 'navbar.php';    
?>

<div class="container mt-5">
    <h2>Gerenciamento de Viagens</h2>
    <a href="nova_viagem.php" class="btn btn-success mb-3">Nova Viagem</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Motoristas</th>
                <th>Veículos</th>
                <th>Passageiro</th>
                <th>Data</th>
                <th>Início</th>
                <th>Término</th>
                
            </tr>
        </thead>
        <tbody>
            
            <tr>
                <td>1</td>
                <td>Rejane</td>
                <td>Onix</td>
                <td>Francine</td>
                <td>17/11/24</td>
                <td>16:00hrs</td>
                <td>16:15hrs</td>
                
                <td>
                    <a href="editar_viagens.php" class="btn btn-warning">Editar</a>
                    <a href="excluir_viagens.php" class="btn btn-danger">Excluir</a>
                </td>
            </tr>

            <tr>
                <td>2</td>
                <td>Rejane</td>
                <td>Onix</td>
                <td>João</td>
                <td>17/11/24</td>
                <td>16:30hrs</td>
                <td>16:45hrs</td>
                
                <td>
                    <a href="editar_viagens.php" class="btn btn-warning">Editar</a>
                    <a href="excluir_viagens.php" class="btn btn-danger">Excluir</a>
                </td>
            </tr>

            <tr>
                <td>3</td>
                <td>Rosangela</td>
                <td>Ká</td>
                <td>Aqueline</td>
                <td>17/11/24</td>
                <td>16:05hrs</td>
                <td>16:25hrs</td>
                
                <td>
                    <a href="editar_viagens.php" class="btn btn-warning">Editar</a>
                    <a href="excluir_viagens.php" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            
        </tbody>
    </table>
</div>

<?php require_once 'rodape.php'; ?>
