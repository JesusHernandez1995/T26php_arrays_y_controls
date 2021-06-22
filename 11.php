<?php
        function conversor($cantidad, $moneda)
        {
            $res = 0;
            $correcto = true;
            switch ($moneda)
            {
                case "libras":
                    $res = $cantidad * 0.86;
                    break;
                case "dolares":
                    $res = $cantidad * 1.28611;
                    break;
                case "yenes":
                    $res = $cantidad * 129.852;
                    break;
                default:
                    print_r("No has introducido una moneda correcta"."<br>");
                    $correcto = false;
            }
            if ($correcto)
            {
                echo(strval($cantidad)." euros en ".$moneda." son ".strval($res)."<br>");
            }
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
        if (isset($_POST['numeros'])) {
            print "<pre>";
            print_r($_POST['numeros']);
            print "</pre>";
        } else {
            ?>
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Introduce una numero</label>
                        <input type="number" class="form-control" name="numeros[]">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Introduce una numero</label>
                        <input type="number" class="form-control" name="numeros[]">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Introduce una numero</label>
                        <input type="number" class="form-control" name="numeros[]">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Introduce una numero</label>
                        <input type="number" class="form-control" name="numeros[]">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Introduce una numero</label>
                        <input type="number" class="form-control" name="numeros[]">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Introduce una numero</label>
                        <input type="number" class="form-control" name="numeros[]">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Introduce una numero</label>
                        <input type="number" class="form-control" name="numeros[]">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Introduce una numero</label>
                        <input type="number" class="form-control" name="numeros[]">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Introduce una numero</label>
                        <input type="number" class="form-control" name="numeros[]">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Introduce una numero</label>
                        <input type="number" class="form-control" name="numeros[]">
                    </div>
                    <button type="submit" class="btn btn-primary">Obtener valor</button>
                </form>
            <?php
        }
    ?>
</body>
</html>