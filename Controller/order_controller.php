<?php
require_once("../Classes/order_class.php");

// Order
function insert_order_ctr($customer_id,$invoice_no,$order_date,$order_status)
{
    $neworder_added= new order_class();

    return $neworder_added->insert_order_cls($customer_id,$invoice_no,$order_date,$order_status);
}

function select_one_order_ctr($order_id,$customer_id,$invoice_no,$order_date,$order_status)
{
    $selectone_order= new order_class();
    return $selectone_order->select_one_order_cls($order_id,$customer_id,$invoice_no,$order_date,$order_status);
}

function select_order_ctr(){

    $select_order= new order_class();
    return $select_order->select_order_cls();
}


function update_order_ctr($order_id,$customer_id,$invoice_no,$order_date,$order_status)
{
    $update_order= new order_class();
    return $update_order->update_order_cls($order_id,$customer_id,$invoice_no,$order_date,$order_status);

}

function delete_order_ctr($order_id)
{
   $delete_order=new order_class();
   return $delete_order->delete_order_cls($order_id);
}
function get_last_order_ctr()
{
    $last_order = new order_class();
    return $last_order->get_last_order_cls();
}


//Orderdetails
function add_orderdetails_ctr($order_id,$journal_id,$quantity)
{
    $neworderdet_added= new order_class();

    return $neworderdet_added->add_orderdetails_cls($order_id,$journal_id,$quantity);
}

function select_one_orderdetails_ctr($order_id)
{
    $selectone_orderdetails= new order_class();
    return $selectone_orderdetails->select_one_orderdetails_cls($order_id);
}
function select_orderdetails_ctr()
{
    $select_orderdetails= new order_class();
    return $select_orderdetails->select_orderdetails_cls();
}


function update_orderdetails_ctr($order_id,$journal_id,$quantity)
{
    $update_orderdetails= new order_class();
    return $update_orderdetails->update_orderdetails_cls($order_id,$journal_id,$quantity);

}

function delete_orderdetails_cls($order_id)
{
   $delete_orderdetails=new order_class();
   return $delete_orderdetails->delete_orderdetails_cls($order_id);
}
?>
