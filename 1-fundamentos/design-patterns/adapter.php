<?php 

/**
 * 
 */

require_once 'PHPMailerAdapter.php';

//Instanciando o Objeto do Adaptador
$mail = new PHPMailerAdapter;

//Chamando Metodo do Adaptador
$mail->setFrom('luizcostavzp@gmail.com', 'Pablo');
$mail->addAddress('destinatario@gmail.com', 'Nome');
$mail->setSubject('Ola, tudo bem?.....');
$mail->setTextBody('Isso e um email para te avisar sobre...');
$email->send();