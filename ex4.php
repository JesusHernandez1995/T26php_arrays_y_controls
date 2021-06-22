<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $min = htmlspecialchars($_POST["number1"]);
    $max = htmlspecialchars($_POST["number2"]);
    
    $min = (int)$min;
    $max = (int)$max;

    $random_number = rand($min, $max);
    echo "El numero aleatorio generado es $random_number <br /><br />";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 4 - T26</title>
</head>
<body>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="number1">Ingrese el valor mínimo del rango</label>
        <input type="number" for="number1" name="number1">
        <br>
        <label for="number2">Ingrese el valor máximo del rango</label>
        <input type="number" for="number2" name="number2">

        <button type="submit">Send</button>
    </form>
</body>
</html>