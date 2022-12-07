<?php
require_once("../Controller/customer_controller.php");

if (isset($_POST['submit'])) {

    $customer_name = $_POST['fullname'];
    $customer_email = $_POST['email'];
    $password = $_POST["password"];
    $customer_pass = password_hash($password, PASSWORD_DEFAULT);

    $customer_country = $_POST['country'];
    $customer_contact = $_POST['contact'];
    $user_role = 2;


    $checkEmailExit = select_customer_ctr($customer_email);
    if ($checkEmailExit == NULL) {
        $check = customer_register_ctr(
            $customer_name,
            $customer_email,
            $customer_pass,
            $customer_country,
            $customer_contact,
            $user_role
        );

        // return $check;

        if ($check == true) {
            echo "Record inserted";
            header('Location:../View/login.php');
        } else {
            header('Location:../View/register.php?message=error');
        }
    } else {
        echo "Email already exist";
        header('Location:../View/register.php?message=error');
    }
}
