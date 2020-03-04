<?php
// Incluindo a classe de dados
require '../models/DadosVirus.php';
require '../models/Banco.php';
// Classe para inserir os dados no banco de dados.
class inserirVirus extends Banco {
    // Método da classe inserirVirus
    public function inserir() {
        // Atributos para inserir os dados.
        $dados = new dadosVirus();
        $dados->setNomeCientifico($_POST['nomeCientifico']);
        $dados->setNomePopular($_POST['nomePopular']);
        $dados->setPeriodo($_POST['periodo']);
        
        $nomeCientifico = $dados->getNomeCientifico($_POST['nomeCientifico']);
        $nomePopular = $dados->getNomePopular($_POST['nomePopular']);
        $periodo = $dados->getPeriodo($_POST['periodo']);
        
        // Inserir no banco de dados
        $sql = "INSERT INTO virus (nomeCientifico, nomePopular, periodoI)
        VALUES ('$nomeCientifico', '$nomePopular', '$periodo')";

        // Conexão do banco
        $conexao = $this->verBanco();
        $inserir = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

        if($inserir == TRUE) {
            header('Location: ../views/menu.php');
            exit();
        
        } else {
            header('Location: ../views/menu.php');
            exit();;
        }
    }
}
$inserir = new inserirVirus();
$inserir->inserir();