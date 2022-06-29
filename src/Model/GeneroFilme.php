<?php
namespace APP\Model;
enum GeneroFilme{
    case HORROR;
    case ACAO;
    case ROMANCE;
    case COMEDIA;

    public function toString()
    {
        return $this->nome;
    }
}