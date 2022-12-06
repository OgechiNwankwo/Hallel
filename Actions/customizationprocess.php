<?php
session_start();
require('../Controller/customization_controller.php');

if(isset($_POST['customize'])){
    $journal_image= $_FILES['journal_image']['name'];

    $dst = "../View/images/".$journal_image;

    $customization_desc = $_POST["message"];

    $customer_id = $_SESSION['cid'];

    move_uploaded_file($_FILES['journal_image']['tmp_name'], $dst);
    
    $result = insert_customization_ctr($dst,$customer_id, $customization_desc);
    
    if($result === true){
        header('Location: ../View/customization.php?message=success');   
    
    } else{
        echo "It did not add in your cart";
    }
}
