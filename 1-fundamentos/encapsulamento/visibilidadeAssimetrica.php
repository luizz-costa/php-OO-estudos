<?php 

/**
 * Visibilidade Assimetrica é um tipo novo de visibilidade é um conceito que existe desde o php 8.4
 *
 * o que é?
 *  É um tipo de Visibilidade que a gente pode dizer que uma determinada propriedade podem ter DOIS tipos de visibilidade
 *  conforme o caso, conforme a situacao, conforme a situacao, se é uma situacao de leitura ou de gravacao
 *  Ela pode ter uma visibilidade quando for para ler a propriedade e uma outra visibilidade quando for para gravar/atribuir um valor
 * 
 * Por exemplo:
 *  Supondo que voce queira que a propriedade $nome seja public sempre que for ler ela, mas nao gostaria que o usuario
 *  pudesse gravar ele diretamente, e voce quer forcar o usuario passar por um Metodo(Construct ou Set) para gravar o Atributo 
 *  isso é possivel fazer com a Vsibilidade Assimetrica!
 *  
 *  Ou seja: a gente pode definir dois tipos de visibilidade para aquela propriedade ou atributo 
 *      exemplo:  `public private(set) string $nome`
 *      no codigo acima estamos dizendo para o codigo que a propriedade tera duas visibilidades mas sendo
 *      a visibilidade Private a responsavel pela gravacao dos dados 
 *      entao obrigatoriamente temos que criar um Metodo para passar valores para dentro do Atributo Private 
 */

//Visibilidade Assimetrica na Pratica 
class Cidade 
{
    //Declarando Propriedade com Duas Visibilidades(Public e Private)
    //sendo que a visibilidade private(set) sera responsavel por gravar dados no atributo
    public private(set) string $nome; 

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }
}

$c1 = new Cidade('Rio de Janeiro');
print $c1->nome;

