<?php

require 'vendor/autoload.php';
use App\Mago;
use App\Guerreiro;
use App\Arqueiro;

$mago = new Mago();
$mago->Atacar("bola de fogo", "0");

$guerreiro = new Guerreiro();
$guerreiro->Atacar("estocada", "5");

$arqueiro = new Arqueiro();
$arqueiro->Atacar("Flecha de gelo", "1");

?>