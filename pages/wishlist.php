<html>
    
    <head>
        <title>Wishlist</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/index.css"/>
        <link rel="stylesheet" href="../css/nav.css"/>
        <link rel="stylesheet" href="../css/footer.css"/>
        <link rel="stylesheet" href="../css/category.css"/>
    </head>

    <body>      
        <?php include '../components/nav.php' ?>
            <div class="category-page page">
                <div class="title-container">
                    <h1>Your Wishlist</h1>
                </div>
                <div class="category-content content">
                    <div class="product-card">
                        <a href="../pages/productPage.php" class="product-link">
                            <img src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE3oYjc?ver=e1aa"/>
                        </a>
                        <div class="product-details">
                            <a href="../pages/productPage.php" class="product-link">
                                <div class="product-name">Product Name 1</div>
                            </a>
                            <div class="product-rating">4.0</div>
                            <div class="product-price">$250</div>
                        </div>
                        <button type="button" class="btn btn-danger">Remove Item</button>
                    </div>
                    <hr/>
                    <div class="product-card">
                        <a href="../pages/productPage.php" class="product-link">
                            <img src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE3oYjc?ver=e1aa"/>
                        </a>
                        <div class="product-details">
                            <a href="../pages/productPage.php" class="product-link">
                                <div class="product-name">Product Name 1</div>
                            </a>
                            <div class="product-rating">4.0</div>
                            <div class="product-price">$250</div>
                        </div>
                        <button type="button" class="btn btn-danger">Remove Item</button>
                    </div>
                    <hr/>
                    <div class="product-card">
                        <a href="../pages/productPage.php" class="product-link">
                            <img src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE3oYjc?ver=e1aa"/>
                        </a>
                        <div class="product-details">
                            <a href="../pages/productPage.php" class="product-link">
                                <div class="product-name">Product Name 1</div>
                            </a>
                            <div class="product-rating">4.0</div>
                            <div class="product-price">$250</div>
                        </div>
                        <button type="button" class="btn btn-danger">Remove Item</button>
                    </div>
                    
                    
                </div>
            </div>
        <?php include '../components/footer.php' ?>
    </body>

</html>

