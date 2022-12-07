<?php

include_once (dirname(__FILE__)) . '/../Settings/core.php';
include_once (dirname(__FILE__)) . '/../Controller/cart_controller.php';


// manage quantity
if (isset($_SESSION['cid'])) {
    $user_id = $_SESSION['cid'];
    //Decrease the quantity in the cart
    if (isset($_GET['decID'])) {
        $p_id = $_GET['decID'];
        $cartItem = select_one_cart_ctr($p_id, $user_id);
      
        foreach ($cartItem as $item) {
            $oldQty = $item['quantity'];
            $newQty = $oldQty - 1;
            if ($oldQty != 0 && $newQty != 0) {
                $result = update_quant_ctr($newQty, $p_id, $user_id);
               
                echo "<script>document.location.href='../View/cart.php';</script>";
            } else {
                echo "<script>document.location.href='../View/cart.php';;</script>";
            }
        }
    }

    //Increase the quantity in the cart
    if (isset($_GET['incID'])) {
        $p_id = $_GET['incID'];
        $cartItem = select_one_cart_ctr($p_id, $user_id);
      
        foreach ($cartItem as $item) {
            $oldQty = $item['quantity'];
            $newQty = $oldQty + 1;  
            $result = update_quant_ctr($newQty, $p_id, $user_id);
            if($result){
                echo "<script>document.location.href='../View/cart.php';</script>";
            }
            
        }
    }
} 

// else { // GUEST
//     $ipAddress = check_ip();
//     //Decrease the quantity in the cart
//     if (isset($_GET['decID'])) {
//         $p_id = $_GET['decID'];
//         $cartItem = select_one_gst_controller($p_id, $ipAddress);
       
//         foreach ($cartItem as $item) {
//             $oldQty = $item['quantity'];
//             $newQty = $oldQty - 1;
//             if ($oldQty != 0 && $newQty != 0) {
//                 if (($stock_count['stock']) >= 0) {
//                     $remain_stock = $stock_count['stock'] + 1;
                    
//                     $result = update_cart_gst_controller($newQty, $p_id, $ipAddress);
//                     echo "<script>document.location.href='../view/cart.php';</script>";
//                 }

//                 echo "<script>document.location.href='../view/cart.php';</script>";
//             } else {
//                 echo "<script>document.location.href='../view/cart.php';;</script>";
//             }
//         }
//     }



// remove from cart

if (isset($_GET['deleteID'])) {

    $pid = $_GET['deleteID'];
    $ipadd = check_ip();

    if (isset($_SESSION['cid'])) {
        $cid = $_SESSION['cid'];
        $delete = remove_from_cart_ctr($pid, $cid);
        if ($delete) {
            // echo "<script type='text/javascript'> alert('Successfully deleted from Cart');
            // document.location.href='../view/cart.php';
            // </script>";
            header("Location: ../View/cart.php?message=success");
        } else {
            echo "something went wrong";
        }
    } else {
        $delete = not_logged_remove_from_cart_ctr($pid, $ipadd);
        if ($delete) {
            // echo "<script type='text/javascript'> alert('Successfully deleted from Cart');
            // document.location.href='../view/cart.php';
            // </script>";
            header("Location: ../View/cart.php?message=success");
        } else {
            echo "<script type='text/javascript'> alert('Delete Failed');              
            document.location.href='../view/cart.php';
        </script>";
        }
    }
}


function check_ip(){
    $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];

    if(isset($_SESSION['ip'])){
        return $_SESSION['ip'];
    }
}