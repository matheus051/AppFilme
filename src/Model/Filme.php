<?php
namespace APP\Model;
class Filme {
    public string $titulo;
    public int $duracao;
    public GeneroFilme $generoFilme;
    public int $anoDeLancamento;
    public Diretor $diretor;
    public Estudio $estudio;

    public function __construct(
        string $titulo,
        int $duracao,
        GeneroFilme $generoFilme,
        int $anoDeLancamento,
        Diretor $diretor,
        Estudio $estudio
    )
    {
        $this-> titulo = $titulo;
        $this-> duracao = $duracao;
        $this-> generoFilme = $generoFilme;
        $this-> anoDeLancamento = $anoDeLancamento;
        $this-> diretor = $diretor;
        $this-> Estudio = $estudio;
    }
    
}