<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Alunos e Notas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h5>Exercício 02 </h5>
      
      <form action="" method="POST">
        <div class="row">
          <div class="col mb-3">
            <?php for($i = 0; $i < 5; $i++) : ?>
              <div class="mb-3">
                <label for="nome_<?php echo $i; ?>" class="form-label">Aluno:</label>
                <input type="text" class="form-control" name="nome[]" id="nome_<?php echo $i; ?>" placeholder="Digite o nome do aluno" required>
              </div>
              <div class="mb-3">
                <label for="nota1_<?php echo $i; ?>" class="form-label">Nota 1:</label>
                <input type="number" class="form-control" name="nota1[]" id="nota1_<?php echo $i; ?>" placeholder="Nota P1" step="0.1" required>
              </div>
              <div class="mb-3">
                <label for="nota2_<?php echo $i; ?>" class="form-label">Nota 2:</label>
                <input type="number" class="form-control" name="nota2[]" id="nota2_<?php echo $i; ?>" placeholder="Nota P2" step="0.1" required>
              </div>
              <div class="mb-3">
                <label for="nota3_<?php echo $i; ?>" class="form-label">Nota 3:</label>
                <input type="number" class="form-control" name="nota3[]" id="nota3_<?php echo $i; ?>" placeholder="Nota P3" step="0.1" required>
              </div>
              <br>
            <?php endfor; ?>
          </div>
        </div>
        <div class="row">
          <div class="col mt-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
          </div>
        </div>
      </form>

      <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") 
        {
          try 
          {
            $nomes = $_POST['nome'];
            $notas1 = $_POST['nota1'];
            $notas2 = $_POST['nota2'];
            $notas3 = $_POST['nota3'];

            $mediaAluno = [];

            foreach ($nomes as $chave => $nome) 
            {
              $nota1 = floatval($notas1[$chave]);
              $nota2 = floatval($notas2[$chave]);
              $nota3 = floatval($notas3[$chave]);

              $media = ($nota1 + $nota2 + $nota3) / 3;

              $mediaAluno[$nome] = $media;
            }

            arsort($mediaAluno);

            echo "<br><h5>Lista de Alunos e Médias (Maior para Menor):</h5>";
            foreach ($mediaAluno as $nome => $media) 
            {
              echo "<p><strong>Nome:</strong> $nome <br> <strong>Média:</strong> " . number_format($media, 2, ',', '.') . "</p>";
            }
          } 
          catch (Exception $e) 
          {
            echo "<p class='text-danger'>Erro: " . $e->getMessage() . "</p>";
          }
        }
      ?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>
  </body>
</html>
