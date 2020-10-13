<html>
    <?php 
        $success=0;
        if(isset($_GET['app']) && !empty($_GET['success']))
            $success = $_GET['success']; 

    ?>
    <head>
        <title>Checkout</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/index.css"/>
        <link rel="stylesheet" href="../css/nav.css"/>
        <link rel="stylesheet" href="../css/footer.css"/>
        <link rel="stylesheet" href="../css/checkout.css"/>
    </head>

    <body>
        <?php include '../components/nav.php' ?>
            <div class="checkout-page page">
                <div class="title-container">
                    <h1>Checkout</h1>
                </div>
                <div class="checkout-content content">
                    <div class="order-summary">
                        <h2>Order summary</h2>
                        <table class="order-summary-table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Unit Price</th>
                                    <th>Amount</th>
                                    <th>Subtotal Price</th>
                                </tr>   
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-col"> 
                                        <img src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE3oYjc?ver=e1aa" alt="product"/>
                                        <span>Asus Vivobook<span>
                                    </td>
                                    <td>$250</td>
                                    <td>1</td>
                                    <td>$250</td>
                                </tr>   
                                <tr>
                                    <td class="product-col"> 
                                        <img src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE3oYjc?ver=e1aa" alt="product"/>
                                        <span>Asus Vivobook<span>
                                    </td>
                                    <td>$250</td>
                                    <td>1</td>
                                    <td>$250</td>
                                </tr>     
                                <tr>
                                    <td class="product-col"> 
                                        <img src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE3oYjc?ver=e1aa" alt="product"/>
                                        <span>Asus Vivobook<span>
                                    </td>
                                    <td>$250</td>
                                    <td>1</td>
                                    <td>$250</td>
                                </tr>   
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4" class="total-price">Order Total: <span>$250</span></td>
                                </tr>   
                            </tfoot>
                        </table>
                    </div>
                    
                </div>

                <div class="checkout-content content">
                    <div class="customer-details">
                        <h2>Customer Details</h2>
                        <table class="customer-details-table">
                            <tr>
                                <td class="label">Full Name</td>
                                <td> <input type="text" placeholder="Your full name"/> </td>
                                <td class="label">Payment Method</td>
                                <td><input type="radio" checked/> Credit Card</td>
                            </tr>
                            <tr>
                                <td class="label">Email</td>
                                <td> <input type="email" placeholder="Your email address"/> </td>
                                <td class="label">Name on card</td>
                                <td> <input type="text" placeholder="Your name on card"/> </td>
                            </tr>
                            <tr>
                                <td class="label">Phone Number</td>
                                <td> <input type="text" placeholder="Your phone number"/> </td>
                                <td class="label">Credit card No.</td>
                                <td> <input type="text" placeholder="Your credit card number"/> </td>
                            </tr>
                            <tr>
                                <td class="label">Address</td>
                                <td> <input type="text" placeholder="Your address"/> </td>
                                <td class="label">Expires on</td>
                                <td> <input type="text" placeholder="Your credit card expires on"/> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td class="label">CVV</td>
                                <td> <input type="text" placeholder="Your credit card CVV"/> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td colspan="2">
                                    <div class="total-payment">
                                        <div>Total Payment: <span>$750</span></div>
                                        <button class="place-order-btn">Place Order</button>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <button type="button" class="btn btn-primary" data-toggle="modal" id="success">
                            Launch payment successful
                        </button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" id="unsuccess">
                            Launch payment unsuccessful
                        </button>
                        
                        
                    </div>
                </div>
            </div>
            <script>
                var check=<?php echo $success ?>
                alert(check)
                // Get the modal
                var modal = document.getElementById("success");

                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];

                // When the user clicks the button, open the modal 
                btn.onclick = function() {
                modal.style.display = "block";
                }

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                modal.style.display = "none";
                }

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
                }
            </script>
        <?php include '../components/footer.php' ?>
    </body>

</html>

