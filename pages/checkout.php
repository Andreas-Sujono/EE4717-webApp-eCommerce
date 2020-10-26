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
        <?php 
            include '../components/nav.php';
            include '../php/connect.php';
            include '../php/authorizedPage.php';
                   
            $uid = $_SESSION['custId'];
            $query = "SELECT * FROM CustomerDetails where custId=$uid";
            $customerDetails = mysqli_query($conn, $query);
            $customerDetails = $customerDetails->fetch_assoc();

            $query = "SELECT * FROM `Order` , `OrderItems`,`Product` WHERE `Order`.`orderId` = `OrderItems`.`orderId` and `OrderItems`.`productId` = `Product`.`productId` and custId=$uid and `status`=0";
            $result = mysqli_query($conn, $query);

        ?>
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
                                <?php
                                    $total=0;
                                    $orderId = 0;
                                    while($row = mysqli_fetch_assoc($result)){
                                        $total+=$row['price']*$row['quantity'];
                                        $orderId  = $row['orderId'];
                                        echo '
                                        <tr>
                                            <td class="product-col"> 
                                                <img src="'.$row['image'].'" alt="product"/>
                                                <span>'. $row['name'] .'<span>
                                            </td>
                                            <td>$'. $row['price'] .'</td>
                                            <td>'. $row['quantity'] .'</td>
                                            <td>$'. ($row['price']*$row['quantity']) .'</td>
                                        </tr>';
                                    }
                                
                                ?>
 
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4" class="total-price">Order Total: <span>$<?php echo $total; ?></span></td>
                                </tr>   
                            </tfoot>
                        </table>
                    </div>
                    
                </div>

                <div class="checkout-content content">
                    <div class="customer-details">
                        <h2>Customer Details</h2>
                        <form method="POST" action="../php/placeOrder.php">
                            <table class="customer-details-table">
                                <tr>
                                    <td class="label">Full Name</td>
                                    <td> <input type="text" placeholder="Your full name" name="fullName" value="<?php echo $customerDetails['fullName']; ?>"/> </td>
                                    <td class="label">Payment Method</td>
                                    <td><input type="radio" checked name="paymentMethod"/> Credit Card</td>
                                </tr>
                                <tr>
                                    <td class="label">Email</td>
                                    <td> <input type="email" placeholder="Your email address" name="email" value="<?php echo $customerDetails['email']; ?>"/> </td>
                                    <td class="label">Name on card</td>
                                    <td> <input type="text" placeholder="Your name on card" name="nameOnCard"/> </td>
                                </tr>
                                <tr>
                                    <td class="label">Phone Number</td>
                                    <td> <input type="text" placeholder="Your phone number" name="phoneNumber" value="<?php echo $customerDetails['phoneNumber']; ?>"/> </td>
                                    <td class="label">Credit card No.</td>
                                    <td> <input type="text" placeholder="Credit card number" name="creditCardNumber"/> </td>
                                </tr>
                                <tr>
                                    <td class="label">Address</td>
                                    <td> <input type="text" placeholder="Your address" name="address" value="<?php echo $customerDetails['address']; ?>"/> </td>
                                    <td class="label">Expires on</td>
                                    <td> <input type="text" placeholder="MM/YY" name="creditCardExpires"/> </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td class="label">CVV</td>
                                    <td> <input type="text" placeholder="CVV" name="cvv"/> </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td colspan="2">
                                        <div class="total-payment">
                                            <input type="hidden" name="totalAmount" value="<?php echo $total;?>"/>
                                            <input type="hidden" name="orderId" value="<?php echo $orderId;?>"/>
                                            <input type="hidden" name="custId" value="<?php echo $uid;?>"/>
                                            <div>Total Payment: <span>$750</span></div>
                                            <button class="place-order-btn">Place Order</button>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </form>

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
                                <button class="btn btn-outline-primary" style="margin:auto;display: block; margin-top: 12px;"> <a href="../pages/">Back to Homepage </a></button>
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

