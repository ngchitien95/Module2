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
        <h1>Future Value Calculator</h1>

        <label>Investment Amount:</label>
        <input type="text" name="investment"> <br>
        <label> Yearly Interest Rate: </label>
        <input type="text" name="rate"><br>
        <label>Number of Years: </label>
        <input type="text" name="year"> <br>
        <label> &nbsp;&nbsp;&nbsp;&nbsp; </label>
        <input type="submit" value="calculate" id="submit">

    </form>


</body>

</html>