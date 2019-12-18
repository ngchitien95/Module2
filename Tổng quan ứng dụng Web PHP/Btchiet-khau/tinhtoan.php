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
    $Product = $_POST["sp"];
    $Price = $_POST["price"];
    $percent = $_POST["phantram"];
    $Discount = $Price * $percent * 0.1;
    $DiscountPrice = $Price - $Discount;
}
?>
<form>
    <h1>Product Discount Calculator</h1>
    <label> Product Description: <?php echo  $Product ?></label><br><br>
    <label> Price: <?php echo $Price ?></label><br><br>
    <label> Discount Percent: <?php echo $percent ?></label><br><br>
    <label> Discount Amount: <?php echo  $Discount ?></label><br><br>
    <label> Discount Price: <?php echo  $DiscountPrice ?></label><br><br>
</form>