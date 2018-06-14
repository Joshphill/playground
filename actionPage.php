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
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Paper Dashboard by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>
    <link href="assets/css/demo.css" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>


    <div class="jumbotron">
        <h1 class="text-center">Savings Dashboard</h1>
        <h2 class="text-center">Your Current total saved is</h2>
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="icon-big icon-success text-center">
                                    <i class="ti-wallet"></i>
                                </div>
                            </div>
                            <div class="col-xs-8">
                                <div class="numbers">
                                    <p>Revenue</p>
                                    $1,345
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="icon-big icon-success text-center">
                                    <i class="ti-wallet"></i>
                                </div>
                            </div>
                            <div class="col-xs-8">
                                <div class="numbers">
                                    <p>Revenue</p>
                                    $1,345
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="icon-big icon-success text-center">
                                    <i class="ti-wallet"></i>
                                </div>
                            </div>
                            <div class="col-xs-8">
                                <div class="numbers">
                                    <p>Revenue</p>
                                    $1,345
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</head>
<body>
    <div class="row">
        <div class="card col-4">
            <div class="card-header">
                <h2 class="card-title text-center">Christmas Savings</h2>
                <div class="card-body">
                    <div class="card-footer">   
                    </div>        
                </div>
            </div>       
        </div>
        <div class="card col-4">
            <div class="card-header">
                <h2 class="card-title text-center">Holiday Savings</h2>
                <div class="card-body">
                    <form class="form-center">
                        <input type="number" name="Hamount" placeholder="Save it">
                        <br>
                        <br>
                        <input type="date" name="Sdate">
                        <br>
                        <br>
                        <input type="text" name="who" placeholder="Who saved it?">
                    </form>
                            
                </div>
            </div>       
        </div>
        <div class="card col-4">
            <div class="card-header">
                <h2 class="card-title text-center">General Savings</h2>
                <div class="card-body">        
                </div>
            </div>       
        </div>
    </div>

</body>
</html>

