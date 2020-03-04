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
    <title>Farmacia - Menu</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Projeto</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="../views/virus.php">Cadastro Vírus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../views/medicamentos.php">Cadastro Medicamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../views/paciente.php">Cadastro Pacientes</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Buscas
                        </a>
                        <div id="dropwdown" class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a id="btnd" class="dropdown-item" href="../views/buscarVirus.php">Buscar vírus</a>
                            <a id="btnd" class="dropdown-item" href="../views/buscarMed.php">Buscar Medicamentos</a>
                            <a id="btnd" class="dropdown-item" href="../views/buscarPaciente.php">Buscar Pacientes</a>
                        </div>
                    <li class="nav-item">
                        <a class="nav-link" href="../views/index.php">Sair</a>
                    </li>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</body>

</html>