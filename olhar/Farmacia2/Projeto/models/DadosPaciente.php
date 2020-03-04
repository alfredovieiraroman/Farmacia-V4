<?php
// Dados da classe paciente
class dadosPaciente {
    private $selectPaciente;
    private $dosagem;
    private $selectMedicamentos;
    private $selectVirus;

    // Métodos get e set da classe paciente
    public function getSelectPaciente() {
        return $this->selectPaciente ;
    }
    public function setSelectPaciente($selectPaciente) {
        $this->selectPaciente = $selectPaciente;
    }

    public function getDosagem() {
        return $this->dosagem;
    }
    public function setDosagem($dosagem) {
        $this->dosagem = $dosagem;
    }

    public function getSelectMedicamentos() {
        return $this->selectMedicamentos;
    }
    public function setSelectMedicamentos($selectMedicamentos) {
        $this->selectMedicamentos = $selectMedicamentos;
    }

    public function getSelectVirus() {
        return $this->selectVirus;
    }
    public function setSelectVirus($selectVirus) {
        $this->selectVirus = $selectVirus;
    }
}