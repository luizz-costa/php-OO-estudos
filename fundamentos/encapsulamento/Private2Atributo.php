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
 *  adicionar validacoes, regras para permitir ou nao atribuir aquele valor ou nao dentro do atributo do obj
 * 
 * 
 */
class Pessoa
{
    private $nome;
    private $endereco;
    private $nascimento;

    //Metodo que vai receber a data de nascimento de fora da classe e vai gravar aqui dentro
    public function setNascimento($nascimento)
    {
        //Gravando dado passados de fora da classe nos Atributos privados
        $this->nascimento = $nascimento;
    }
}

//Criando Objeto
$p1 = new Pessoa;

//Acessando um Metodo publico e passando dados para serem gravados nos Atributos Privados
$p1->setNascimento(1990);