<html>
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#success">
                            Launch payment successful
                        </button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#unsuccess">
                            Launch payment unsuccessful
                        </button>
                        <div class="modal fade" id="success" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content" style="width:75%;">
                                    
                                    <div class="modal-body">
                                        <h3 class="text-center">Payment successful</h3>
                                            <div class="text-center p-3">
                                                <img width="100" height="100" src="../images/successful.png" alt="">
                                            </div>
                                       
                                        <p class="text-center mr-auto ml-auto" style="width: 20em;">We have sent you the order confirmation to your email</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="unsuccess" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content" style="width:75%;" >
                                    
                                    <div class="modal-body">
                                        <h3 class="text-center">Payment unsuccessful</h3>
                                            <div class="text-center p-3">
                                                <img width="100" height="100" src="../images/cross.png" alt="">
                                            </div>
                                       
                                        <p class="text-center mr-auto ml-auto" style="width: 20em;">There's something wrong with the payment, please try again!</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Try Again</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php include '../components/footer.php' ?>
    </body>

</html>

