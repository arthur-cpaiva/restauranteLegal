<?php

namespace RestauranteLegal\Models;

class Prato
{

    private int $idPrato;
    private string $nomePrato;
    private string $descricao;
    private float $preco;

    private string $tabela = "prato";

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

    public function getNomePrato(): string
    {
        return $this->nomePrato;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }
    public function getPrecoFormatado(): string
    {
        return "R$ " . number_format($this->preco, 2);
    }

    public function getidPrato(): int
    {
        return $this->idPrato;
    }


    public function getPratoHTML(): string
    {
        return
        "Id: " . $this->getIdPrato() . "<br>
        Nome do Prato: " . $this->getNomePrato() . "<br>
        Descrição: " . $this->getDescricao() . "<br>
        Preço: " . $this->getPrecoFormatado();
    }
}
