<html>
    <head>
        <title>Shopping website</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/index.css"/>
        <link rel="stylesheet" href="../css/nav.css"/>
        <link rel="stylesheet" href="../css/footer.css"/>
        <link rel="stylesheet" href="../css/category.css"/>
    </head>

    <body>
        <?php include '../components/nav.php' ?>
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="../images/new-ce-exclusive-desktop.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="../images/new-ncl-note20-banner-desktop.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="../images/tab-a7-shop-offer-desktop.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <h1 class="display-4 text-center m-3 p-2 border-bottom">Best Selling Products</h1>
        <div class="d-flex flex-row justify-content-around">
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
        
        <?php include '../components/footer.php' ?>
    </body>

</html>

