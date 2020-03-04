<?php
// Incluindo a classe de conexão na pagina
require '../models/Banco.php';
?>
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
    <script src="../js/script.js"></script>
    <title>Farmacia - Paciente</title>
</head>

<body>
    <form action="../controllers/InserirPaciente.php" method="POST">
        <div class="container">
            <div id="select" class="form-group">
                <h1 for="exampleFormControlSelect1">Paciente</h1>
                <select class="form-control" name="selectPaciente" id="exampleFormControlSelect1">
                    <option>Tipo de paciente</option>
                    <option id="crianca">Crianca</option>
                    <option id="adulto">Adulto</option>
                    <option id="idoso">Idoso</option>
                </select>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="dosagem" id="dosagem" placeholder="Dosagem">
            </div>

            <div id="select" class="form-group">
                <select class="form-control" name="selectMedicamentos" id="exampleFormControlSelect2">
                    <option>Medicamentos</option>
                    <?php

                    $db = new Banco();
                    $conect = $db->verBanco();

                    $result_dados = "SELECT * FROM medicamentos";
                    $result_query = mysqli_query($conect, $result_dados);
                    while ($row_dados = mysqli_fetch_assoc($result_query)) { ?>
                        <option value="<?php echo $row_dados['id_medicamentos']; ?>">
                            <?php echo $row_dados['nomeVenda']; ?>
                        </option><?php } ?>
                </select>
            </div>

            <div id="select" class="form-group">
                <select class="form-control" name="selectVirus" id="exampleFormControlSelect3">
                    <option>Vírus</option>
                    <?php

                    $db = new Banco();
                    $conect = $db->verBanco();

                    $result_dados = "SELECT * FROM virus";
                    $result_query = mysqli_query($conect, $result_dados);
                    while ($row_dados = mysqli_fetch_assoc($result_query)) { ?>
                        <option value="<?php echo $row_dados['id_virus']; ?>">
                            <?php echo $row_dados['nomePopular']; ?>
                        </option><?php } ?>
                </select>
            </div>

            <button type="submit" id="btn" onblur="cor()" class="btn btn-primary">Cadastrar</button>
            <a href="../views/menu.php"> <button type="button" id="btn" class="btn btn-primary">Menu</button> </a>
        </div>
    </form>
</body>

</html>