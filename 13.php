<?php
    function isPrime($number){
        if ($number == 1)
        return 0;
        for ($i = 2; $i <= $number/2; $i++){
            if ($number % $i == 0)
                return false;
        }
        return true;
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
            $numbers =array();
            while (count($numbers) < $_POST['cantidad']) {
                $random = rand(1, 99999);
                if (isPrime($random)) {
                    array_push($numbers, $random);
                }
            }
            print "<pre>";
            print_r($numbers);
            print "</pre>";
            ;
            echo 'El numero mas grande es ' . max(...$numbers);
        } else {
            ?>
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">cantidad de valores en el array</label>
                        <input type="number" class="form-control" name="cantidad">
                    </div>
                    <button type="submit" class="btn btn-primary">Obtener valor</button>
                </form>
            <?php
        }
    ?>
</body>
</html>