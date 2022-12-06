<?php

require_once("../Controller/customer_controller.php");
session_start();

/**
 * Get the data from the login form and pass it ot the Login controller function
 */
if (isset($_POST['Login'])) {
    $c_email = $_POST['email'];
    $c_pass = $_POST['password'];

    


    $check = select_customer_ctr($c_email);
    

    if ($check != NULL) {
        $passIndatabase = $check['customer_pass'];

        if (password_verify($c_pass, $passIndatabase)) {
            //Start session and set session id

            $_SESSION['cid'] = $check['customer_id'];
            $_SESSION['c_email'] = $check['customer_email'];
            $_SESSION['role'] = $check['user_role'];
            $_SESSION['Login'] = true;
           

            if ($_SESSION['role'] == 1) {
                header('Location:../View/adminindex.php');
            } else {
                header('location:../View/index.php');
            }
        }
        else{
            echo "password missmatch";
        }
    } 
    else {
        echo "Login Unsuccessful";
    }
}
