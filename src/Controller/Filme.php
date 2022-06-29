<?php
namespace APP\Controller;

require "../../vendor/autoload.php";
use APP\Model\Filme;
use APP\Model\Estudio;
use APP\Model\Diretor;
use APP\Model\GeneroFilme;

$diretor_um = new Diretor("Andy Muschietti", idade:37, telefone:"9898-9889");
$estudio_um = new Estudio(nome:"Estudio de gravação", telefone:"99999-9999", endereco:"Los Angelis");
$filme_um = new Filme(titulo: "It: a coisa",
duracao: 135,
generoFilme: GeneroFilme::HORROR,
anoDeLancamento: 2017,
diretor: $diretor_um,
estudio: $estudio_um);

echo "<pre>";
var_dump($filme_um);
echo "</pre>";