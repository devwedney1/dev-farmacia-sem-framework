<?php

class paymentMenthod extends client
{

    private float $dinheiro;
    private float $cartaoCredito;
    private float $cartaoDebito;
    private float $pix;

    function __construct(float $dinheiro, float $cartaoCredito, float $cartaoDebito, float $pix)
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