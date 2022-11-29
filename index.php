<?php 

/*Milestone 1
Creare un form che invii in GET la lunghezza della password.
Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli)
da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php*/

//var_dump($_GET['lunghezza']);

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

password();


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>password generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="text-center">
            <h1 class="text-secondary">Stong Password Generator</h1>
            <h2>Genera una password sicura</h2>
        </div>

        <form action="index.php" method="get">
            Lunghezza password:
            <input type="number" name="lunghezza" id="lunghezza">
        </form>

        <p><?php echo password() ?></p>

    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>