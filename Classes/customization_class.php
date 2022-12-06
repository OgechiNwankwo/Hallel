<?php
require_once("../Settings/db_class.php");

class customization_class  extends db_connection{

function insert_customization_cls($customization_image, $customer_id, $customization_desc)
{
    $mysql="INSERT INTO `customization`(`customization_image`,`customer_id`,`customization_desc`) VALUES ('$customization_image','$customer_id','$customization_desc')";
    return $this->db_query($mysql);

}

function select_one_customization_cls($customization_id)
{
    $mysql="SELECT `customization_id`, `customization_image`, `customer_id`, `customization_desc` FROM `customization` WHERE `customization_id`='$customization_id'";
    return $this->db_fetch_one($mysql);

}
function select_customization_cls(){
    $mysql="SELECT * FROM `customization`";
    return $this->db_fetch_all($mysql);

}
function update_customization_cls($customization_id,$customization_image,$customer_id,$customization_desc)
{
    $mysql="UPDATE `customization` SET `customization_image`='$customization_image',`customer_id`='$customer_id',`customization_desc`='$customization_desc' WHERE `customization_id`='$customization_id'";
    return $this->db_query($mysql);
}
function delete_customization_cls($customization_id)
{
    $mysql="DELETE FROM `customization` WHERE `customization_id`=''";
    return $this->db_query($mysql);
}

}
?>