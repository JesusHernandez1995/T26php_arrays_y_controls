<?php
        function digitos($numero)
        {
            return strlen((string)$numero);
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
        if (isset($_POST['numero'])) {
            echo 'El numero ' . $_POST['numero'] . ' Tiene ' . digitos($_POST['numero']) . ' digitos.';
        } else {
            ?>
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Introduce un numero</label>
                        <input type="number" class="form-control" name="numero">
                    </div>
                    <button type="submit" class="btn btn-primary">Obtener valor</button>
                </form>
            <?php
        }
    ?>
</body>
</html>