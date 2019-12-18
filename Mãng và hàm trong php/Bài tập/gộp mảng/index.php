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
        $arr1=[2,3,5,3,1];
        $arr2=[7,2,4,6,5];
        $arr3=[];

        for ($i=0 ; $i < count($arr1) ; $i++){
            $arr3[$i] = $arr1[$i];
        }
        var_dump($arr3) ;
        for($i = 0 ; $i < count($arr2) ; $i++) {
            $arr3[count($arr3)] = $arr2[$i];
        }
        print_r($arr3);
    ?>
</body>
</html>