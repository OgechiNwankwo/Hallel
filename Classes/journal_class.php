<?php
require_once("../Settings/db_class.php");

class journal_class  extends db_connection{

function create_journal_cls($journal_title,$journal_price,$journal_desc,$journal_image,$journal_keywords)
{
    $mysql="INSERT INTO `journal`(`journal_title`, `journal_price`, `journal_desc`, `journal_image`, `journal_keywords`) VALUES ('$journal_title','$journal_price','$journal_desc','$journal_image','$journal_keywords')";
    return $this->db_query($mysql);
    
}

function select_journal_cls()
{
    $mysql="SELECT * FROM `journal`";
    return $this->db_fetch_all($mysql);
}

function select_one_journal_cls($journal_id)
{
    $mysql="SELECT * FROM `journal`WHERE `journal_id`='$journal_id'";
    return $this->db_fetch_one($mysql);

}
function update_journal_cls($journal_id,$journal_title,$journal_price,$journal_desc,$journal_keywords)
{
    $mysql="UPDATE `journal` SET `journal_title`='$journal_title',`journal_price`='$journal_price',`journal_desc`='$journal_desc',`journal_keywords`='$journal_keywords' WHERE  `journal_id`='$journal_id'";
    return $this->db_query($mysql);
}

function delete_journal_cls($journal_id)
{
    $mysql="DELETE FROM `journal` WHERE `journal_id`='$journal_id'";
    return $this->db_query($mysql);
}

function search_journal_cls($journal)
{
    $mysql = "SELECT * FROM `journal` WHERE journal_title LIKE '%$journal%'";
    return $this->db_fetch_all($mysql);

  }

}

?>