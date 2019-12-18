<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    label {
        font-size: 40px;
        color: red;
    }

    input {
        font-size: 40px;
        color: blue;
    }
</style>

<body>
    <form method="post">
        <label>Bạn muốn bao nhiêu cột</label>
        <input type="text" name="index" placeholder="enter the cột"> <br>
        <label >Bạn muốn bao nhiêu dòng</label>
        <input type="text" name="index1" placeholder="enter the dòng"> <br>
        <label> bạn muốn tính tổng của cột thứ bao nhiêu</label>
        <input type="text" name="sum" placeholder="enter the cột muốn tính tổng"> <br>

        <input type="submit" value="sum"><br><br>
    </form>
    <table border="1">
        <?php
        if (($_SERVER["REQUEST_METHOD"] == "POST")) {
            $index = $_POST["index"];
            $index1 = $_POST["index1"];
            $colum = $_POST["sum"];

            $arr = array();
            // $arr=[[1, 2, 3, 5, 6, 1, 2],[1,3,4,2,5,6,3,1],[1,4,6,3,1,7,8,4]];
            $len = $index;

            for ($i = 0; $i < $len; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $index1; $j++) {
                    $arr[$i][$j] = rand(1, 30);
                    echo "<td>" . $arr[$i][$j] .  "</td>";
                }
                echo "</tr>";
            }

            $sum = 0;
            for ($i = 0; $i < $len; $i++) {
                $sum += $arr[$i][$colum];
            }
            echo "tổng của Cột " . ($colum +1) . " is: $sum";
        }




        ?>
    </table>
</body>

</html>