<?php 

// ------------------------ Functions ----------------------------
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $lado = validate($_POST["lado"]);

    $area = $lado * $lado;
    echo "El area del cuadrado es: $area [u]^2 <br /><br />";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Introduzca datos cuadrado</title>
</head>
<body>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="lado">Ingrese el lado del cuadrado</label>
        <input type="number" for="lado" name="lado">
        <br>

        <button type="submit">Send</button>
    </form>
</body>
</html>