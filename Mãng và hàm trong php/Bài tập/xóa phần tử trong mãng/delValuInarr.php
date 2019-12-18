<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>

</style>

<body>
    <form method="$_POST" action="tinhtoan.php">
        <input type="text" name="del">
        <input type="submit" value="Del" id="submit">

    </form>
    <?php
    $arr1 = [0, 3, 4, 3, 5, 3, 2];

    for ($i = 0; $i < count($arr1); $i++) {
        echo $arr1[$i] .   " ";
    }
    function findIndex($arr, $x)
    {
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] == $x) {
                $index = $i;
            }
        }
        return $index;
    }
    $index_del = findIndex($arr1, 5);

    function del($arr, $index)
    {
        for ($i = $index; $i < count($arr) - 1; $i++) {
            $arr[$i] = $arr[$i + 1];
        }
        array_pop($arr);
        array_push($arr, 0);
        echo "<br>";
        for ($i = 0; $i < count($arr); $i++) {
            echo $arr[$i] .   " ";
        }
    }


    del($arr1, $index_del);
    ?>

</body>

</html>