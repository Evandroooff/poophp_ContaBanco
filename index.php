<?php
require_once 'ContaBanco.php';

$p1 = new ContaBanco(); //Jubileu
$p2 = new ContaBanco(); //Creusa

$p1->abrirConta("CC");
$p1->setNumConta(1111);
$p1->setDono("Jubileu");
$p2->abrirConta("CP");
$p2->setNumConta(2222);
$p2->setDono("Creuza");

$p1->depositar(300);
$p2->depositar(500);

$p2->sacar(100);

$p1->pagarMensal();
$p2->pagarMensal();

echo "<pre>";
    print_r($p1);
    print_r($p2);
echo "</pre>";