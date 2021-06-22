<?php 

session_start();
$cont = 0;

// ---------------------- Functions ----------------------------- 
function validar_claves($a, $b){
    if(strcmp($a, $b)!== 0)    {
        echo "<br />Lo sentimos, las 2 claves ingresadas son distintas <br />";
        session_destroy();
    }
    else{
        echo "Felicidades!, ha podido iniciar sesión!";
        session_destroy();
    }
}

// --------------------------------------------------------------
if(empty($_SESSION['contador'])){
    $_SESSION["contador"] = $cont;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nombre = htmlspecialchars($_POST["nombre"]);
    if(!isset($clave1) && $_SESSION["contador"] == 0)  {$clave1 = htmlspecialchars($_POST["password"]); $_SESSION["contador"]++;}
    if(!isset($clave2) && $_SESSION["contador"] == 1 && !isset($clave1))  {$clave2 = htmlspecialchars($_POST["password"]); $_SESSION["contador"]++;}
 
    if(empty($_SESSION['clave_1']))     $_SESSION["clave_1"] = $clave1;
    if(empty($_SESSION['clave_2']) && $_SESSION["contador"] == 2)   $_SESSION["clave_2"] = $clave2;
    if($_SESSION["contador"] == 2)      validar_claves($_SESSION["clave_1"], $_SESSION["clave_2"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 1 - Unidad T26</title>
</head>
<body>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="Nombre">Ingrese su nombre</label>
        <input type="text" for="Nombre" name="nombre">
        <br>
        <label for="Password">Ingrese su clave</label>
        <input type="password" for="Password" name="password">

        <button type="submit">Send</button>
    </form>
</body>
</html>