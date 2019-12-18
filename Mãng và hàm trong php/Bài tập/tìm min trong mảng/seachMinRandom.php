<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <label>Nhập count</label>
        <input type="text" name="len"> <br>
        <input type="submit" value="OKE">
    </form>

    <?php

if (($_SERVER["REQUEST_METHOD"] == "POST")) {

    $length = $_POST["len"];

    function ranArray($length)
    {
        $arr = [];
        for ($i = 0; $i < $length; $i++) {
            array_push($arr, mt_rand(1, 20));
        }
        return $arr;
    }
    $arr1 = ranArray($length);
    // var_dump ($arr1);

    for ( $i =0 ; $i < count($arr1) ; $i++ ){
        echo  $arr1[$i] .",";
    }
    echo "<br>";
    function SeachMin($arr) {
        $min = $arr[0];
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] < $min) {
                $min = $arr[$i];
            }
        }
        return $min;
    }
    $min = SeachMin($arr1);
    echo "min is: $min";
}
    ?>
    

</body>

</html>