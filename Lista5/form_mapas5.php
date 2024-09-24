<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Verificação de Estoque de Livros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      
      <h5>Exercício 05</h5>

      <!-- Formulário para cadastro de livros -->
      <form action="" method="POST">
        <div class="row">
          <div class="col mb-3">
            <?php for($i = 0; $i < 5; $i++) : ?>
              <div class="mb-3">
                <label for="titulo_<?php echo $i; ?>" class="form-label">Título:</label>
                <input type="text" class="form-control" name="titulo[]" id="titulo_<?php echo $i; ?>" placeholder="Digite o título" required>
              </div>
              <div class="mb-3">
                <label for="estoque_<?php echo $i; ?>" class="form-label">Quantidade:</label>
                <input type="number" class="form-control" name="estoque[]" id="estoque_<?php echo $i; ?>" placeholder="Quantidade" required>
              </div>
              <br>
            <?php endfor; ?>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <button type="submit" class="btn btn-primary">Enviar</button>
          </div>
        </div>
      </form>

      <?php
      if ($_SERVER['REQUEST_METHOD'] == "POST") 
      {
        try 
        {
          $titulos = $_POST['titulo'];
          $estoques = $_POST['estoque'];
          $livros = [];

          foreach ($titulos as $chave => $titulo) 
          {
            $estoque = intval($estoques[$chave]);
            
            $livros[$titulo] = $estoque;
          }

          ksort($livros);

          echo "<br><h5>Lista de Livros e Estoque:</h5>";
          foreach ($livros as $titulo => $estoque) 
          {
            echo "<p>Título: $titulo <br> Estoque: $estoque</p>";

            if ($estoque < 5) 
            {
              echo "<p style='color: red;'><strong>Alerta:</strong> O livro '$titulo' está com estoque baixo!</p>";
            }
          }
        } 

        catch (Exception $e) 
        {
          echo "<p style='color: red;'>Erro: " . $e->getMessage() . "</p>";
        }
      }
      ?>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>
  </body>
</html>
