<html>
    <?php 
        $productCategory = $_GET['productCategory']; 
        if(!$productCategory )
            $productCategory = 'laptop' //default value
    ?>
    <head>
        <title>Category <?php echo ucfirst($productCategory); ?></title>
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
                    <div class="product-card">
                        <img src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE3oYjc?ver=e1aa"/>
                        <div class="product-details">
                            <div class="product-name">Product Name 1</div>
                            <div class="product-rating">4.0</div>
                            <div class="product-desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.....
                            </div>
                        </div>
                        <div class="product-action">
                            <div class="product-price">$250</div>
                            <button>Add to cart</button>
                            <button class="wishlist-button">Add to wishlist</button>
                        </div>
                    </div>
                    <hr/>
                    <div class="product-card">
                        <img src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE3oYjc?ver=e1aa"/>
                        <div class="product-details">
                            <div class="product-name">Product Name 1</div>
                            <div class="product-rating">4.0</div>
                            <div class="product-desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.....
                            </div>
                        </div>
                        <div class="product-action">
                            <div class="product-price">$250</div>
                            <button>Add to cart</button>
                            <button class="wishlist-button">Add to wishlist</button>
                        </div>
                    </div>
                    <hr/>
                    <div class="product-card">
                        <img src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE3oYjc?ver=e1aa"/>
                        <div class="product-details">
                            <div class="product-name">Product Name 1</div>
                            <div class="product-rating">4.0</div>
                            <div class="product-desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.....
                            </div>
                        </div>
                        <div class="product-action">
                            <div class="product-price">$250</div>
                            <button>Add to cart</button>
                            <button class="wishlist-button">Add to wishlist</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php include '../components/footer.php' ?>
    </body>

</html>

