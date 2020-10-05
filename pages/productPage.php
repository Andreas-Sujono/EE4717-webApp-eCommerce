<html>
    <head>
        <title>Product Information</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
        <link rel="stylesheet" href="../css/index.css"/>
        <link rel="stylesheet" href="../css/category.css"/>
        <link rel="stylesheet" href="../css/nav.css"/>
        <link rel="stylesheet" href="../css/footer.css"/>
        <link rel="stylesheet" href="../css/product_page.css"/>
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
        <?php include '../components/nav.php' ?>
            <div class="container content">
                <div class="product d-flex flex-row justify-content-around">
                    <div class="product__image">
                        <img src="../images/laptop1.jpg" alt="..." />
                    </div>
                    <div class="product__briefinfo">
                        <div class="product-name mb-2">Product Name 1</div>
                        <div class="product-rating mb-2">4.0</div>
                        <div class="product-price mb-2">$250</div>
                        <div class="product-quantity mb-2">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" >Quantity</label>
                                </div>
                                <input type="number" min=0 class="form-control" placeholder="" >
                            </div>
                        </div>
                        <div class="buttons mb-2">
                            <button type="button" class="btn btn-outline-primary">Add to cart</button>
                            <button type="button" class="btn btn-outline-success">Buy Now</button>
                        </div>
                        <div class="wishlist d-flex flex-row">
                            <svg onclick="select()" id="not-selected" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M12 21.593c-5.63-5.539-11-10.297-11-14.402 0-3.791 3.068-5.191 5.281-5.191 1.312 0 4.151.501 5.719 4.457 1.59-3.968 4.464-4.447 5.726-4.447 2.54 0 5.274 1.621 5.274 5.181 0 4.069-5.136 8.625-11 14.402m5.726-20.583c-2.203 0-4.446 1.042-5.726 3.238-1.285-2.206-3.522-3.248-5.719-3.248-3.183 0-6.281 2.187-6.281 6.191 0 4.661 5.571 9.429 12 15.809 6.43-6.38 12-11.148 12-15.809 0-4.011-3.095-6.181-6.274-6.181"/></svg>
                            <svg onclick="unselect()" id="selected" class="selected " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/></svg>
                            <span id="wishlist__text" class="ml-2">Add to Wishlist</span>
                        </div>
                        
                    </div>
                </div>
                <div class="information">
                    <div class="information__heading">Product Specifications</div>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                            <td>Standing screen display size</td>
                            <td>17.3 Inches</td>
                            </tr>

                            <tr>
                            <td>Screen Resolution</td>
                            <td>1920 x 1080 pixels</td>
                            </tr>

                            <tr>
                            <td>Memory Speed</td>
                            <td>3200 MHz</td>
                            </tr>

                            <tr>
                            <td>Graphics Coprocessor</td>
                            <td>NVIDIA GeForce RTX 2080 Super</td>
                            </tr>

                            <tr>
                            <td>Graphics Card Ram Size</td>
                            <td>8 GB</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="information__heading mb-3">Product Descriptions</div>
                    <div class="information__description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mollis ligula eu leo fringilla, ut imperdiet diam consequat. Praesent neque metus, mattis vel dui vel, vehicula euismod erat. Mauris vel ante sit amet magna ultrices egestas. Morbi nec rhoncus magna. Nullam in dictum augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque arcu eros, mollis nec ligula in, porta malesuada ipsum. Vestibulum tincidunt laoreet aliquet. Nunc sed tortor ut nulla hendrerit gravida non vel felis. Donec auctor urna metus, sit amet gravida sapien sodales non. Nam nec viverra ligula, non vestibulum felis. Praesent facilisis cursus tortor et condimentum. Nullam ullamcorper felis in tortor vestibulum porta. Vivamus vulputate odio at diam ultrices mattis. Mauris et pulvinar ipsum. Suspendisse sagittis, risus non tincidunt rutrum, ipsum nisl elementum augue, eget consequat turpis nibh et nisi.
                    </div>
                </div>
            </div>
            
        <?php include '../components/footer.php' ?>
    </body>

</html>

