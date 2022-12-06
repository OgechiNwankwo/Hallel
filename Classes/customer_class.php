<?php

require_once("../Settings/db_class.php");

class customer_class  extends db_connection{

    //this function performs the insertion function
    function customer_register_cls($customer_name,$customer_email,$customer_pass,$customer_country,$customer_contact,$user_role){

		$mysql = "INSERT INTO `customer`(`customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_contact`, `user_role`) VALUES ('$customer_name','$customer_email','$customer_pass','$customer_country','$customer_contact','$user_role')";
		
		return $this->db_query($mysql);
		// return $mysql;
		
		
	}

	

	function select_customer_cls($cust_email){
		
		$mysql ="SELECT * FROM `customer` WHERE `customer_email`='$cust_email'";
		
		return $this->db_fetch_one($mysql);
	}

	function select_customer_id_cls($cust_id){
		
		$mysql ="SELECT * FROM `customer` WHERE `customer_id`='$cust_id' ";
		
		return $this->db_fetch_one($mysql);
	}
	
	
	
}
?>