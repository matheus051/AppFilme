<?php
namespace APP\Model;
class Estudio{
    public string $nome;
    public string $endereco;
    public string $telefone;

    public function __construct(
        string $nome,
        string $endereco,
        string $telefone
    )
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
    }
}