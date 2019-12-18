<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Simple Calculator</h1>
    <form method="POST" action="index2.php">
        <label title="Calculator">
            First operand<input type="text" name="valu1" />
            Operator
            <select name="operator">
                <option value="+">addition(+)</option>
                <option value="-">subtraction(-)</option>
                <option value="*">multiplication(*)</option>
                <option value="/">division(/)</option>
            </select>
            Second operand<input type="text" name="valu2" />
            <input type="submit" name="Calculate" value="Calculate" />
        </label>
    </form>
</body>

</html>