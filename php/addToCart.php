<?php
    include '../php/connect.php';

    session_start();

    $custId = $_SESSION['custId'];
    $productId = 10;  //for testing
    $quantity = 5;//for testing

    //check if orderId exists or not
    $query = "SELECT price from Product WHERE productId='$productId'";
    $productDetails = $conn->query($query);
    $productDetails = $productDetails->fetch_assoc();
    $productPrice = $productDetails['price'];

    $query = "SELECT * from Order WHERE custId='$custId' AND status=0";
    $order = $conn->query($query);
    $orderId = -1;
    if ($order->num_rows == 0 ){
        //create a new one
        $query = "INSERT INTO Order(status, custId, purchasedDate, totalAmount)
        VALUES ( 0, '$custId', null, 'test' , '$quantity * $productPrice' )";
        $newOrder = $conn->query($query);
        $orderId = $conn->insert_id;
    }
    else{
        $order = $order->fetch_assoc();
        $orderId = $order['orderId'];
        $totalAmount = $order['totalAmount'];
        //update total amount
        $query = "UPDATE Order SET totalAmount='$totalAmount + $quantity * $productPrice' WHERE id='$orderId'";
        $newOrder = $conn->query($query);
    }

    //insert new order item
    $query = "INSERT INTO OrderItems(orderId, productId, quantity)
    VALUES ( '$orderId', '$productId', '$quantity')";
    $newOrder = $conn->query($query);

    $conn->close();

    if($_GET['type']="BUY_NOW"){
        header('Location: ../pages/shoppingCart.php');
    }
?>