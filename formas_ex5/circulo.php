<?php 

// ------------------------ Functions ----------------------------
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $radio = validate($_POST["radio"]);

    $area = $radio*$radio*pi();
    echo "El area del circulo es: $area [u]^2 <br /><br />";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Introduzca datos circulo</title>
</head>
<body>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="radio">Ingrese la radio del circulo</label>
        <input type="number" for="radio" name="radio">
        <br>

        <button type="submit">Send</button>
    </form>
</body>
</html>