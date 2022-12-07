<?php
require('../Settings/core.php');
require('../Controller/cart_controller.php');
require('../Controller/customer_controller.php');

$cart_items = select_all_cart_ctr($_SESSION['cid']);
$total_cart_item = count_cart_lg_ctr($_SESSION['cid']);
$total_price = total_checkout_lg_ctr($_SESSION['cid']);
$userData =  select_customer_id_ctr($_SESSION['cid']);

?>

<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hallel.inc &mdash; </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="gettemplates.co" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="./css/cart.css">
</head>

<body>
    <div class="card">
        <div class="row">
            <div class="col-md-8 cart">
                <div class="title">
                    <div class="row">
                        <div class="col">
                            <h4><b>Shopping Cart</b></h4>
                        </div>
                        <div class="col align-self-center text-right text-muted"><?php echo $total_cart_item['total'] ?> items</div>
                    </div>
                </div>

                <?php
                foreach ($cart_items as $item) {

                ?>
                    <div class="row border-top border-bottom">
                        <div class="row main align-items-center">
                            <div class="col-2"><img class="img-fluid" src="<?php echo $item['journal_image'] ?>"></div>
                            <div class="col">
                                <div class="row text-muted"></div>
                                <div class="row"><?php echo $item['journal_title'] ?></div>
                            </div>
                            <div class="col">
                                <a href="../Actions/quantitychange.php?decID=<?php echo $item['journal_id'] ?>">-</a><a href="#" class="border"><?php echo $item['quantity'] ?></a><a href="../Actions/quantitychange.php?incID=<?php echo $item['journal_id'] ?>">+</a>
                            </div>
                            <div class="col"><span>&#8373;</span> <?php echo $item['journal_price'] *  $item['quantity'] ?> <a href="../Actions/quantitychange.php?deleteID=<?php echo $item['journal_id'] ?>"><span class="close">&#10005;</span></a></div>
                        </div>
                    </div>
                <?php
                }
                ?>

                <div class="back-to-shop"><a href="index.php">&leftarrow;</a><span class="text-muted">Back to Hallel</span></div>
            </div>
            <div class="col-md-4 summary">
                <div>
                    <h5><b>Summary</b></h5>
                </div>
                <hr>
                <div class="row">
                    <div class="col" style="padding-left:0;">ITEMS <?php echo $total_cart_item['total'] ?></div>
                    <!-- <div class="col text-right"> <span>&#8373;</span> 132.00</div> -->
                </div>
                <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                    <div class="col">TOTAL PRICE</div>
                    <div class="col text-right"> <span>&#8373;</span><?php echo $total_price['total'] ?></div>
                </div>
                <!-- <button class="btn">Pay</button> -->
                <div class="btn">
                    <button type="button" id="pay" class="pay" onclick="payWithPaystack()" value="<?php echo $total_price['total']; ?>">Pay </button>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="row">
            <div class="col-md-6 cart">
                <div class="title">
                    <div class="row">
                        <div class="col">
                            <h4><b>Customer Details</b></h4>
                        </div>
                    </div>
                </div>

                <div class="row border-top border-bottom">
                    <div class="form-control">
                        <input type="text" value="<?php echo $userData['customer_name'] ?>" id="customer_name" />
                    </div>
                    <div class="form-control">
                        <input type="email" value="<?php echo $userData['customer_email'] ?>" id="customer_email" />
                    </div>
                    <div class="form-control">
                        <input type="text" value="<?php echo $userData['customer_contact'] ?>" id="customer_contact" />
                    </div>
                    <div class="form-control">
                        <input type="hidden" value="<?php echo $userData['customer_id'] ?>" id="customer_id" />
                    </div>
                </div>

            </div>
        </div>
    </div>



    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>
    <?php if (isset($_GET['message'])) : ?>

        <div class='alert' data-id="<?php $_GET['message']; ?>"></div>

    <?php endif; ?>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- countTo -->
    <script src="js/jquery.countTo.js"></script>
    <!-- Flexslider -->
    <script src="js/jquery.flexslider-min.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>

    <!-- PAYSTACK INLINE SCRIPT -->
    <script src="https://js.paystack.co/v1/inline.js"></script>

    <script type="text/javascript">
        // const paymentForm = document.getElementById('paymentForm');
        // paymentForm.addEventListener("submit", payWithPaystack, false);

        // PAYMENT FUNCTION
        function payWithPaystack() {

            let handler = PaystackPop.setup({
                key: 'pk_live_bd5356607a881f3a0d6843b75d3172b74b9675cd',
                //key: 'pk_live_bd5356607a881f3a0d6843b75d3172b74b9675cd', // Replace with your public key
                email: document.getElementById("customer_email").value,
                phone: document.getElementById("customer_contact").value,
                amount: document.getElementById("pay").value * 100,
                currency: 'GHS',
                onClose: function() {

                    // alert('Transaction Cancelled.');

                    Swal.fire({
                        icon: 'error',
                        title: 'Transaction Cancelled.',

                    })
                },
                callback: function(response) {

                    Swal.fire({
                        icon: 'success',
                        title: 'Transaction successful',

                    })
                    window.location = "../Actions/paymentprocess.php?reference=" + response.reference;

                }
            });
            handler.openIframe();
        }
    </script>

    <script>
        const message = $(".alert").data("id")

        if (message) {
            Swal.fire({
                icon: 'success',
                title: 'Cart item deleted.',
                text: 'Your journal has been deleted successfully!',
            })
        }
        console.log(message)
    </script>

</body>

</html>