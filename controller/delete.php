<?php
   require_once('../model/pharmachist.php');

    $id=$_GET['id'];
    print_r($id);
    $table='pharmacist';
    // delete($id, $table);
    $result=deletePharmacist($id);
      if($result==true){
         header('Location: ../view/managePharmacist.php');
      }else{
          echo "failed to delete";
      }
