<?php 
/**
 * Qual é a caracteristica do Private2 e diferenca do Private1 ?
 * 
 * -No exemplo do Private2 a seguir mostra que é possivel acessar e gravar
 *  nos Atributos Privados usando um Metodo Publico como intermedio, pois
 *  o Metodo esta dentro da Classe ou melhor Escopo da Classe 
 * 
 * -Um Metodo Publico pode ser chamado de Fora da Classe entao por isso:
 *  se a classe possuir Atributos Privados uma maneira de gravar valores neles
 *  é por meio de Metodos Publicos pois os metodos publicos estao dentro do Escopo da Classe
 * 
 *  Entao os Atributos Privados eles sao possiveis de ser manipulados com Metodos Publicos pois
 *  os Metodos estao dentro do escopo da Classe
 *  
 *  E dentro desse Metodo Public que criamos para receber valores vindo de fora da classe, podemos
 *  adicionar validacoes ou regras para permitir ou nao atribuir aquele valor ou nao dentro do atributo do obj
 * 
 * 
 */
class Pessoa
{
    private $nome;
    private $endereco;
    private $nascimento;

    //Criando Metdo Construtor
    public function __construct($nome, $endereco)
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    //Metodo que vai receber a data de nascimento de fora da classe e vai gravar aqui dentro, podendo fazer validacoes.
    public function setNascimento($nascimento)
    {
        //Validando os dados recebidos da data de nascimento
        $partes = explode('-', $nascimento);
        if (count($partes) == 3)
        {
            if (checkdate( $partes[1], $partes[2], $partes[0]))
            {
                //Gravando dados apos validacoes no Atributos Privado
                $this->nascimento = $nascimento;
                return true;
            }
            return false;
        }
        return false;
    }
}

//instanciando o Objeto com Metodo construtor Publico que ira ja salvar nome e endereco nos atributos do Objeto
$p1 = new Pessoa('Maria da Silva', 'Rua Dr Mallard');

//Acessando um Metodo publico e passando dados(data) com tipo errado, que nas validacoes do metodo ira retornar == false
$ok1 = $p1->setNascimento('01 de maio de 2000');
//Acessando um Metodo publico e passando dados(data) com tipo certo, ano/mes/dia, que ira retornar == true e salvar dentro do objeto
$ok2 = $p1->setNascimento('1990-02-14');

var_dump($ok1);
var_dump($ok2);
var_dump($p1);