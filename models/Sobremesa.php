<?php

namespace API\Models;

 use Exception;
class Sobremesa {
    private int $idSobremesa;
    private string $nomeSobremesa;
    private string $descricao;
    private float $preco;
    private string $tabela = "sobremesas";

    public function __construct(
        int $id, 
        string $nome, 
        string $descricao, 
        float $preco
        
    ) {
        //$this->idSobremesa = $id;
        $this->setIdSobremesa($id);
        //$this->nomeSobremesa = $nome;
        $this->setnomeSobremesa($nome);
        //$this->descricao = $descricao;
        $this->setDescricao($descricao);
        //$this->preco = $preco;
        $this->setPreco($preco);
    }

    public function getnomeSobremesa(): string {
        return $this->nomeSobremesa;
    }
    public function getDescricao(): string {
        return $this->descricao;
    }

    public function getPrecoFormatado(): string {
        return "R$" . number_format($this->preco, 2, '.', ',');
    }
    public function getIdSobremesa(): int {
        return $this->idSobremesa;
    }
    public function getSobremesaHTML() : string{
    return "Id: " . $this->getIdSobremesa() . "<br>
            Nome: " . $this->getnomeSobremesa() . "<br>
            Descrição: " . $this->getDescricao() . "<br>
            Preço: " . $this->getPrecoFormatado() . "<br>";
        }

    public function setIdSobremesa(int $pId): void {
        $this->idSobremesa = $pId;
    }       

    public function setNomeSobremesa(string $nomeSobremesa): void {
        //O nome não pode ser vazio e deve possuir ao menos 3 caracteres
        if ($nomeSobremesa == "") {
        throw new Exception("O nome da sobremesa não pode ser vazio.");
        } else if (strlen(trim($nomeSobremesa)) < 3) {
        throw new Exception("O nome da sobremesa deve ter ao menos 3 caracteres.");
        }
        $this->nomeSobremesa = $nomeSobremesa;
    }

    public function setDescricao(string $pDescricao): void {
        $this->descricao = $pDescricao;
    }

    public function setPreco(float $preco): void {
        //Impede que o usuário insira um texto como parâmetro do preço
        if (!is_numeric($preco)) {
            throw new Exception("O preço deve ser um valor numérico válido. Textos não são permitidos.");
        } 
        $this->preco = $preco;
    }
}