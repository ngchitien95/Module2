<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    h1 {
        color: blue;
        text-align: center;
    }

    form {
        text-align: center;
        width: 400px;
        border: 2px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        padding: 12px 10px 12px 10px;
        box-shadow: 5px 5px #FF8080
    }

</style>
<body>
<form method="POST" action="tinhtoan.php">

        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <input type="text" name="sp"> <br>
        <label> List Price: </label>
        <input type="text" name="price"><br>
        <label>Discount Percent: </label>
        <input type="text" name="phantram"> <br>
        <label> &nbsp;&nbsp;&nbsp;&nbsp; </label>
        <input type="submit" value="Calculate Discount" id="submit">

    </form>
</body>
</html>