<?php 

/**Definindo uma classe como abstrata nos podemos continuar usando essa classe como base
 * para outras Classes, mas nao poderemos dar `New` na classe diretamente
 * 
 * &
 * 
 * Definindo um metodo abstrato obrigamos que todas classes filhas no caso estendidas de Conta
 * usem o metodo assinado com abstract obrigatoriamente em toda classe filha
 * 
 */
//Definindo uma Classe Abstrata
abstract class Conta
{

    protected $agencia;
    protected $conta;
    protected $saldo;

    public function __construct( $agencia, $conta, $saldo )
    {
        $this->agencia = $agencia;
        $this->conta = $conta;
        if ($saldo > 0){
            $this->saldo = $saldo;
        } 
    }
    
    public function depositar($quantia)
    {
        if ($quantia > 0){
            $this->saldo += $quantia;
        }
    }
    
    public function getSaldo()
    {
        return $this->saldo;
    }
    
    public function getInfo()
    {
        return "Agencia {$this->agencia}</br> Conta {$this->conta}";
    }

    //Definindo um Metodo Abstrato
    abstract function retirar($quantia);
}