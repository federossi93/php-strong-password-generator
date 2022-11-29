<?php

function password (){
$lettere = 'abcdefghijklmnopqrstuvwxyz';
$lettereMaiuscole = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$numeri = '1234567890';
$simboli = '!"£$%&/()=?\'^@#[]*';
$caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!"£$%&/()=?\'^@#[]*';

$randomPassord = '';
for ($i=0; $i < $_GET['lunghezza'] ; $i++) { 
    $randomPassord .= $caratteri[rand(0, strlen($caratteri) -1)];
}

//var_dump($randomPassord);
return $randomPassord;
}

?>