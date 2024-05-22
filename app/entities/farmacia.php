<?php

class pessoa
{
    private $nome;
    private $cpf;

    function __construct($nome, $cpf)
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

entities
class clientes extends pessoa
{

    private $codigoCliente;

    function __construct($nome, $cpf, $codigoCliente)
    {
        parent::__construct($nome, $cpf);
        $this->codigoCliente = $codigoCliente;
    }

    public function get_codigoCliente()
    {
        return $this->codigoCliente;
    }
}

class farmaceuticos extends pessoa
{

    private $codigoFarmaceuticos;

    function __construct($nome, $cpf, $codigoFarmaceuticos)
    {
        parent::__construct($nome, $cpf);
        $this->codigoFarmaceuticos = $codigoFarmaceuticos;
    }

    public function get_codigoFarmaceuticos()
    {
        return $this->codigoFarmaceuticos;
    }
}
class remedios
{
    protected $remedios;

    function __construct($remedios)
    {
        $this->remedios = $remedios;
    }

    public function get_remedios()
    {
        return $this->remedios;
    }
}

class remediosSemReceita extends remedios
{
    protected $remediosSemReceita;

    public function get_remediosSemReceita()
    {
        return $this->remedios;
    }
}


class remediosComReceitas extends remedios
{
    protected $nomeDoRemediosComReceita;

    public function get_remediosComReceitas()
    {
        return $this->remedios;
    }
}

class formaDePagamento extends clientes
{

    private $dinheiro;
    private $cartaoCredito;
    private $cartaoDebito;
    private $pix;

    function __construct($dinheiro, $cartaoCredito, $cartaoDebito, $pix)
    {
        $this->dinheiro = $dinheiro;
        $this->cartaoCredito = $cartaoCredito;
        $this->cartaoDebito = $cartaoDebito;
        $this->pix = $pix;
    }

    public function get_dinheiro()
    {
        return $this->dinheiro;
    }

    public function get_cartaoCredito()
    {
        return $this->cartaoCredito;
    }

    public function get_cartaoDebito()
    {
        return $this->cartaoDebito;
    }

    public function get_pix()
    {
        return $this->pix;
    }
}


// Criação de um novo cliente
$cliente = new clientes("João", "123.456.789-00", "001");
echo "Nome do Cliente: " . $cliente->get_nome() . "\n";
echo "CPF do Cliente: " . $cliente->get_cpf() . "\n";
echo "Código do Cliente: " . $cliente->get_codigoCliente() . "\n";

echo "-------------------------------------------------" . "\n";

// Criação de um novo farmacêutico
$farmacêutico = new farmaceuticos("Maria", "987.654.321-00", "F001");
echo "Nome do Farmacêutico: " . $farmacêutico->get_nome() . "\n";
echo "CPF do Farmacêutico: " . $farmacêutico->get_cpf() . "\n";
echo "Código do Farmacêutico: " . $farmacêutico->get_codigoFarmaceuticos() . "\n";

// Criação de um novo remédio sem receita
$remedioSemReceita = new remediosSemReceita("Paracetamol");
echo "Nome do Remédio Sem Receita: " . $remedioSemReceita->get_remediosSemReceita() . "\n";

echo "-------------------------------------------------" . "\n";
// Criação de uma nova forma de pagamento
$formaDePagamento = new FormaDePagamento(true, false, false, false);

echo "Pagamento em Dinheiro: " . ($formaDePagamento->get_dinheiro() ? "Sim" : "Não") . "\n";
echo "Pagamento com Cartão de Crédito: " . ($formaDePagamento->get_cartaoCredito() ? "Sim" : "Não") . "\n";
echo "Pagamento com Cartão de Débito: " . ($formaDePagamento->get_cartaoDebito() ? "Sim" : "Não") . "\n";
echo "Pagamento com Pix: " . ($formaDePagamento->get_pix() ? "Sim" : "Não") . "\n";


// -------------------------------------------------------

echo "-------------------------------------------------" . "\n\n";
// Criação de um novo cliente
$cliente = new clientes("Guga", "123.456.789-00", "002");
echo "Nome do Cliente: " . $cliente->get_nome() . "\n";
echo "CPF do Cliente: " . $cliente->get_cpf() . "\n";
echo "Código do Cliente: " . $cliente->get_codigoCliente() . "\n";

echo "-------------------------------------------------" . "\n";

// Criação de um novo farmacêutico
$farmacêutico = new farmaceuticos("Jhonatta", "987.654.321-00", "F002");
echo "Nome do Farmacêutico: " . $farmacêutico->get_nome() . "\n";
echo "CPF do Farmacêutico: " . $farmacêutico->get_cpf() . "\n";
echo "Código do Farmacêutico: " . $farmacêutico->get_codigoFarmaceuticos() . "\n";

// Criação de um novo remédio Com receita
$remediosComReceitas = new remediosComReceitas("Tarja-Preta");
echo "Nome do Remédio Com Receita: " . $remediosComReceitas->get_remediosComReceitas() . "\n";

echo "-------------------------------------------------" . "\n";
// Criação de uma nova forma de pagamento
$formaDePagamento = new FormaDePagamento(false, true, false, false);
echo "Pagamento em Dinheiro: " . ($formaDePagamento->get_dinheiro() ? "Sim" : "Não") . "\n";
echo "Pagamento com Cartão de Crédito: " . ($formaDePagamento->get_cartaoCredito() ? "Sim" : "Não") . "\n";
echo "Pagamento com Cartão de Débito: " . ($formaDePagamento->get_cartaoDebito() ? "Sim" : "Não") . "\n";
echo "Pagamento com Pix: " . ($formaDePagamento->get_pix() ? "Sim" : "Não") . "\n";
