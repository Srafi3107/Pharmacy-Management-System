<?php
require_once('../model/pharmachist.php');

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $add = $_POST['add'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    // print_r($_POST);
    
    // $result = updatePharmacist($id, $name, $add, $date, $phone);
    // if ($result==true) {
    //     header('Location: ../view/managePharmacist.php');
        
    // } else {
    //     echo "failed";
    // }
    

    //VALIDATE
    if($name=="" || $add=="" || $phone=="" || $date==""){
        echo "Please fill all information";
    }else{
        $result = updatePharmacist($id, $name, $add, $date, $phone);
    if ($result==true) {
        header('Location: ../view/managePharmacist.php');
        
    } else {
        echo "Failed To Update";
    }
    }
}
if(isset($_POST['add'])){
    $name = $_POST['name'];
    $add = $_POST['address'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    if($name=="" || $add=="" || $phone=="" || $date==""){
        echo "Please fill all information";
    }else{
        $result = insertPharmacist($name, $add, $date, $phone);
        if ($result==true) {
            header('Location: ../view/managePharmacist.php');
            
        } else {
            echo "failed";
        }
    }
}
?>