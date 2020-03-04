<?php
// Incluindo a classe de dados
require '../models/DadosPaciente.php';
require '../models/Banco.php';
// Classe para inserir os dados no banco de dados.
class inserirPaciente extends Banco {
    // Método da classe inserirPaciente
    public function inserir() {
        // Atributos para inserir os dados.
        $dados = new dadosPaciente();

        $dados->setSelectPaciente($_POST['selectPaciente']);
        $dados->setDosagem($_POST['dosagem']);
        $dados->setSelectVirus($_POST['selectVirus']);
        $dados->setSelectMedicamentos($_POST['selectMedicamentos']);

        $tipoPaciente = $dados->getSelectPaciente($_POST['selectPaciente']);
        $dosagem = $dados->getDosagem($_POST['dosagem']);
        $virus = $dados->getSelectVirus($_POST['selectVirus']);
        $medicamento = $dados->getSelectMedicamentos($_POST['selectMedicamentos']);
        
        // Inserir no banco de dados
        $sql = "INSERT INTO paciente (tipoPaciente, dosagem, fk_id_virus, fk_id_medicamento)
        VALUES ('$tipoPaciente', '$dosagem', '$virus', '$medicamento')";

        $sql_id_med_virus = "INSERT INTO med_virus (fk_id_medicamentos, fk_id_virus) VALUES ('$medicamento', '$virus')";

        $sql_id_paciente_med = "INSERT INTO paciente_med (fk_id_medicamentos, fk_id_paciente) VALUES ('$medicamento', '$tipoPaciente')";

        // Conexão do banco
        $conexao = $this->verBanco();
        $inserir = mysqli_query($conexao, $sql);

        $inserir = mysqli_query($conexao, $sql_id_med_virus);
   
        $inserir = mysqli_query($conexao, $sql_id_paciente_med);

        if($inserir == TRUE) {
            header('Location: ../views/menu.php');
        
        } else {
            header('Location: ../views/menu.php');
        }
    }
}
$inserir = new inserirPaciente();
$inserir->inserir();