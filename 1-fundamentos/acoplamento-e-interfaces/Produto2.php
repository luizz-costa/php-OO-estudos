<?php 

//A palavra implements diz que a classe Produto assina a classe OrcavelInterface
// Ao assinar a interface a classe afirma que ela tem esse Metodos presetes na interface
class Produto implements OrcavelInterface
{
    private $descricao;
    private $estoque;
    private $preco;
    private $fabricante;
    private $caracteristicas;

    public function __construct($descricao, $estoque, $preco)
    {
        $this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->preco = $preco;
        $this->caracteristicas = [];
    }

    public function addCaracteristica( $nome, $valor )
    {
        $this->caracteristicas[] = new Caracteristica( $nome, $valor );
    }

    public function getCaracteristicas()
    {
        return $this->caracteristicas;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    //
    public function setFabricante( Fabricante $fabricante )
    {
        $this->fabricante = $fabricante;
    }

    //
    public function getFabricante()
    {
        return $this->fabricante;
    }

    public function getPreco()
    {
        return $this->preco;
    }
}