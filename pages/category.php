<html>
    <?php 
        $productCategory = $_GET['productCategory']; 
        if(!$productCategory )
            $productCategory = 'laptop' //default value
    ?>
    <head>
        <title>Category - <?php echo ucfirst($productCategory); ?></title>
        <link rel="stylesheet" href="../css/index.css"/>
        <link rel="stylesheet" href="../css/nav.css"/>
        <link rel="stylesheet" href="../css/footer.css"/>
        <link rel="stylesheet" href="../css/category.css"/>
    </head>

    <body>
        
        <?php include '../components/nav.php' ?>
        
            <div class="category-page page">
                <div class="title-container">
                    <h1><?php echo ucfirst($productCategory); ?></h1>
                </div>
                <div class="category-content content">

                    <?php 
                        include '../php/connect.php';
                        $sql = "SELECT * FROM `Product` WHERE category='$productCategory';";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo '
                                <div class="product-card">
                                    <a href="../pages/productPage.php?productId='. $row['productId']. '" class="product-link">
                                        <img src='. $row['image'] .'/>
                                    </a>
                                    <div class="product-details">
                                        <a href="../pages/productPage.php?productId='. $row['productId']. '" class="product-link">
                                            <div class="product-name">'. $row['name'] .'</div>
                                        </a>
                                        <div class="product-rating">'. $row['rating'] .'</div>
                                        <div class="product-desc">
                                        '. substr($row['description'], 0, 150) .'...
                                        </div>
                                    </div>
                                    
                                    <div class="product-action">
                                        <div class="product-price">$'. $row['price'] .'</div>
                                        <button>Add to cart</button>
                                        <button class="wishlist-button">Add to wishlist</button>
                                    </div>
                                </div>
                                <hr/>';
                            }
                        }
                    ?>

                </div>
            </div>
        <?php include '../components/footer.php' ?>
    </body>

</html>

