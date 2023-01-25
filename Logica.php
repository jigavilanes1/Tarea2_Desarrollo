<?php
include("Operaciones.php");

header("Content-Type:  aplication/json");

$data = json_decode(file_get_contents("php://input"));

//print_r($data);

$objOperaciones = new Operaciones();

$objOperaciones->setNum1($data->num1);
$objOperaciones->setNum2($data->num2);
$datac= $data->opera;

if($datac=="sumar"){
    echo $objOperaciones->sumar();
}elseif($datac=="restar"){
    echo $objOperaciones->restar();
}elseif($datac=="multiplicar"){
    echo $objOperaciones->multiplicar();
}elseif($datac=="dividir"){
    echo $objOperaciones->dividir();
}else{
    echo "Te amamos ya dañaste";
}

?>