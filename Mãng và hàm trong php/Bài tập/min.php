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
    function seachMin($arr)
    {
        $index = 0;
        $min = $arr[0];
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] < $min) {
                $min = $arr[$i];
                $index += $i;
            }
        }
        return "index $index min is $min";
    }
    $arr1 = [7, 5, 2, 3, 4, 1, 7, 8];
    echo seachMin($arr1);


    ?>
</body>

</html>