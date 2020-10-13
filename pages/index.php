<html>
    <head>
        <title>Shopping website</title>
        
        <link rel="stylesheet" href="../css/index.css"/>
        <link rel="stylesheet" href="../css/nav.css"/>
        <link rel="stylesheet" href="../css/footer.css"/>
        <link rel="stylesheet" href="../css/category.css"/>
    </head>

    <body>
        <?php include '../components/nav.php' ?>
        <div class="container">

            <div class="slideshow-container">

                <div class="mySlides fade">
                <img src="../images/new-ce-exclusive-desktop.webp" style="width:100%">
                <div class="text">Caption Text</div>
                </div>

                <div class="mySlides fade">

                <img src="../images/new-ncl-note20-banner-desktop.webp" style="width:100%">
                <div class="text">Caption Two</div>
                </div>

                <div class="mySlides fade">
     
                <img src="../images/tab-a7-shop-offer-desktop.webp" style="width:100%">
                <div class="text">Caption Three</div>
                </div>

                </div>
                <br>

                <div style="text-align:center">
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span> 
            </div>
            <h1 class="display border-bottom heading" >Best Selling Products</h1>
            <div class="flex-row justify-content-around ">
                <div class="card index-product">
                    <img src="../images/laptop1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Galaxy M31s</h5>
                        <p class="card-text">$250</p>
                        <a href="#" class="btn btn-success btn-block">Add to Cart</a>
                        <a href="#" class="btn btn-outline-warning btn-block">Add to wishlist</a>
                    </div>
                </div>
                <div class="card index-product" >
                <img src="../images/laptop2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Galaxy M31s</h5>
                    <p class="card-text">$250</p>
                    <a href="#" class="btn btn-success btn-block">Add to Cart</a>
                    <a href="#" class="btn btn-outline-warning btn-block">Add to wishlist</a>
                </div>
                </div>
                <div class="card index-product"  >
                    <img src="../images/phone1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">iPhone 12</h5>
                        <p class="card-text">$250</p>
                        <a href="#" class="btn btn-success btn-block">Add to Cart</a>
                        <a href="#" class="btn btn-outline-warning btn-block">Add to wishlist</a>
                    </div>
                </div>
                <div class="card index-product" >
                    <img src="../images/phone2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Galaxy S10</h5>
                        <p class="card-text">$250</p>
                        <a href="#" class="btn btn-success btn-block">Add to Cart</a>
                        <a href="#" class="btn btn-outline-warning btn-block">Add to wishlist</a>
                    </div>
                </div>
            </div>
        </div>
        <script src="../js/index.js" ></script>
        <?php include '../components/footer.php' ?>
    </body>

</html>

