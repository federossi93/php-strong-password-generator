<?php


function password (){
$lettere = 'abcdefghijklmnopqrstuvwxyz';
$numeri = '1234567890';
$simboli = '!"£$%&/()=?\'^@#[]*';
$marco = 'abcdefghijklmnopqrstuvwxyz1234567890!"£$%&/()=?\'^@#[]*';



$randomPassord = '';

for ($i=0; $i < $_GET['lunghezza'] ; $i++) { 

    if($_GET['lettere']){
    $randomPassord .= $lettere[rand(0, strlen($lettere) -1)];
    }

    if($_GET['numeri']){
    $randomPassord .= $numeri[rand(0, strlen($numeri) -1)];
    }

    if ($_GET['simboli']) {
        $randomPassord .= $simboli[rand(0, strlen($simboli) -1)];
    }

    }



var_dump(strlen($randomPassord));
var_dump($_GET['lunghezza']);

return $randomPassord;
}



?>