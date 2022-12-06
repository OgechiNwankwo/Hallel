<?php
require_once("../Classes/cart_class.php");


function add_to_cart_ctr($journal_id,$ip_add,$customer_id,$quantity)
{
    $addcart= new cart_class();

    return $addcart->add_to_cart_cls($journal_id,$ip_add,$customer_id,$quantity);
}

function select_all_cart_ctr($customer_id)
{
    $selectall_cart= new cart_class();
    return $selectall_cart->select_all_cart_cls($customer_id);
}

function select_one_cart_ctr($journal_id, $customer_id)
{
    $selectonecart= new cart_class();
    return $selectonecart->select_one_cart_cls($journal_id, $customer_id);
}
function count_cart_lg_ctr($customer_id)
{
    //create instance of the cart class
    $cart_inst = new cart_class();
    //calls method from Cart class
    return $cart_inst->count_cart_cls($customer_id);
}

function total_checkout_lg_ctr($customer_id)
{
    //create instance of the cart class
    $cart_inst = new cart_class();
    //calls method from Cart class
    return $cart_inst->total_checkout_lg($customer_id);
}
function remove_from_cart_ctr($journal_id,$customer_id)
{
    $removecart= new cart_class();
    return $removecart->remove_from_cart_cls($journal_id,$customer_id);
   
}
function not_logged_remove_from_cart_ctr($journal_id,$ip_add)
{
    $notcart= new cart_class();
    return $notcart->not_logged_remove_from_cart_cls($journal_id,$ip_add);

}

function update_quant_ctr($newquantity, $journal_id,  $customer_id)
{
   $update_quant=new cart_class();
   return $update_quant->update_quant_cls($journal_id, $newquantity, $customer_id);
}



function email_ctr($customer_id){
    $email=new cart_class();
   return $email->email_cls($customer_id);
}

function clear_cart_ctr($customer_id)
{
    //create instance of the cart class
    $clear_cart = new cart_class();
    //calls method from cart class
    return $clear_cart->clear_cart($customer_id);
}

?>