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
        <form action="exerc6resp.php" method="POST">
            <div class="row">
                <div class="col-3">
                    <label for="valor" class="form-label">Qual valor gostaria de arredondar? </label>
                    <input type="step" class="form-control" name="valor" id="valor">
                </div>               
            </div>
            <div class="row">
                <div class="col mt-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>

    
    </main>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>