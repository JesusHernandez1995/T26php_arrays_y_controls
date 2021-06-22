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
            $endedWith = array();
            while (count($numbers) < $_POST['cantidad']) {
                $random = rand(1, 300);
                array_push($numbers, $random);
            }
            foreach($numbers as $number) {
                if (str_ends_with((string)$number, (string)$_POST['acabadosEn'])) {
                    array_push($endedWith, $number);
                }
            }
            print "<pre>";
            print_r($numbers);
            print "</pre>";

            print "Acabados en " . $_POST['acabadosEn'] . ": <pre>";
            print_r($endedWith);
            print "</pre>";
            ;
        } else {
            ?>
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">cantidad de valores en el array</label>
                        <input type="number" class="form-control" name="cantidad">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mostrar solo numeros acabados en</label>
                        <input type="string" class="form-control" name="acabadosEn">
                    </div>
                    <button type="submit" class="btn btn-primary">Obtener valor</button>
                </form>
            <?php
        }
    ?>
</body>
</html>