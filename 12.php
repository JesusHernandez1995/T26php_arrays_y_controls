<?php
        function generarArray($cantidad) {
           $array = [];
           for ($i = 0; $i < $cantidad; $i++) {
               array_push($array, rand(1, 9));
           }
           return $array;
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        if (isset($_POST['cantidad'])) {
            $array = generarArray($_POST['cantidad']);
            print "<pre>";
            print_r($array);
            print "</pre>";

            echo("El total es ". array_sum($array));
        } else {
            ?>
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Introduce el tamaño del array</label>
                        <input type="number" class="form-control" name="cantidad">
                    </div>
                    <button type="submit" class="btn btn-primary">Obtener valor</button>
                </form>
            <?php
        }
    ?>
</body>
</html>