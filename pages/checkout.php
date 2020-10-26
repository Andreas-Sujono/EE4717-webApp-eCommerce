<html>
    <?php 
        $success=0;
        if(isset($_GET['success']) && !empty($_GET['success']))
            $success = $_GET['success']; 

    ?>
    <head>
        <title>Checkout</title>
        <link rel="stylesheet" href="../css/checkout.css"/>
        <link rel="stylesheet" href="../css/index.css"/>
        <link rel="stylesheet" href="../css/nav.css"/>
        <link rel="stylesheet" href="../css/footer.css"/>
        
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
                        <!-- The Modal -->
                        <div id="success" class="modal">
                            <span></span>
                            <div class="modal-content">
                                <div class="modal-header-success">
                                    <span class="close" id="close">&times;</span>
                                    <h2>Payment Successful !!</h2>
                                </div>
                                <div class="modal-body">
                                    <img width="100" height="100" src="../images/successful.png" alt="">
                                </div>
                                <div class="modal-footer-success">
                                    <p>We have sent you the order confirmation to your email</p>
                                </div>
                            </div>
                        </div>
                        <div id="unsuccess" class="modal">
                            <span></span>
                            <div class="modal-content">
                                <div class="modal-header-unsuccess">
                                    <span class="close" id="close">&times;</span>
                                    <h2>Payment Unsuccessful !!</h2>
                                </div>
                                <div class="modal-body">
                                    <img width="100" height="100" src="../images/cross.png" alt="">
                                </div>
                                <div class="modal-footer-unsuccess">
                                    <p>There's something wrong with the payment, please try again!</p>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
            <script>
                var check='<?php echo ($success); ?>'
                // alert(typeof(check))
           
                var modal1 = document.getElementById("success");
                var modal2 = document.getElementById("unsuccess");
                
                var span = document.getElementById("close");

                
                if (check === 'true')
                    modal1.style.display = "block";
                if (check === 'false')
                    modal2.style.display = "block";
                
                span.onclick = function() {
                    modal1.style.display = "none";
                    modal2.style.display = "none";
                }

        
                window.onclick = function(event) {
                    if (event.target == modal1 || event.target == modal2) {
                        modal1.style.display = "none";
                        modal2.style.display = "none";
                    }
                }

                
            </script>
        <?php include '../components/footer.php' ?>
    </body>

</html>

