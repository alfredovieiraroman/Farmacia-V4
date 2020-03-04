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
    <title>Farmacia - Pacientes</title>
</head>

<body>
    <div class="container">
        <div id="buscar">
            <a href="../views/menu.php"> <button type="button" id="btn" class="btn btn-primary">Menu</button> </a>
        </div>

        <hr>

        <!-- codigo php -->
        <?php
        require_once '../models/Banco.php';

        class buscarPaciente extends Banco
        {

            // Funcao para exibir dados do banco
            public function mostrarPaciente()
            {

                $sql = "SELECT paciente.id_paciente, paciente.tipoPaciente, paciente.dosagem,
                virus.nomePopular, medicamentos.nomeVenda
                FROM paciente JOIN virus 
                ON virus.id_virus = paciente.fk_id_virus 
                JOIN medicamentos 
                ON medicamentos.id_medicamentos = paciente.fk_id_medicamento";

                $dados = mysqli_query($this->verBanco(), $sql) or die(mysqli_error("Erro exibir dados"));

        ?>

                <table class="table">
                    <thead class="">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tipo de paciente</th>
                            <th scope="col">Dosagem</th>
                            <th scope="col">Virus</th>
                            <th scope="col">Medicamento</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($linha = mysqli_fetch_array($dados)) { ?>
                            <tr>
                                <th scope="row"><?php echo $linha['id_paciente'] ?></th>
                                <td> <?php echo $linha['tipoPaciente'] ?> </td>
                                <td> <?php echo $linha['dosagem'] ?> </td>
                                <td> <?php echo $linha['nomePopular'] ?> </td>
                                <td> <?php echo $linha['nomeVenda'] ?> </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
        <?php
            }
        }
        $buscar = new buscarPaciente();
        $buscar->mostrarPaciente();
        ?>
    </div>
</body>

</html>