<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Các số nguyên tố nhỏ hơn 100 là: <br>";
    function isPrimeNumber($n) {
        if ($n < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }
    
    
    for ($i = 0; $i < 101; $i++) {
        if (isPrimeNumber($i)) {
            echo($i . " ");
        }
    }

    ?>
</body>
</html>