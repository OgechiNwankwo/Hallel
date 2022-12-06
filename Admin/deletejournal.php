<?php 
require_once("../Controller/journal_controller.php");

$journal_id=$_GET['id'];
$delete=delete_journal_ctr($journal_id);
if($delete){
    echo "Journal Deleted succeesfull";
   header('Location:../View/adminindex.php');
}
else{
    echo "Could not delete journal item";
    header('Location:../View/adminindex.php');
}
?>