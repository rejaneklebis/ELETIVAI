<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 19</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <main class="container mt-3">
      <h3>Resposta do Exercício 19</h3>
      <?php
          if($_SERVER["REQUEST_METHOD"] == 'POST'){
              try{
                  $valor1 = (float) $_POST['valor1'] ?? 0;
                                   //+ - * / % ++ -- ** potenciação
                  
                  $horas = $valor1 * 24;
                  $minutos = $horas * 60;
                  $segundos = $minutos * 60;
                  echo "<p>$valor1 dias equivalem à: </p>";
                  echo "<p>$horas horas </p>";
                  echo "<p>$minutos minutos </p>";
                  echo "<p>$segundos segundos </p>";

              }catch(Exception $e){
                  echo "Erro! ".$e->getMessage(); 

              }
          }

      ?>

    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>