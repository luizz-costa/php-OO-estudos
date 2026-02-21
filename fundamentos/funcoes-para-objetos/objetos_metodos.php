<?php

/**
 * Existe uma serie de funcoes uteis para manipulacao de Objetos 
 * 
 * Algumas dessas funcoes permitem que a gente investiguem como determinado objeto esta Definido, quais sao seus Atributos, suas Funcoes..
 * 
 *  
 * 
 */

//Iremos Investigar essa Classe 
class Funcionario 
{
    function setSalario(){}
    function getSalario(){}
    function setNome(){}
    function getNome(){}
}

//Vamos supor que gostariams de saber quais os metodos a Classe Funcionario oferece:
//Funcao para retornar os Metodos que uma Classe tem disponivel 
var_dump(get_class_methods('Funcionario'));