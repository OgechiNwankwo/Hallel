<?php
session_start();
require('../Controller/cart_controller.php');

if(!isset($_SESSION['cid'])){
	header("Location: ../View/login.php");
	
}

if(isset($_GET['journal_id'])){
    $journal_id = $_GET['journal_id'];

    $customer_id = $_SESSION['cid'];
    
    $ip_add = $_SERVER['REMOTE_ADDR'];

    
    $quantity = '1';
    
    $result = add_to_cart_ctr($journal_id,$ip_add,$customer_id,$quantity);
    
    if($result === true){
        header('Location: ../View/cart.php');
    }else{
        echo "It did not add in your cart";
    }
}
?>