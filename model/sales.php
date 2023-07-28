<?php
    require_once('db.php');

    function insertSale($name,$card,$price){
        $conn = getConnection();
        
        $sql = "insert into sales(name, card, price,status) values('{$name}', '{$card}', '{$price}', 'Payment Successfull' )";
        $result = mysqli_query($conn, $sql);
        
        if($result){
            return true;
        }else{
            return false;
        }
    }
    function getAllSales(){
        
        $conn = getConnection();
        
        $sql = "select * from sales";
        $result = mysqli_query($conn, $sql);
        
        if($result){
            return $result;
        }else{
            return false;
        }
    }

    ?>