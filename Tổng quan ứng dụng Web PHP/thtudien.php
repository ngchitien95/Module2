<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    input[type=text] {
        width: 300px;
        font-size: 16px;
        border: 2px solid #ccc;
        border-radius: 4px;
        padding: 12px 10px 12px 10px;
    }

    #submit {
        border-radius: 2px;
        padding: 10px 32px;
        font-size: 16px;
    }
</style>

<body>
    <h1> Từ Điển Anh - Việt</h1>
    <form method="POST">
        <input type="text" name="search" placeholder="Nhập từ cần tìm" />
        <input type="submit" id="submit" value="Tìm" />
        <!-- <button id="submit">tìm</button> -->
    </form>
        <?php
        $dictionary = array(
            "hello" => "xin chào",
            "how" => "thế nào",
            "book" => "quyển vở",
            "computer" => "máy tính",
            "cat" => "con mèo"
        );

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $searchword = $_POST["search"];
            $flag = 0;
            foreach ($dictionary as $word => $description) {
                if ($word == $searchword) {
                    echo "Từ: " . $word . ". <br/>Nghĩa của từ: " . $description;
                    echo "<br/>";
                    $flag = 1;
                }
            }

            if ($flag == 0) {
                echo "Không tìm thấy từ cần tra.";
            }
        }
        ?>
 

</body>

</html>