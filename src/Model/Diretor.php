<?php
namespace APP\Model;
class Diretor{
    public string $nome;
    public ?int $idade;
    public ?string $telefone;
    

    public function __construct(
        string $nome,
        ?int $idade = null,
        ?string $telefone = null
    )
    {
        $this-> nome = $nome;
        $this-> idade = $idade;
        $this-> telefone = $telefone;
    }
}