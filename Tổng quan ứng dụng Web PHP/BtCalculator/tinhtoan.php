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
<?php
if (($_SERVER["REQUEST_METHOD"] == "POST")) {
    $firstOpe = $_POST["first"];
    $seconOpe = $_POST["second"];
    $operator = $_POST["operator"];

    if (isset($operator)) {
        switch ($operator) {
            case "+": {
                    $result =  $firstOpe + $seconOpe;
                    break;
                }
            case "-": {
                    $result =  $firstOpe - $seconOpe;
                    break;
                }
            case "*": {
                    $result =  $firstOpe * $seconOpe;
                    break;
                }
            case "/": {
                    echo $result =  $firstOpe / $seconOpe;
                break;
                }
            
                }

        }
    }

?>
    <form>
        <h1>SimPle Calculator</h1>
        <label>First operand: <?php echo  $firstOpe ?></label><br><br>
        <label>Second operand: <?php echo $seconOpe ?></label><br><br>
        <label>
            <h1>result</h1> <?php echo $result ?>
        </label><br><br>

    </form>