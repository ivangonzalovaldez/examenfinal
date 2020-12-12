<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

require_once 'modelo/Auto.php';
require_once 'modelo/Marca.php';

$m1 = new Marca();
$m1->Nombre= "Ford";

$au1 = new Auto();
$au1->Modelo= "Fiesta";
$au1->Marca= $m1;

$au2 = new Auto();
$au2->Modelo= "Focus";
$au2->Marca= $m1;

$au3 = new Auto();
$au3->Modelo= "Kuga";
$au3->Marca= $m1;

$au4 = new Auto();
$au4->Modelo= "Ranger";
$au4->Marca= $m1;

$array = array();
$array[]=$au1;
$array[]=$au2;
$array[]=$au3;
$array[]=$au4;

echo json_encode($array);