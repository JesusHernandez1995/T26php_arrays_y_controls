<?php 

// ------------------------ Functions ----------------------------
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

function es_Primo($n){
    if ($n == 2 || $n == 3 || $n == 5 || $n == 7) {
        return true;
    } else {
        // comprobamos si es par
        if ($n % 2 != 0) {
            // comprobamos solo por los impares
            for ($i = 3; $i <= sqrt($n); $i += 2) {
                if ($n % $i == 0) {
                    return false;
                }
            }
            return true;
        }
    }
    return false;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $number = validate($_POST["numero"]);

    if(es_Primo($number))   echo "El numero introducido es Primo";
    else                    echo "El numero introducido NO es Primo";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 6 - T26</title>
</head>
<body>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="numero">Ingrese cualquier número</label>
        <input type="number" for="numero" name="numero">
        <br>
    
        <button type="submit">Send</button>
    </form>
</body>
</html>