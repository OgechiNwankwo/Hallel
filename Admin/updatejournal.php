<?php
require_once("../Controller/journal_controller.php");
if(isset($_POST['submit'])){

    $journal_title = $_POST['journal_title'];
    $journal_price = $_POST['journal_price'];
    $journal_desc = $_POST["journal_desc"];
     $journal_keywords = $_POST['journal_keywords'];
     $journal_id = $_POST['journal_id'];

     $update=update_journal_ctr($journal_id,$journal_title,$journal_price,$journal_desc,$journal_keywords);
     if($update){
        echo "success";
        header("location:../View/adminindex.php?message2=success");
    }else{
        echo "failed";
        header("location:../View/updatejournal.php?warning=error");
    }


        
}
?>