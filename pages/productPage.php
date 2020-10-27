<html>
    <head>
        <title>Product Information</title>
        <link rel="stylesheet" href="../css/index.css"/>

        <link rel="stylesheet" href="../css/productPage.css"/>
        <link rel="stylesheet" href="../css/category.css"/>

        <link rel="stylesheet" href="../css/nav.css"/>
        <link rel="stylesheet" href="../css/footer.css"/>
        
        <script>
            function select(){
                document.getElementById('selected').style.display='block';
                document.getElementById('not-selected').style.display='none';
                document.getElementById("wishlist__text").innerHTML = "Added to wishlist"
            }   
            function unselect(){
                document.getElementById('selected').style.display='none';
                document.getElementById('not-selected').style.display='block';
                document.getElementById("wishlist__text").innerHTML = "Add to wishlist"
            }        
        </script>
    </head>

    <body>
    
        <?php 
            include("../php/cart_and_list.php"); 
            include('../components/nav.php');
            include("../php/connect.php");
            $query = "SELECT * FROM Product where productId='".$_GET['productId']."'";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            
            
        ?>
            <div class="container content">
                <div class="flex-row justify-content-between top-content" style="padding-bottom: 30px;">
                    <div class="product__image">
                        <img src="<?php echo $row['image']; ?>" alt="..." />
                    </div>
                    <div class="product__briefinfo">
                        <div class="product-name"><?php echo $row['name']; ?></div>
                             
                        <?php $rating = $row['rating']; include '../components/rating.php';?> 
                        
                        <div class="product-price"><?php echo "$".$row['price']; ?></div>
                        <div class="product-quantity">
                            <div class="flex-row" style="align-items: center;">

                                <label class="input-group-text" style="margin-right:5px">Quantity</label>
                                <input type="number" min="0" id="count" value="1" class="count" onkeyup="setLimit(this.value, this)" style="margin-right:5px"/>
                                <div class="upcount" id="upcount" onclick="increase()" style="margin-right:5px"><button>+</button></div>
                                <div class="downcount" id="downcount" onclick="decrease()" style="margin-right:5px"><button>-</button></div>
                            </div>
                        </div>
                        <div class="buttons flex-row">
                            <form method="post">
                                <input type="hidden" value="<?php echo $row['productId']; ?>" name="id" />
                                <input type="hidden" value="cart" name="type" />
                                <input type="hidden" value="1" name="quantity" id="qty" />
                                <input type="submit" class="btn btn-outline-primary" value="Add to cart" />
                            </form>
                            <form method="post">
                                <input type="hidden" value="<?php echo $row['productId']; ?>" name="id" />
                                <input type="hidden" value="BUY_NOW" name="type" />
                                <input type="hidden" value="1" name="quantity" id="qty" />
                                <input type="submit" class="btn btn-success btn-block" value="Buy Now" />
                            </form>
                        </div>
                        <form method="post">
                            <input type="hidden" value="<?php echo $row['productId']; ?>" name="id" />
                            <input type="hidden" value="list" name="type" />
                            <input type="submit" class="btn btn-outline-warning wishlist-button" value="Add to wishlist" />
                        </form>
                        
                        
                    </div>
                </div>
                <div class="information">
                    <div class="information__heading">Product Specifications</div>
                    <?php $prod = json_decode($row['specification']);?>
                    <table class="table">
                        <tbody>
                            <?php
                                foreach($prod as $key => $value)
                                {
                                    echo "
                                        <tr>
                                            <td>$key</td>
                                            <td>$value</td>
                                        </tr> ";
                                }
                            ?>
                            
                        </tbody>
                    </table>
                    <div class="information__heading">Product Descriptions</div>
                    <div class="information__description">
                        <?php echo nl2br($row['description']); ?>
                    </div>
                    
                </div>
                <?php $conn->close(); ?>
            </div>
            <script src="../js/index.js" ></script>
            <script>
                var result = '<?php echo($res); ?>'
                switch(result){
                    case "NOT_LOGGED_IN" : alert("Please login to continue");
                                            triggerModalById("login-modal");
                                            break;
                    case "ALREADY_ADDED" :  alert("Already added");
                                            break;
                    case "SUCCESS" :    alert("Added to wishlist");
                                        break;
                    case "UNSUCCESS" :   alert("Could not add");
                                        break;
                    case "CART_ADD" :   alert("Added to cart");
                                        break;                    
                    case "CART_UPDATE" : alert("Cart updated");
                                        break;
                }   
            </script>
        <?php include '../components/footer.php' ?>
    </body>

</html>

