<?php
    // include '../php/connect.php';

    // session_start();

    // $custId = $_SESSION['custId'];
    // $productId = 10;  //for testing
    // $quantity = 5;//for testing

    // //check if orderId exists or not
    // $query = "SELECT price from Product WHERE productId='$productId'";
    // $productDetails = $conn->query($query);
    // $productDetails = $productDetails->fetch_assoc();
    // $productPrice = $productDetails['price'];

    // $query = "SELECT * from Order WHERE custId='$custId' AND status=0";
    // $order = $conn->query($query);
    // $orderId = -1;
    // if ($order->num_rows == 0 ){
    //     //create a new one
    //     $query = "INSERT INTO Order(status, custId, purchasedDate, totalAmount)
    //     VALUES ( 0, '$custId', null, 'test' , '$quantity * $productPrice' )";
    //     $newOrder = $conn->query($query);
    //     $orderId = $conn->insert_id;
    // }
    // else{
    //     $order = $order->fetch_assoc();
    //     $orderId = $order['orderId'];
    //     $totalAmount = $order['totalAmount'];
    //     //update total amount
    //     $query = "UPDATE Order SET totalAmount='$totalAmount + $quantity * $productPrice' WHERE id='$orderId'";
    //     $newOrder = $conn->query($query);
    // }

    // //insert new order item
    // $query = "INSERT INTO OrderItems(orderId, productId, quantity)
    // VALUES ( '$orderId', '$productId', '$quantity')";
    // $newOrder = $conn->query($query);

    // $conn->close();

    // if($_GET['type']="BUY_NOW"){
    //     header('Location: ../pages/shoppingCart.php');
    // }
    $sql = "SELECT quantity, `Order`.`orderId`, productId FROM `Order` , `OrderItems` WHERE `Order`.`orderId` = `OrderItems`.`orderId` and custId=$uid and `status`=0";
    $result = mysqli_query($conn, $sql);
    $quantity = !isset($_POST['quantity']) ? 1 : $_POST['quantity'];

    if(mysqli_num_rows($result)>0) {
        $row = mysqli_fetch_assoc($result);
        $sql = "update OrderItems set quantity = quantity+$quantity where orderId = ".$row['orderId']." and productId = $id";
        mysqli_query($conn, $sql);
        if(mysqli_affected_rows($conn)>0)
            $res = "CART_UPDATE";
        else{   
            $sql = "insert into OrderItems (orderId, productId, quantity) values (".$row['orderId'].", $id, $quantity)";
            mysqli_query($conn, $sql);
            $res = "CART_ADD";
        }
    } else {
        $sql = "insert into `Order` (status,custId) values (0, $uid);";
        $sql .= "insert into OrderItems (orderId, productId, quantity) values (LAST_INSERT_ID(), $id, $quantity)";
        mysqli_multi_query($conn, $sql);
        $res = "CART_ADD";
    }
    mysqli_close($conn);
?>