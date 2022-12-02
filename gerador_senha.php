<?php
session_start();
$_SESSION['password'] = "";
$quantidade_caracter = $_POST['qtdcaracter'];

$letras_minusculas = range('a', 'z'); 
$letras_maiusculas = range('A', 'Z'); 
$numeros = range("0", "9");
$simbolos = ['!', '@', '#', '%', '%',  '&', '*'];

foreach($letras_minusculas as $chave => $letra){
    echo($letra);
}

foreach($letras_maiusculas as $chave => $letra){
    echo($letra);
}
foreach($numeros as $chave => $numero){
    echo($numero);
}

foreach($simbolos as $chave => $simbolo){
    echo($simbolo);
}

$array_caracter = [];
if(isset($_POST['maiuscula'])){
    foreach($letras_maiusculas as $letra){
        array_push($array_caracter, $letra);
    }
 }
if(isset($_POST['minuscula'])){
    foreach($letras_minusculas as $letra){
        array_push($array_caracter, $letra);
    }
 }
 if(isset($_POST['simbolo'])){
    foreach($simbolos as $simbolo){
        array_push($array_caracter, $simbolo);
    }
 }
 if(isset($_POST['numero'])){
    foreach($numeros as $num){
        array_push($array_caracter, $num);
    }
 }


$password = "";
$key = 0;
for($i = 0; $i<$quantidade_caracter; $i++){
    $password .= $array_caracter[array_rand($array_caracter)];
}


$_SESSION['password'] = $password;
header("location: index.php")
?>