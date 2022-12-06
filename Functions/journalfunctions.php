<?php
require("../Controller/journal_controller.php");
if(isset($_POST['submit'])){
    $result = search_journal_ctr($_POST['search']);
    return ;

}
?>
