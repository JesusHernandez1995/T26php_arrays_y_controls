<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $figura = $_POST["forma_geometrica"];

    if($figura == "triangulo")      header('Location: formas_ex5/triangulo.php');
    if($figura == "cuadrado")       header('Location: formas_ex5/cuadrado.php');
    if($figura == "circulo")        header('Location: formas_ex5/circulo.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 5 - T26</title>
</head>
<body>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="forma_geometrica">Escoge una figura geométrica:</label>
        <select name="forma_geometrica" id="forma_geometrica">
            <option value="triangulo">Triangulo</option>
            <option value="cuadrado">Cuadrado</option>
            <option value="circulo">Circulo</option>
        </select>
        <br><br>

        <button type="submit">Send</button>
    </form>
</body>
</html>