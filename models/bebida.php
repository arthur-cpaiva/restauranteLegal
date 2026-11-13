<?php

namespace RestauranteLegal\Models;

class Bebidas
{

    private int $idBebida;
    private string $nomeBebida;
    private string $descricao;
    private float $preco;

    private string $tabela = "prato";

    public function __construct(
        int $id,
        string $nome,
        string $descricao,
        float $preco
    ) {
        $this->idBebida = $id;
        $this->nomeBebida = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
    }

    public function getNomeBebida(): string
    {
        return $this->nomeBebida;
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
