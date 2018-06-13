<?php

session_start();
if(!isset($_SESSION['total']))
    $_SESSION['total'] = 0;

$total = $_SESSION['total'];

if(isset($_POST['submit'])){
    $amount = $_POST['amount'];
    $total += $amount;
    $_SESSION['total'] = $total;
    $date = $_POST['amountDate'];
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Chrsitmas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <style>
    .fakeimg {
        height: 200px;
        background: #aaa;
    }
</style>
    <div class="jumbotron text-center" style="margin-bottom:0">
    <h1 class="text-danger">Chrsitmas Savings</h1>
    <p>You have saved a total of £ <?= $total ?> </p> 
    </div>
</head>
<body>
    <h2>Savings</h2>
     
</body>


<div class="card bg-danger" style="width:400px">
    <div class="header" class="text-danger" >Christmas Savings</div>
    <div class="card-body" class="bg-danger">
        <form action="" method="post"  >
        Amount Saved:
        <br>
        <input type="number" name="amount" placeholder="Amount saved">
        <br>
        Date Saved:
        <br>
        <input type="date" name="amountDate" placeholder="Date Saved">
        <br><br>
        <input type="submit" name='submit' value="submit">
    </form>
    </div>

 </div>


</html>

