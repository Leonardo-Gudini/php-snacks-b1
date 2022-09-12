<!-- Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>classe</title>
</head>
<body>

<h1>Classe</h1>

<?php
    $classe=[
        [
            "nome" => "Luca",
            "cognome" => "Rossi",
            "voti" => [
                "matematica" => "5",
                "storia" => "6",
                "informatica" => "4",
            ]
            ],
        [
            "nome" => "Emanuele",
            "cognome" => "Bianchi",
            "voti" => [
                "matematica" => "8",
                "storia" => "7",
                "informatica" => "10",
            ]
            ],
        [
            "nome" => "Filippo",
            "cognome" => "Franco",
            "voti" => [
                "matematica" => "7",
                "storia" => "6",
                "informatica" => "8",
            ]
            ],
    ];

    for ($i = 0; $i < count($classe); $i++){
        echo $classe[$i]["nome"];
        echo " ";
        echo $classe[$i]["cognome"];
        echo "<br>";
        echo "Media dei voti: ";
        $mediaVoti = $classe[$i]["voti"]["matematica"] + $classe[$i]["voti"]["storia"] + $classe[$i]["voti"]["informatica"];
        $decimal = $mediaVoti / count($classe);
        echo $decimal = number_format($decimal, 1);
        echo "<br>";
    };
?>
    
</body>
</html>