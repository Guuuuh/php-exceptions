<?php

namespace Alura\Banco\Modelo;

class NomeInvalidoException extends \DomainException
{
    public function __construct(string $nome)
    {
        $mensagem = "O nome $nome não é válido.";
        parent::__construct($mensagem);
    }
}