<?php
require_once("../Controller/journal_controller.php");
if (isset($_POST['submit'])) {
    $tm  = md5(time());

    $journal_title = $_POST['journal_title'];
    $journal_price = $_POST['journal_price'];
    $journal_desc = $_POST["journal_desc"];

    $journal_keywords = $_POST['journal_keywords'];

    $journal_image = $_FILES['journal_image']['name'];

    $dst = "../View/images/journals/" . $tm.$journal_image;


    $move = move_uploaded_file($_FILES['journal_image']['tmp_name'], $dst);

    if ($move) {
        $result = create_journal_ctr($journal_title, $journal_price, $journal_desc, $dst, $journal_keywords);
        if ($result) {
            echo "success";
            header("location:../View/adminindex.php?message=success");
        } else {
            echo "failed";
            header("location:../View/journalform.php?warning=error");
        }
    }else{
        echo "File not moved";
    }
}
