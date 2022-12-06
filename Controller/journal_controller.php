<?php

require_once("../Classes/journal_class.php");

//sanitize data


//--INSERT--//
function create_journal_ctr($journal_title,$journal_price,$journal_desc,$journal_image,$journal_keywords)
{
    $newjournal_added= new journal_class();

    return $newjournal_added->create_journal_cls($journal_title,$journal_price,$journal_desc,$journal_image,$journal_keywords);
}

function select_journal_ctr(){
    $select_journal= new journal_class();
    return $select_journal->select_journal_cls();
}
function select_one_journal_ctr($journal_id)
{
    $selectone_journal= new journal_class();
    return $selectone_journal->select_one_journal_cls($journal_id);
}


function update_journal_ctr($journal_id,$journal_title,$journal_price,$journal_desc,$journal_keywords)
{
    $update_journal= new journal_class();
    return $update_journal->update_journal_cls($journal_id,$journal_title,$journal_price,$journal_desc,$journal_keywords);

}

function delete_journal_ctr($journal_id)
{
   $delete_journal=new journal_class();
   return $delete_journal->delete_journal_cls($journal_id);
}

function search_journal_ctr($journal)
{
   $search_journal=new journal_class();
   return $search_journal->search_journal_cls($journal);
  }

?>