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

    //TEST - case if payment unsuccessful
    else if($custId == 2)
        $success = 'false';

    else{
        //handle payment by third party 
        //assume success
        $sql = "update `Order` set totalAmount = $totalAmount, purchasedDate =now(), status = 1 where orderId = ".$orderId;
        mysqli_query($conn, $sql);
    
        if(mysqli_affected_rows($conn)>0){
            $success = 'true';

            // $sql = "SELECT * from `Order` WHERE orderId = ".$orderId;
            // $result = mysqli_query($conn, $sql);
            // $orderDetail = mysqli_fetch_assoc($result);

            // $sql = "SELECT * from `OrderItems` WHERE orderId = ".$orderId;
            // $result = mysqli_query($conn, $sql);
            // $orderItems = mysqli_fetch_assoc($result);

            // $orderItemsRow = '';
            // $total=0;
            // while($row = mysqli_fetch_assoc($orderItems)){
            //     $total+=$row['price']*$row['quantity'];
            //     $orderItemsRow .= '
            //     <tr>
            //         <td class="product-col"> 
            //             <span>'. $row['name'] .'<span>
            //         </td>
            //         <td>$'. $row['price'] .'</td>
            //         <td>'. $row['quantity'] .'</td>
            //         <td>$'. ($row['price']*$row['quantity']) .'</td>
            //     </tr>';
            // } 

            //send email
            $to      = 'f32ee@localhost';
            $subject = 'Your Order is successful';
            $message = 'Your order is successfull, and your order will be shipped soon';
            // set content-type to send HTML email
            $headers = 'From: f32ee@localhost' . "\r\n" .
                'Reply-To: f32ee@localhost' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

            mail($to, $subject, $message, $headers,'-ff32ee@localhost');
        }
        else{
            $success = 'false';
        }
    }

    header("Location:../pages/checkout.php?success=".$success);
    
?>
