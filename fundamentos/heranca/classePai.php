<?php 

class Conta
{
    //Criando Atributos 
    /**Palavra chave Protected: quer dizer que esse Atributo 
     * pode ser manipulado de dentro da Classe e de dentro de Classes Filhas
     * 
     * Sempre que quiser que outras classes filhas tenham acesso aos Atributos da classe pai
     * precisa usar a palavra Protected 
     */ 
    protected $agencia;
    protected $conta;
    protected $saldo;

    //Para criar um Obejto ou para Inicializar uma conta vamos usar o Metodo Construtor 
    public function __construct( $agencia, $conta, $saldo )
    {
        //Gravando informacoes passadas no parametro acima dentro dos Atributos 
        $this->agencia = $agencia;
        $this->conta = $conta;
        //Verificando se o Saldo passado como Parametro é maior que 0 para inicializar a conta
        if ($saldo > 0){
            $this->saldo = $saldo;
        } 
    }
    //Criando Metodo para Depositar na Conta
    public function depositar($quantia)
    {
        if ($quantia > 0){
            $this->saldo += $quantia;
        }
    }
    //Criando Metodo para Retornar o Saldo Atual da Conta
    public function getSaldo()
    {
        return $this->saldo;
    }
}