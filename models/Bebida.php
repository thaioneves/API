<?php
 
namespace API\Models;

use Exception;
 
class Bebida {
    private int $idBebida;
    private string $nomeBebida;
    private string $volume;
    private bool $alcoolico = false;
    private float $preco;
    private string $tabela = "bebidas";
 
    public function __construct(
        int $id,
        string $nome,
        string $volume,
        bool   $alcoolico,
        float $preco
       
    ) {
        //$this->idBebida = $id;
        $this->setIdBebida($id);
        //$this->nomeBebida = $nome;
        $this->setnomeBebida($nome);
        //$this->volume = $volume;
        $this->setVolume($volume);
        //$this->alcoolico = $alcoolico;
        $this->setAlcoolico($alcoolico);
        //$this->preco = $preco;
        $this->setPreco($preco);
    }
 
    public function getnomeBebida(): string {
        return $this->nomeBebida;
    }
    public function getVolume(): string {
        return $this->volume;
    }
    public function getAlcoolicoTexto(): string {
        return $this->alcoolico ? "Sim" : "Não";
    }
 
    public function getPrecoFormatado(): string {
        return "R$" . number_format($this->preco, 2);
    }
    public function getIdBebida(): int {
        return $this->idBebida;
    }
    public function getBebidaHTML() : string{
    return "Id: " . $this->getIdBebida() . "<br>
            Nome: " . $this->getnomeBebida() . "<br>
            Volume: " . $this->getVolume() . "<br>
            Alcoólica: " . $this->getAlcoolicoTexto() . "<br>
            Preço: " . $this->getPrecoFormatado() . "<br>";
}

    public function setIdBebida(int $pId): void {
       
        $this->idBebida = $pId;
    }

    public function setnomeBebida(string $pNomeBebida): void { if ($pNomeBebida == "") {
        throw new Exception("O nome da bebida precisa ser preenchido.");
        } else if (strlen($pNomeBebida) < 3) {
            throw new Exception("O nome da bebida deve ter pelo menos 3 caracteres.");
        }
    $this->nomeBebida = $pNomeBebida;
    }

    public function setVolume(string $pVolume): void { if ($pVolume == "") {
        throw new Exception("O volume da bebida precisa ser preenchido.");
        } else if (strlen($pVolume) < 2) {
            throw new Exception("O volume da bebida deve ter pelo menos 2 caracteres.");
        }
        $this->volume = $pVolume;
    }

    public function setAlcoolico(bool $pAlcoolico): void {
        $this->alcoolico = $pAlcoolico;
    }

    public function setPreco(float $pPreco): void {
        if ($pPreco <= 0) {
            throw new Exception("O preço da bebida deve ser maior que zero.");
        }
        $this->preco = $pPreco;
    }

}