<?php
require_once("../Controller/journal_controller.php");
if(isset($_POST['submit'])){

    $journal_title = $_POST['journal_title'];
    $journal_price = $_POST['journal_price'];
    $journal_desc = $_POST["journal_desc"];
   // $journal_image=$_POST('journal_image');
   $journal_keywords = $_POST['journal_keywords'];
   echo $journal_price;
   //exit();

    $root_dir = ".\\..\\images\\journals\\";
    $upload_root_dir = "../images/journals/";
    $file=$_FILES['journal_image'];
    $journal_image= $_FILES['journal_image']['name'];
    $file_dest = $root_dir . basename($file["name"]);
    $upload_file_dest = $upload_root_dir . basename($file["name"]); 
    $dst = "../View/images/journals/".$journal_image;
    $file_type = strtolower(pathinfo($file_dest, PATHINFO_EXTENSION));

    
      $move = move_uploaded_file($file["tmp_name"],$dst);

        if ($move) {
            $result = create_journal_ctr($journal_title,$journal_price,$journal_desc,$dst,$journal_keywords);
            if($result){
                echo "success";
                header("location:../View/adminindex.php?message=success");
            }else{
                echo "failed";
                header("location:../View/journalform.php?warning=error");
            }

      }
}
?>