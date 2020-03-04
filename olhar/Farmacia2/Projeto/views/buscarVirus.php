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

        <form action="nomeVirus.php" method="POST">
            <div class="form-group">
                    <label for="buscaNome">Buscar por nome</label>
                    <input type="text" class="form-control" name="nomeVirus" id="nomeVirus" placeholder="nome popular"> <br>
                    <button type="submit" id="btn" class="btn btn-primary">Buscar</button>
                    <a href="../views/menu.php"> <button type="button" id="btn" class="btn btn-primary">Menu</button> </a>
            </div>
        </form>

        

        <hr>

        <?php
        require_once '../models/Banco.php';

        class buscarVirus extends Banco
        {

            // Funcao para exibir dados do banco
            public function mostrarVirus()
            {

                $conect = $this->verBanco();

                $sql = "SELECT * FROM virus";
                $dados = mysqli_query($conect, $sql) or die(mysqli_error("Erro exibir dados"));
                /*$linha = mysqli_fetch_array($dados);
                $total = mysqli_num_rows($dados);*/

        ?>

                <table class="table">
                    <thead class="">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome Cientifico</th>
                            <th scope="col">Nome Popular</th>
                            <th scope="col">Periodo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($linha = mysqli_fetch_array($dados)) { ?>
                            <tr>
                                <th scope="row"><?php echo $linha['id_virus'] ?></th>
                                <td> <?php echo $linha['nomeCientifico'] ?> </td>
                                <td> <?php echo $linha['nomePopular'] ?> </td>
                                <td> <?php echo $linha['periodoI'] ?> </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
        <?php
            }
        }
        $buscar = new buscarVirus();
        $buscar->mostrarVirus();
        ?>
    </div>
</body>

</html>