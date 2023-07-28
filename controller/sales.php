<?php
require_once('../model/sales.php');

if (isset($_POST['pay'])) {
    $name = $_POST['cardname'];
    $card = (int)$_POST['cardnumber'];
    $price = (int)$_POST['price'];
    // print_r($_POST);
    
    $result = insertSale($name,$card,$price);
    if ($result==true) {
        header('Location: ../view/report.php');
        
    } else {
        echo "failed";
    }
}