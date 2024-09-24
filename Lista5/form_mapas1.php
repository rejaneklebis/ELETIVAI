<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Contatos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h5>Exercício 01 </h5>
      
      <form action="" method="POST">
        <div class="row">
          <div class="col mb-3">
            <?php for($i = 0; $i < 5; $i++) : ?>
              <div class="mb-3">
                <label for="nome_<?php echo $i; ?>" class="form-label">Nome Completo:</label>
                <input type="text" class="form-control" name="nome[]" id="nome_<?php echo $i; ?>" placeholder="Digite o nome" required>
              </div>
              <div class="mb-3">
                <label for="telefone_<?php echo $i; ?>" class="form-label">Telefone:</label>
                <input type="tel" class="form-control" name="telefone[]" id="telefone_<?php echo $i; ?>" placeholder="Digite o telefone" required>
              </div>
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
        if ($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
          try 
          {
            $nomes = $_POST['nome'];
            $telefones = $_POST['telefone'];

            $contatos = [];
            $duplicados = false;

            foreach ($nomes as $index => $nome) 
            {
              $telefone = $telefones[$index];

              if (isset($contatos[$nome])) 
              {
                echo "<p>Erro: O nome '$nome' já existe</p>";
                $duplicados = true;
              }
              if (in_array($telefone, $contatos)) 
              {
                echo "<p>Erro: O telefone '$telefone' já existe</p>";
                $duplicados = true;
              }

              if (!$duplicados) 
              {
                $contatos[$nome] = $telefone;
              }

              $duplicados = false;
            }

            ksort($contatos);

            
            if (!empty($contatos)) {
              echo "<br><h5>Lista de Contatos:</h5>";
              foreach ($contatos as $nome => $telefone) {
                echo "<p>Nome: $nome <br> Telefone: $telefone</p>";
              }
            }
          } 
          catch (Exception $e) 
          {
            echo "<p>Erro: " . $e->getMessage() . "</p>";
          }
        }
      ?>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>
  </body>
</html>
