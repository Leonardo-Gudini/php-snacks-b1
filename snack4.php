<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array numeri casuali</title>
</head>
<body>

    <?php
    $casualNumbers = [];

    for($i = 0; count($casualNumbers) < 15 ; $i++){

        $number = rand( 1, 100);

        if(array_search($number, $casualNumbers) == false){
            $casualNumbers[] = $number;
        }
    };
    

    var_dump($casualNumbers);
    ?>
    
</body>
</html>