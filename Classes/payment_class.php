<?php

require_once("../Settings/db_class.php");

class payment_class  extends db_connection{
    function insert_payment_cls($amount,$customer_id,$order_id,$currency,$payment_date)
    {
        $mysql="INSERT INTO `payment`(`amount`, `customer_id`, `order_id`, `currency`, `payment_date`) VALUES ('$amount','$customer_id','$order_id','$currency','$payment_date')";
        return $this->db_query($mysql);
        
    }
    
    function select_payment_cls()
    {
        $mysql="SELECT * FROM `payment` WHERE";
        return $this->db_fetch_all($mysql);
    }
    
    function select_one_payment_cls($payment_id)
    {
        $mysql="SELECT * FROM `payment`WHERE `payment_id`='$payment_id'";
        return $this->db_fetch_one($mysql);
    
    }
    function update_payment_cls($payment_id,$amount,$customer_id,$order_id,$currency,$payment_date)
    {
        $mysql="UPDATE `payment` SET `amount`='$amount',`customer_id`='$customer_id',`order_id`='$order_id',`currency`='$currency',`payment_date`='$payment_date' WHERE `payment_id`='$payment_id'";

        return $this->db_query($mysql);
    }
    
    function remove_payment_cls($payment_id)
    {
        $mysql="DELETE FROM `payment` WHERE `payment_id`=''";
        return $this->db_query($mysql);
    }

}
?>