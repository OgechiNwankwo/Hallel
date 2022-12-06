<?php
require_once("../Settings/db_class.php");

class order_class  extends db_connection
{

    function insert_order_cls($customer_id, $invoice_no, $order_date, $order_status)
    {
        $mysql = "INSERT INTO `orders`( `customer_id`, `invoice_no`, `order_date`, `order_status`) VALUES ('$customer_id','$invoice_no','$order_date','$order_status')";
        return $this->db_query($mysql);
    }

    function select_one_order_cls($order_id, $customer_id, $invoice_no, $order_date, $order_status)
    {
        $mysql = "SELECT `order_id`, `customer_id`, `invoice_no`, `order_date`, `order_status` FROM `orders` WHERE `order_id`='$order_id'";
        return $this->db_fetch_one($mysql);
    }
    function select_order_cls()
    {
        $mysql = "SELECT * FROM `orders`";
        return $this->db_fetch_all($mysql);
    }
    function update_order_cls($order_id, $customer_id, $invoice_no, $order_date, $order_status)
    {
        $mysql = "UPDATE `orders` SET `order_id`='$order_id',`invoice_no`='$invoice_no',`order_date`='$order_date',`order_status`='$order_status' WHERE `customer_id`='$customer_id'";
        return $this->db_query($mysql);
    }
    function delete_order_cls($order_id)
    {
        $mysql = "DELETE FROM `orders` WHERE `order_id`=''";
        return $this->db_query($mysql);
    }

    function get_last_order_cls()
    {
        return $this->db_fetch_one("select max(order_id) as currentOrder from orders");
    }


    //Orderdetails 
    function add_orderdetails_cls($order_id, $journal_id, $quantity)
    {
        $mysql = "INSERT INTO `orderdetails`(`order_id`, `journal_id`, `quantity`) VALUES ('$order_id','$journal_id','$quantity')";
        return $this->db_query($mysql);
    }


    function select_one_orderdetails_cls($order_id)
    {
        $mysql = "SELECT `order_id`, `journal_id`, `quantity` FROM `orderdetails` WHERE `order_id`='$order_id'";
        return $this->db_fetch_one($mysql);
    }
    function select_orderdetails_cls()
    {
        $mysql = "SELECT * FROM `orderdetails`";
        return $this->db_fetch_all($mysql);
    }
    function update_orderdetails_cls($order_id, $journal_id, $quantity)
    {
        $mysql = "UPDATE `orderdetails` SET `journal_id`='$journal_id',`quantity`='$quantity' WHERE `order_id`='$order_id'";
        return $this->db_query($mysql);
    }
    function delete_orderdetails_cls($order_id)
    {
        $mysql = "DELETE FROM `orderdetails` WHERE `order_id`='$order_id'";
        return $this->db_query($mysql);
    }
}
