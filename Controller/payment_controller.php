<?php

require_once("../Classes/payment_class.php");

//sanitize data


//--INSERT--//
function insert_payment_ctr($amount,$customer_id,$order_id,$currency,$payment_date)
{
    $payinsert= new payment_class();

    return $payinsert->insert_payment_cls($amount,$customer_id,$order_id,$currency,$payment_date);
}

function select_payment_ctr()
{
    $select_payment= new payment_class();
    return $select_payment->select_payment_cls();
}
function select_one_payment_ctr($payment_id)
{
    $selectone_payment= new payment_class();
    return $selectone_payment->select_one_payment_cls($payment_id);
}


function update_payment_ctr($payment_id,$amount,$customer_id,$order_id,$currency,$payment_date)
{
    $update_payment= new payment_class();
    return $update_payment->update_payment_cls($payment_id,$amount,$customer_id,$order_id,$currency,$payment_date);

}

function remove_payment_ctr($payment_id)
{
   $delete_payment=new payment_class();
   return $delete_payment->remove_payment_cls($payment_id);
}

?>