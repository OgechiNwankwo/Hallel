<?php
session_start();


function Logout(){
    if(isset($_GET['logout'])){
        unset($_SESSION['Login']);
        session_destroy();
        header("location:../View/login.php");
    }
}

Logout()

?>