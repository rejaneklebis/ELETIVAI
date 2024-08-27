<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <main class="container mt-3">
      <h3>Resposta do Exercício 5</h3>
      <?php
          if($_SERVER["REQUEST_METHOD"] == 'POST'){
              try{
                  $valor1 = (int) $_POST['valor1'] ?? 0;
                  $valor2 = (int) $_POST['valor2'] ?? 0;
                  //+ - * / % ++ -- ** potenciação
                  $resultado = ($valor1 + $valor2) / 2;
                  echo "<p>Média: $resultado </p>";

              }catch(Exception $e){
                  echo "Erro! ".$e->getMessage(); 

              }
          }

      ?>

    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>