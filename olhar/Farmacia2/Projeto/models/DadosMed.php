<?php
// Classe dados dos medicamentos
class dadosMedicamentos {
    private $nomeVenda;
    private $compostoAtivo;
    
    // Método get e set
    public function getNomeVenda() {
        return $this->nomeVenda;
    }
    public function setNomeVenda($nomeVenda) {
        $this->nomeVenda = $nomeVenda;
    }

    public function getCompostoAtivo() {
        return $this->compostoAtivo;
    }
    public function setCompostoAtivo($compostoAtivo) {
        $this->compostoAtivo = $compostoAtivo;
    }
}