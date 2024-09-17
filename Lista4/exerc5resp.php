<?php
    declare(strict_types=1);
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lista 4</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body> 
    <main class="container mt-5">
    <?php
        function raizQuadrada(int $valor,): float
            {
            return sqrt($valor);
            }
        if ($_SERVER["REQUEST_METHOD"] == 'POST') 
        {
            try
            {
                $valor = (int) $_POST['valor'];

                if ($valor >= 0)
                    {
                        echo "<p>A raíz quadrada é: " . raizQuadrada($valor) . "</P>";
                    }
                else
                    {
                        echo "<p>Valor digitado inválido, o valor deve ser positivo!</p>";
                    }
            }catch (Exception $e)
            {
                echo "Erro:".$e->getMessage();
            }
        }
    ?>
    </main>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>