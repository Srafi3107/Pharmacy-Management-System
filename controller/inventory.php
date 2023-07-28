<?php
require_once('../model/inventoryDB.php');

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $quantity = (int)$_POST['quantity'];
    $price = (int)$_POST['price'];
    if($name=="" || $quantity=="" || $price==""){
        echo "Please fill all information";
    }else{
    // print_r($_POST);
    if ($quantity < 0) {
        echo "Quantity cannot be less than 0";
        # code...
    } else {
        $result = updateStock($id, $name, $quantity, $price);
        if ($result==true) {
            header('Location: ../view/inventory.php');
            
        } else {
            echo "failed";
        }
    }
}
}
if(isset($_POST['add'])){
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    if($name=="" || $quantity=="" || $price==""){
        echo "Please fill all information";
    }else{
    // print_r($_POST);
    if ($quantity < 0) {
        echo "Quantity cannot be less than 0";
        # code...
    } else {
        if($price < 0){
            echo "Price cannot be less than 0";
        }else{
            //check quantity and price are number
            if(is_numeric($quantity) && is_numeric($price)){
                $result = insertStock($name, $quantity, $price);
                if ($result==true) {
                    header('Location: ../view/inventory.php');
                    
                } else {
                    echo "failed";
                }
}else{
    echo "Quantity and Price must be number";
}
}
}
}
}1
?>