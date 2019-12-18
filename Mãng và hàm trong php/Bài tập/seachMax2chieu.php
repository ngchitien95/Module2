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
    
    function seachMax($arr){
        $max = $arr[0][0];
        $index = 0;
        for ($i = 0; $i < count($arr); $i++){
            for ($j = 0; $j < count($arr[$i]); $j++ ){
                if ( $arr[$i][$j] > $max ){
                    $max = $arr[$i][$j];
                    $index = "$i , $j";
                }
            }
        }
        return "index $index max is $max";
    }
    $arr1 = [[1,2,4,6,2],[2,4,7,2,3,33,35]];
    echo seachMax($arr1);
    ?>
</body>
</html>