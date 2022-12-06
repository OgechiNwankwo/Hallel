<?php

require_once("../Settings/db_class.php");

class cart_class  extends db_connection
{

    //Add to cart
    function add_to_cart_cls($journal_id, $ip_add, $customer_id, $quantity)
    {

        $mysql = "INSERT INTO `cart`(`journal_id`, `ip_add`, `customer_id`, `quantity`) VALUES ('$journal_id','$ip_add','$customer_id','$quantity')";
        return $this->db_query($mysql);
    }

    function select_all_cart_cls($customer_id)
    {
        $mysql = "SELECT journal.journal_id, journal.journal_title, journal.journal_price, journal.journal_desc, journal.journal_image, cart.quantity FROM journal left join cart on journal.journal_id = cart.journal_id WHERE cart.customer_id=$customer_id";
        return $this->db_fetch_all($mysql);
    }
    function select_one_cart_cls($journal_id, $customer_id)
    {
        $mysql = "SELECT * FROM `cart` WHERE `journal_id`='$journal_id' AND `customer_id`='$customer_id'";
        return $this->db_fetch_all($mysql);
    }
    //count total items
    function count_cart_cls($customer_id)
    {
        return $this->db_fetch_one("select count(journal_id) as total from cart where customer_id = '$customer_id'");
    }

    function total_checkout_lg($customer_id)
    {
        return $this->db_fetch_one("select round(sum(journal.journal_price * cart.quantity),2) as total from cart join journal on (journal.journal_id = cart.journal_id) where cart.customer_id = '$customer_id'");
    }
    //Remove from cart when customer is logged in
    function remove_from_cart_cls($journal_id, $customer_id)
    {
        $mysql = "DELETE FROM `cart` WHERE`journal_id`= '$journal_id'AND `customer_id`='$customer_id'";
        return $this->db_query($mysql);
    }
    //Remove from cart when customer is not logged in
    function not_logged_remove_from_cart_cls($journal_id, $ip_add)
    {
        $mysql = "DELETE FROM `cart` WHERE `journal_id `= '$journal_id' AND `ip_add` = '$ip_add'";
        return $this->db_query($mysql);
    }

    //Update product quantity in cart
    function update_quant_cls($journal_id, $newquantity, $customer_id)
    {
        $mysql = "UPDATE `cart` SET quantity = '$newquantity' WHERE `journal_id`='$journal_id' AND customer_id='$customer_id'";
        return $this->db_query($mysql);
    }

    function clear_cart($customer_id)
    {
        return $this->db_query("delete from cart where customer_id ='$customer_id'");
    }

    function email_cls($customer_id)
    {
        $mysql = "SELECT customer.customer_email from cart inner join customer on cart.customer_id=customer.customer_id where customer_id=$customer_id limit 1";
        return $this->db_fetch_one($mysql);
    }
}
