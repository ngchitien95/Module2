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

    label {
        font-size: 30px;
        color: green;
    }
</style>

<?php
if (($_SERVER["REQUEST_METHOD"] == "POST")) {
    $enterUsd = $_POST["usd"];

    $rate = $enterUsd * 23000;
}
?>
<form>
    <h1>Tiền VND của bạn là</h1>
    <label><?php echo $rate . "vnd"  ?></label>

</form>