<?php
// Incluindo a classe de dados
require '../models/DadosMed.php';
require '../models/Banco.php';
// Classe para inserir os dados no banco de dados.
class inserirMedicamentos extends Banco {
    // Método da classe inserirMedicamentos
    public function inserir() {
        // Atributos para inserir os dados.
        $dados = new dadosMedicamentos();
        $dados->setCompostoAtivo($_POST['compostoAtivo']);
        $dados->setNomeVenda($_POST['nomeVenda']);

        $nomeVenda = $dados->getNomeVenda($_POST['nomeVenda']);
        $compostoAtivo = $dados->getCompostoAtivo($_POST['compostoAtivo']);
        
        // Inserir no banco de dados
        $sql = "INSERT INTO medicamentos (nomeVenda, compostoAtivo)
        VALUES ('$nomeVenda', '$compostoAtivo')";

        // Conexão do banco
        $conexao = $this->verBanco();
        $inserir = mysqli_query($conexao, $sql);

        if($inserir == TRUE) {
            header('Location: ../views/menu.php');
        
        } else {
            header('Location: ../views/menu.php');
        }
    }
}
$inserir = new inserirMedicamentos();
$inserir->inserir();