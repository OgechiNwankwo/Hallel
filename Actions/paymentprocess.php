<?php
include_once (dirname(__FILE__)) . '/../Settings/core.php';
include_once (dirname(__FILE__)) . '/../Controller/order_controller.php';
include_once (dirname(__FILE__)) . '/../Controller/cart_controller.php';
include_once (dirname(__FILE__)) . '/../Controller/payment_controller.php';

$reference = $_GET['reference'];

if ($reference === "") {
    echo "<script>window.history.back</script>";
}


$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer sk_live_497a3a223893acf3ff8ecfd4dce1158b2fc9b088", //sk_live_497a3a223893acf3ff8ecfd4dce1158b2fc9b088
        // "Authorization: Bearer sk_test_6d4f5a1f22357a340de12247059b454ca6b39bdf", //sk_live_497a3a223893acf3ff8ecfd4dce1158b2fc9b088
        "Cache-Control: no-cache",
    ),
));


$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);

$decodedResponse = json_decode($response);


if (isset($decodedResponse->data->status) && $decodedResponse->data->status == 'success') {
    $customer_id = $_SESSION['cid'];
    $invoice_no = floor(mt_rand(100, 1000));
    $order_date = $decodedResponse->data->created_at;
    $current = $decodedResponse->data->currency;
    $amount = $decodedResponse->data->amount;
    $order_status = 'pending';
    $payment_date = $decodedResponse->data->paid_at;

    // strip T and Z from paystack date to add to database
    $text = $order_date;
    $replacements = [
        "T" => " ",
        "Z" => " ",
    ];
    $newDate = strtr($text, $replacements);

    // strip T and Z from paystack date to add to database
    $text2 = $payment_date;
    $replacements2 = [
        "T" => " ",
        "Z" => " ",
    ];
    $newpayment_date = strtr($text2, $replacements2);

    

    $add_order = insert_order_ctr($customer_id,$invoice_no,$order_date,$order_status);

    if ($add_order) {
        //get current item from orders
        $recent_order = get_last_order_ctr();
        $cart = select_all_cart_ctr($customer_id);
        foreach ($cart as $item) {
            $add_OrderDetails = add_orderdetails_ctr($recent_order['currentOrder'], $item['journal_id'], $item['quantity']);
        }

        $add_Payment = insert_payment_ctr($amount,$customer_id,$recent_order['currentOrder'],$current,$newpayment_date);
       

        if ($add_Payment) {
            $clearCart = clear_cart_ctr($customer_id);
            if ($clearCart) {
                header("Location: ../View/index.php");
            } else {
                echo "Cart Clearance Failed";
            }
        } else {
            echo "Payment Failed";
        }
    } else {
        echo "Order not Added";
    }
} else {
    echo "<script>window.location.href(../View/paymentFailed.php);</script>";
}