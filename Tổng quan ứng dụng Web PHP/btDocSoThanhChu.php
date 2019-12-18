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
</style>

<body>
    <form method="POST">
        <input type="text" name="search" placeholder="Nhập số cần đọc" />  
        <button id="submit">Đọc</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $num = $_POST['search'];
     if ($num < 10) {
        
     }
    }

    ?>
</body>

</html>