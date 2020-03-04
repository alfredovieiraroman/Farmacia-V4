<?php
// Dados dos virus
class dadosVirus {
    // Atributos da classe virus
    private $nomeCientifico;
    private $nomePopular;
    private $periodo;

    // get e set dos dados
    public function getNomeCientifico() {
        return $this->nomeCientifico;
    }
    public function setNomeCientifico($nomeCientifico) {
        $this->nomeCientifico = $nomeCientifico;
    }
    public function getNomePopular() {
        return $this->nomePopular;
    }
    public function setNomePopular($nomePopular) {
        $this->nomePopular = $nomePopular;
    }
    public function getPeriodo() {
        return $this->periodo;
    }
    public function setPeriodo($periodo) {
        $this->periodo = $periodo;
    }
}