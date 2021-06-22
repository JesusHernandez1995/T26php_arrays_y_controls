<?php 

// ------------------------ Functions ----------------------------
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

function calcular_factorial($n){
    $total = 1;

    for($i = 1; $i <= $n; $i++){
        $total *= $i;
    }

    echo "El factorial del numero introducido es $total <br /><br /><br />";
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $number = validate($_POST["numero"]);

    calcular_factorial($number);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 7 - T26</title>
</head>
<body>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="numero">Ingrese cualquier número para calcular el factorial</label>
        <input type="number" for="numero" name="numero">
        <br>
    
        <button type="submit">Send</button>
    </form>
</body>
</html>