<?php 

// ------------------------ Functions ----------------------------
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $base = validate($_POST["base"]);
    $altura = validate($_POST["altura"]);

    $area = $base * $altura / 2;
    echo "El area del triangulo es: $area [u]^2 <br /><br />";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Introduzca datos triangulo</title>
</head>
<body>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="base">Ingrese la base del triangulo</label>
        <input type="number" for="base" name="base">
        <br>
        <label for="altura">Ingrese la altura del triangulo</label>
        <input type="number" for="altura" name="altura">

        <button type="submit">Send</button>
    </form>
</body>
</html>