<?php 
/**
 * 
 * 
 */
//Criando Classe para gerenciar preferencia
class Preferencias
{
    private $data;
    private static $instance;

    //Metodo construct proibido de ser chamado o new diretamente devido estar usando atributo `private` na frente
    private function __construct()
    {
        $this->data = parse_ini_file('application.ini');
    }

    //Metodo para fabricar instancias
    public static function getInstance()
    {
        if (empty(self::$instance))
            {
                //Chamando metodo construtor uma vez, somente se ja nao foi criado
                self::$instance = new self;
            }
            return self::$instance;
    }

    //Metodos para manipular o Vetor 
    public function getData($key)
    {
        return $this->data[$key]; 
    }

    public function setData($key, $value)
    {
        $this->data[$key] = $value;
    }

    //Gravando as preferencias de novo 
    public function save()
    {
        $string = '';
        if ($this->data)
            {
                foreach ($this->data as $key => $value)
                    {
                        $string . "{$key} = \"{$value}\" \n"; 
                    }
            }
            file_put_contents('application.ini', $string);
    }
}