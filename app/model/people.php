<?php
class people
{
    private string $nome;
    private string $cpf;

    function __construct(string $nome, string $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function get_nome()
    {
        return $this->nome;
    }

    public function get_cpf()
    {
        return $this->cpf;
    }
}