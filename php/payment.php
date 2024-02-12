<?php
require "../connection.php";
if (isset($_GET["price"])) {

    $price = $_GET["price"];



?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Payment Integartion (Stripe)</title>
        <link rel="icon" href="" />
        <link rel="stylesheet" href="style.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>

    <body>
        <button type="button" onclick="goback()" class="back">Go Back</button>
        <div class="row">
            <div class="col-md-6 ">
                <div class="form-container">
                    <form autocomplete="off" action="payment-charge.php?payment=<?php echo $price;?>" method="POST">
                        <div>
                            <div>

                                <label>Portal Accesss Payment</label>
                                <label>
                                    Rs.<?php echo $price;?>.00
                                </label>
                            </div>

                            <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="pk_test_51LOXSREsnbQjivlPiI3D9zIUK25D8dxjJWi34M1DTVuXyf8jM4QbjnOepZZrunrmKO7cLSVYPPTUT72OQY5FpJhF00ihVudTSh" data-amount=<?php echo $_GET["price"] * 100 ?> data-name="Payment" data-description=" " data-currency="LKR" data-locale="auto">
                            </script>
                    </form>
                </div>
            </div>

        </div>

    <?php
}
    ?>
    <script>
        function goback() {
            window.history.go(-1);
        }

        $('#ph').on('keypress', function() {
            var text = $(this).val().length;
            if (text > 9) {
                return false;
            } else {
                $('#ph').text($(this).val());
            }

        });
    </script>
    </body>

    </html>