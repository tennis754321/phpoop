<?php
require_once "Book.php";

$book = new book("John Doe");

if(isset($_POST['submit'])) {
    $author = $_POST['author'];
    $title = $_POST['title'];
    $date = $_POST['date'];
    $summary = $_POST['summary'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $book->setValues($author, $title, $date, $summary, $price, $quantity);

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
    <label>Book Author</label>
    <input type="text" name="author"><br>
    <label>Book Title</label>
    <input type="text" name="title"><br>
    <label>Release Dates</label>
    <input type="date" name="date"><br>
    <label>Summary</label>
    <input type="text" name="summary"><br>
    <label>Price</label>
    <input type="number" name="price"><br>
    <label>Quantity</label>
    <input type="num" name="quantity"><br>
    <button type="submit" name="submit">Submit</button>
    </form>
    <hr>
    <h2>Output</h2>
    <p>Book Author: <?php echo $book->getAuthor(); ?></p>
    <p>Book Title: <?php echo $book->getTitle(); ?></p>
    <p>Release Date: <?php echo $book->getDate(); ?></p>
    <p>Summary: <?php echo $book->getSummary(); ?></p>
    <p>Price: <?php echo $book->getPrice(); ?></p>
    <p>Quantity: <?php echo $book->getQuantity(); ?></p>
    <p>Total Price: <?php echo $book->getTotal(); ?></p>
    </body>
</html>