<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../Css/layout.css">
    <title>Farmacia - Medicamentos</title>
</head>

<body>
    <form action="../controllers/InserirMedicamentos.php" method="POST">
        <div class="container">
            <div class="form-group">
                <h1 for="campoMedicamentos">Medicamentos</h1>
                <input type="text" class="form-control" name="nomeVenda" id="nomeVenda" placeholder="nome de venda">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="compostoAtivo" id="compostoAtivo" placeholder="composto ativo">
            </div>

            <button type="submit" id="btn" class="btn btn-primary">Cadastrar</button>
            <a href="../views/menu.php"> <button type="button" id="btn" class="btn btn-primary">Menu</button> </a>
        </div>
    </form>
</body>

</html>