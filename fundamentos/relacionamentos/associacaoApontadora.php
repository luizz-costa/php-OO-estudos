<?php 


//Criando Classe Apontadora:
class Produto
{
    private $descricao;
    private $estoque;
    private $preco;
    //Atributo que ira armazenar o objeto apontado:
    private $fabricante;

    public function __construct($descricao, $estoque, $preco)
    {
        $this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->preco = $preco;
    }
    public function getDescricao()
    {
        return $this->descricao;
    }

    //Criando o Metodo para (Gravar) Armazenar o Obeto apontado no Atributo Fabricante;
    public function setFabricante( Fabricante $fabricante )
    {
        $this->fabricante = $fabricante;
    }

    //Metodo para (Retornar) conseguir ler o Fabricante: 
    public function getFabricante()
    {
        return $this->fabricante;
    }
}