<?php

require 'vendor/autoload.php';

use App\Whatsapp;
use App\Email;
use App\Sms;

$Whats = new Whatsapp();
$Whats->enviar("Mensagem enviada via: ");

$Sms = new Sms();
$Sms->enviar("Mensagem enviada via: ");

$Email = new Email();
$Email->enviar("Mensagem enviada via: ");

?>