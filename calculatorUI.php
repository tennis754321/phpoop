<?php
require_once "Calculator.php";

$calculator = new Calculator;

if(isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $symbol = $_POST['symbol'];
    $num2 = $_POST['num2'];

    $calculator->setValues($num1, $symbol, $num2);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="num" name="num1"><br>
        <select name="symbol">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        </select><br>
        <input type="num" name="num2"><br>
        <button type="submit" name="submit">Calculator</button>
    </form>
    <hr>
    <h2>Output</h2>
    <p><?php echo $calculator->getNum1(); ?><?php echo $calculator->getSymbol(); ?><?php echo $calculator->getNum2(); ?> = <?php echo $calculator->getTotal(); ?></p>

</body>
</html>