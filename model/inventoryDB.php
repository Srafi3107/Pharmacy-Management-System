<?php
    require_once('db.php');
    
    function insertStock($name,$stock,$price)
    {
        $conn = getConnection();
        
        $sql = "insert into inventory(name, stock, price) values('{$name}', '{$stock}', '{$price}')";
        $result = mysqli_query($conn, $sql);
        
        if($result){
            return true;
        }else{
            return false;
        }
    }
    function getAllStock(){
        
        $conn = getConnection();
        
        $sql = "select * from inventory";
        $result = mysqli_query($conn, $sql);
        
        if($result){
            return $result;
        }else{
            return false;
        }
    }
    function getStockById($id){
        
        $conn = getConnection();
        
        $sql = "select * from inventory where id='{$id}'";
        $result = mysqli_query($conn, $sql);
        $row=mysqli_fetch_assoc($result);
        
        if($result){
            return $row;
        }else{
            return false;
        }
    }
    function updateStock($id, $name, $stock, $price){
        //print_r($id);
        $conn = getConnection();
        
        $sql = "update inventory set name='{$name}', stock='{$stock}', price='{$price}' where id='{$id}'";
        $result = mysqli_query($conn, $sql);
        
        if($result){
            return true;
        }else{
            return false;
        }
    }
    function deleteStock($id){
        
        $conn = getConnection();
        
        $sql = "delete from inventory where id='{$id}'";
        $result = mysqli_query($conn, $sql);
        
        if($result){
            return true;
        }else{
            return false;
        }
    }
?>