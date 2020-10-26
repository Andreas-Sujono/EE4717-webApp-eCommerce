<?php
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