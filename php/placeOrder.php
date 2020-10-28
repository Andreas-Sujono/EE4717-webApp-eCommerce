<?php
    include("../php/connect.php");

    $fullName = $_POST['fullName'];
    $paymentMethod = $_POST["paymentMethod"];
    $email = $_POST["email"];
    $nameOnCard = $_POST["nameOnCard"];
    $phoneNumber = $_POST["phoneNumber"];
    $creditCardNumber = $_POST["creditCardNumber"];
    $address = $_POST["address"];
    $creditCardExpires = $_POST["creditCardExpires"];
    $cvv = $_POST["cvv"];
    $totalAmount = $_POST["totalAmount"];
    $orderId = $_POST["orderId"];
    $custId = $_POST["custId"];

    $sql = "update CustomerDetails set fullName='$fullName', email='$email', phoneNumber='$phoneNumber', address='$address' where custId = '$custId'";
    mysqli_query($conn, $sql);
    if(mysqli_affected_rows($conn)<=0){
        $success = 'false';
    }
    else{
        //handle payment by third party 
        //assume success
        $sql = "update `Order` set totalAmount = $totalAmount, purchasedDate =now(), status = 1 where orderId = ".$orderId;
        mysqli_query($conn, $sql);
    
        if(mysqli_affected_rows($conn)>0){
            $success = 'true';

            $sql = "SELECT * from `Order` WHERE orderId = ".$orderId;
            $result = mysqli_query($conn, $sql);
            $orderDetail = mysqli_fetch_assoc($result);

            $sql = "SELECT * from `OrderItems` WHERE orderId = ".$orderId;
            $result = mysqli_query($conn, $sql);
            $orderItems = mysqli_fetch_assoc($result);

            $orderItemsRow = '';
            $total=0;
            while($row = mysqli_fetch_assoc($orderItems)){
                $total+=$row['price']*$row['quantity'];
                $orderItemsRow .= '
                <tr>
                    <td class="product-col"> 
                        <span>'. $row['name'] .'<span>
                    </td>
                    <td>$'. $row['price'] .'</td>
                    <td>'. $row['quantity'] .'</td>
                    <td>$'. ($row['price']*$row['quantity']) .'</td>
                </tr>';
            } 

            //send email
            $to      = 'f32ee@localhost';
            $subject = 'Your Order is successful';
            $message = '
                <html>
                    <head>Order is successful</head>
                    <body>
                        <h1> Your order is successful </h1>

                        <table class="order-summary-table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Unit Price</th>
                                    <th>Amount</th>
                                    <th>Subtotal Price</th>
                                </tr>   
                            </thead>
                            <tbody>' . $orderItemsRow . '</tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4" class="total-price">Order Total: <span>'. $total .'</span></td>
                                </tr>   
                            </tfoot>
                        </table>

                    </body>
                </html>
            ';
            // set content-type to send HTML email
            $headers = 'From: f32ee@localhost' . "\r\n" .
                'Reply-To: f32ee@localhost' . "\r\n" .
                'X-Mailer: PHP/' . phpversion() . "\r\n" .
                "MIME-Version: 1.0" . "\r\n".
                "Content-type:text/html;charset=UTF-8";

            mail($to, $subject, $message, $headers,'-ff32ee@localhost');
        }
        else{
            $success = 'false';
        }

        //TEST - case if payment unsuccessful
        if($custId == 2)
            $success = 'false';
    }

    header("Location:../pages/checkout.php?success=".$success);
    
?>