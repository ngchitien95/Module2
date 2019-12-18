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
        $investmentAmu = $_POST["investment"];
        $interestRate = $_POST["rate"];
        $numYear = $_POST["year"];
        $future = $investmentAmu * (1 + $interestRate) ** $numYear;
    }
    ?>
    <form>
    <h1>Future Value Calculator</h1>
    <label> Investment Amount: <?php echo ' $' . $investmentAmu ?></label><br><br>
    <label> Yearly Interest Rate: <?php echo ' $' . $interestRate ?></label><br><br>
    <label> Number of Years: <?php echo $numYear . '   Year'  ?></label><br><br>
    <label> Future Value: <?php echo ' $' . $future ?></label><br><br>
    </form>