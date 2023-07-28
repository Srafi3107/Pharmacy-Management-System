<?php
    require_once('db.php');
    
    //
    function insertPharmacist($name, $address, $date, $phone){
        
        
        $conn = getConnection();
        
        $sql = "insert into pharmacist(name, address, join_date, phone) values('{$name}', '{$address}', '{$date}', '{$phone}')";
        $result = mysqli_query($conn, $sql);
        
        if($result){
            return true;
        }else{
            return false;
        }
    }
    function getAllPharmacist(){
        
        $conn = getConnection();
        
        $sql = "select * from pharmacist";
        $result = mysqli_query($conn, $sql);
        
        if($result){
            return $result;
        }else{
            return false;
        }
    }
    function getPharmacistById($id){
        
        $conn = getConnection();
        
        $sql = "select * from pharmacist where id='{$id}'";
        $result = mysqli_query($conn, $sql);
        $row=mysqli_fetch_assoc($result);
        
        if($result){
            return $row;
        }else{
            return false;
        }
    }
    function updatePharmacist($id, $name, $address, $date, $phone){
        
        $conn = getConnection();
        
        $sql = "update pharmacist set name='{$name}', address='{$address}', join_date='{$date}', phone='{$phone}' where id='{$id}'";
        $result = mysqli_query($conn, $sql);
        
        if($result){
            return true;
        }else{
            return false;
        }
    }
    function deletePharmacist($id){
        
        $conn = getConnection();
        
        $sql = "delete from pharmacist where id='{$id}'";
        $result = mysqli_query($conn, $sql);
        
        if($result){
            return true;
        }else{
            return false;
        }
    }
?>