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
    <div class="container">
        <!-- codigo php -->
        <?php
        require_once '../models/Banco.php';

        class buscarMed extends Banco
        {

            // Funcao para exibir dados do banco
            public function mostrarMed()
            {

                //$nome = $_POST['nome'];

                //$sql = "SELECT * FROM virus WHERE nomeCientifico = '{$nome}' ";
                $sql = "SELECT * FROM medicamentos";
                $dados = mysqli_query($this->verBanco(), $sql) or die(mysqli_error("Erro exibir dados"));
                $linha = mysqli_fetch_array($dados);
                $total = mysqli_num_rows($dados);

        ?>

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome Venda</th>
                            <th scope="col">Composto Ativo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($linha = mysqli_fetch_array($dados)) { ?>
                            <tr>
                                <th scope="row"><?php echo $linha['id_medicamentos'] ?></th>
                                <td> <?php echo $linha['nomeVenda'] ?> </td>
                                <td> <?php echo $linha['compostoAtivo'] ?> </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
        <?php
            }
        }
        $buscar = new buscarMed();
        $buscar->mostrarMed();
        ?>

        <hr>
        <div id="buscar">
            <form action="../controllers/buscarMed.php" method="POST">
                <div class="form-group">
                    <label for="tipoPaciente">Buscar Medicamentos</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Buscar por nome">
                </div>

                <button type="submit" id="btn" class="btn btn-primary">buscar</button>
                <a href="../views/menu.php"> <button type="button" id="btn" class="btn btn-primary">Menu</button> </a>
            </form>
        </div>
    </div>
</body>

</html>