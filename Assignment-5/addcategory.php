<?php
session_start();
require_once('config.php');
if(isset($_POST['add'])){
    
    $categoryname=$_POST['namecat'];
    $categoryAmount=$_POST['number'];
    $categoryDate=$_POST['date'];
    $userId=$_SESSION["userId"];
    
    $adddata=$conn->prepare("INSERT INTO category(categoryName,categoryAmount,categoryDate,userId)
    VALUES('$categoryname','$categoryAmount','$categoryDate','$userId')");
    $adddata->execute();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/addcategry.css">
    <title>Expense Tracker App</title>
</head>
<body>
    <h1>Expense Tracker App</h1>
    <div class="input-section">
        <form method="POST">
        <label for="category-select">Category:</label>
        <input type="text" name="namecat" placeholder="NameCategory">
        <label for="amount-input">Amount:</label>
        <input type="number" id="amount-input" name="number">
        <label for="date-input">Date:</label>
        <input type="date" id="date-input" name="date">
        <button id="add-btn" name="add">Add</button>
        </form>
    </div>
</body>
</html>