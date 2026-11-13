<?php

namespace API\Models;

class Prato {
    private int $idPrato;
    private string $nomePrato;
    private string $descricao;
    private float $preco;
    private string $tabela = "pratos";

    public function __construct(
        int $id, 
        string $nome, 
        string $descricao, 
        float $preco
        
    ) {
        $this->idPrato = $id;
        $this->nomePrato = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
    }

    public function getnomePrato(): string {
        return $this->nomePrato;
    }
    public function getDescricao(): string {
        return $this->descricao;
    }

    public function getPrecoFormatado(): string {
        return "R$" . number_format($this->preco, 2);
    }
    public function getIdPrato(): int {
        return $this->idPrato;
    }
    public function getPratoHTML() : string{
    return "Id: " . $this->getIdPrato() . "<br>
            Nome: " . $this->getnomePrato() . "<br>
            Descrição: " . $this->getDescricao() . "<br>
            Preço: " . $this->getPrecoFormatado() . "<br>";
}
}