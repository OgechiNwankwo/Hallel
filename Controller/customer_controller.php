<?php
//connect to the user account class
require_once("../Classes/customer_class.php");

//sanitize data




//--INSERT--//
function customer_register_ctr($customer_name,$customer_email,$customer_pass,$customer_country,$customer_contact,$user_role)
{
    $newuser_added= new customer_class();

    return $newuser_added->customer_register_cls($customer_name, $customer_email, $customer_pass, $customer_country,$customer_contact,
    $user_role);
}

function select_customer_ctr($cust_email){

    $add= new customer_class();
    
    return $add->select_customer_cls($cust_email);
}

function select_customer_id_ctr($cust_id){
    $add= new customer_class();
    
    return $add->select_customer_id_cls($cust_id);

}


?>