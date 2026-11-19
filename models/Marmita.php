<?php

namespace API\Models;
use Exception;
use DateTime;
date_default_timezone_set('America/Sao_Paulo');
class Marmita{
    private int $idMarmita;
    private string $pratoMarmita;
    private float $precoMarmita;
    private DateTime $validadeMarmita;
    private string $tabela = "marmitas";


    public function __construct(
        int $id,
        string $prato,
        float $preco,
        DateTime $validade
) {
    $this->setIdMarmita($id);

    $this->setPratoMarmita($prato);

    $this->setPrecoMarmita($preco);

    $this->setValidadeMarmita($validade);
}


    public function getIdMarmita(): int {
        return $this->idMarmita;
    }

    public function getPratoMarmita(): string {
        return $this->pratoMarmita;
    }

    public function getPrecoMarmita(): float {
        return $this->precoMarmita;
    }

    public function getValidadeMarmita(): DateTime {
        return $this->validadeMarmita;
    }

    public function getPrecoFormatado(): string {
        return "R$" . number_format($this->precoMarmita, 2);
    }

    public function getMarmitaHTML() : string{
        return "Id: " . $this->getIdMarmita() . "<br>
                Prato: " . $this->getPratoMarmita() . "<br>
                Preço: " . $this->getPrecoFormatado() . "<br>
                Validade: " . $this->getValidadeMarmita()->format('d/m/Y') . "<br>";
    }

    public function setIdMarmita(int $id): void {
        $this->idMarmita = $id;
    }

    public function setPratoMarmita(string $prato): void {
        $this->pratoMarmita = $prato;
    }

    public function setPrecoMarmita(float $pPreco): void {
        $this->precoMarmita = $pPreco;
    }

    public function setValidadeMarmita(DateTime $validade): void {
        $this->validadeMarmita = $validade;
    }
}