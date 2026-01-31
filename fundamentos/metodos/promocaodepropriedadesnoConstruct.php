<?php 

/**
 * Devido a forma convencional de declarar os valores dos Atributos ser tao comum e usada ao longo das decadas
 * O pessoal do PHP resolveu fazer uma forma ainda mais encurtada de declarar os valores dos Atributos
 * tornando mais simples 
 * A forma encurtada e a seguinte:
 * Tomando por base que voce tem um Atributo pre declarado ex:int, string, float, bool.... do mesmo timo do 
 * parametro passado na construcao `Construct` e vai ser armazenado em uma variavel ou seja é um comportamento
 * muito padrao, o Pessoal decidiu reduzir tornar mais simples adicionando a visibilidade ex:private, public..
 * nos parametros do metodo __Construct, assim nao precisa declarar o Atibuto, e nem a atribuicao ou seja
 * jogar a variavel ali dentro.
 * O pessoal atalhou bastante 
 * Ex:
 * 
 * colocando a Visibilidade direto nos parametros de construcao: 
 * public function __construct(private string $descricao, private float $estoque, private float $preco)
 * 
 * nao precisa fazer a declaracao:`private string $descricao;`
 * nao precisa fazer a atribuicao:`$this->descricao = $descricao;`  
 * 
 * Pois o metodo contrutor ira automaticamnete pegar essa variavel/parametro passado e na construcao e criar
 * um Atributo dentro da classe e jogar o conteudo la dentro ou seja os Valores passados na construcao
 * 
 * Entao o fato de ter a visibilidade declarada no __construct vai eliminar a necessidade de declarar o Atributo
 * manualmente e jogar a variavel ali para dentro
 * 
 * Se tiver mais codigo para ser executado no momento da Construcao ele vai ser executado depois de atribuir
 * as variaveis 
 * 
 */

class Produto
{
    // private string $descricao;
    // private float $estoque;
    // private float $preco;

    public function __construct(private string $descricao, private float $estoque, private float $preco)
    {
        // $this->descricao = $descricao;
        // $this->estoque = $estoque;
        // $this->preco = $preco;

        //Executando mais codigo depois de atribuir as variaveis 
        //Acessando a descricao:
        echo $this->descricao;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getEstoque()
    {
        return $this->estoque;
    }

    public function getPreco()
    {
        return $this->preco;
    }
}

$p1 = new Produto('Coffe', 20, 30);
/*
print "O estoque de {$p1->getDescricao()} e {$p1->getEstoque()}<br>";
print "O preco de {$p1->getDescricao()} e {$p1->getPreco()}<br>";
*/