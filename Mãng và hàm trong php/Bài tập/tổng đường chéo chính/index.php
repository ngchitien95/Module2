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
<input type="text" name="number" placeholder="enter the size">
<input type="submit" value="Tính" >
</form>
<table border="2">
    <?php
        if (($_SERVER["REQUEST_METHOD"] == "POST")) {
            $len = $_POST["number"];
            $arr=[];
            for ($i=0 ; $i< $len ; $i++){
                echo "<tr>";
                for($j=0 ; $j < $len ; $j++)
                {
                    $arr[$i][$j] = rand(1, 30);
                    echo "<td>" . $arr[$i][$j] .  "</td>";
                }
                echo "</tr>";
            }
            $sum = 0;
            for ($i = 0; $i < $len; $i++) {
                $sum += $arr[$i][$i];
            }
            echo "tổng đường chéo chính là: " .  $sum;

        }
    ?>
</table>
</body>
</html>