<?php 

require_once 'singletonPreferencias.php';


$p1 = Preferencias::getInstance();

echo 'A linguagem é: ' . $p1->getData('language');
echo '<br>';
$p1->setData('language', 'pt');
//--------------------------------

$p2 = Preferencias::getInstance();

echo 'A linguagem é: ' . $p2->getData('language');
echo '<br>';