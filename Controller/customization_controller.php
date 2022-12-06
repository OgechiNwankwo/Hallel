<?php
require_once("../Classes/customization_class.php");

//The customer inserts the information that they want on their journal
function insert_customization_ctr($customization_image,$customer_id, $customization_desc)
{
    $newcustomization_added= new customization_class();

    return $newcustomization_added->insert_customization_cls($customization_image,$customer_id,$customization_desc);
}

function select_one_customization_ctr($customization_id)
{
    $selectone_customization= new customization_class();
    return $selectone_customization->select_one_customization_cls($customization_id);
}
function select_customization_ctr()
{
    $select_customization= new customization_class();
    return $select_customization->select_customization_cls();
}


function update_customization_ctr($customization_id,$customization_image,$customer_id,$customization_desc)
{
    $update_customization= new customization_class();
    return $update_customization->update_customization_cls($customization_id,$customization_image,$customer_id,$customization_desc);

}

function delete_customization_ctr($customization_id)
{
   $delete_customization=new customization_class();
   return $delete_customization->delete_customization_cls($customization_id);
}
?>