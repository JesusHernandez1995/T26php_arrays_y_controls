<?php 

// ------------------------ Functions ----------------------------
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

function calcular_binario($n){
    $restos = array();      /*Creamos un array para ir almacenando los restos*/

    while($n > 0){
        $resultado = $n / 2;        // Dividimos el numero 
        $resto = $n % 2;            // Calculamos el resto de la division
        $restos[] = $resto;         // Almacenamos el resto para luego ordenarlo
        $n = intval($resultado);    // Actualizamos el valor del dividendo
    }

    // Sort an array by key in reverse order
    krsort($restos);

    echo "<br /><br /><br />";

    foreach($restos as $k => $v){
        echo $v;
    }
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $number = validate($_POST["numero"]);
    
    if($number < 0)     $number *= -1;
    calcular_binario($number);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 8 - T26</title>
</head>
<body>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="numero">Ingrese cualquier número para calcular su equivalente en binario</label>
        <input type="number" for="numero" name="numero">
        <br>
    
        <button type="submit">Send</button>
    </form>
</body>
</html>