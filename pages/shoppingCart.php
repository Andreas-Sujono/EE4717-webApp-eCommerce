<html>
    <head>
        <title>Shopping cart</title>
        <link rel="stylesheet" href="../css/index.css"/>
        <link rel="stylesheet" href="../css/nav.css"/>
        <link rel="stylesheet" href="../css/footer.css"/>
        <link rel="stylesheet" href="../css/shoppingCart.css"/>
    </head>

    <body>
        <?php include '../components/nav.php' ?>
            <div class="shopping-cart-page">
                <div class="title-container">
                    <h1>Shopping cart</h1>
                </div>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Subtotal Price</th>
                                <th>Action</th>
                            </tr>   
                        </thead>
                        <tbody>
                            <tr>
                                <td class="product-col"> 
                                    <img src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE3oYjc?ver=e1aa" alt="product"/>
                                    <span>Asus Vivobook<span>
                                </td>
                                <td>1</td>
                                <td>$250</td>
                                <td>$250</td>
                                <td>
                                    <button class="delete-btn"> Delete </button>
                                </td>
                            </tr>   
                            <tr>
                                <td class="product-col"> 
                                    <img src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE3oYjc?ver=e1aa" alt="product"/>
                                    <span>Asus Vivobook<span>
                                </td>
                                <td>1</td>
                                <td>$250</td>
                                <td>$250</td>
                                <td>
                                    <button class="delete-btn"> Delete </button>
                                </td>
                            </tr>   
                            <tr>
                                <td class="product-col"> 
                                    <img src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE3oYjc?ver=e1aa" alt="product"/>
                                    <span>Asus Vivobook<span>
                                </td>
                                <td>1</td>
                                <td>$250</td>
                                <td>$250</td>
                                <td>
                                    <button class="delete-btn"> Delete </button>
                                </td>
                            </tr>   
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4" class="total-price">Total Price: <span>$250</span></td>
                                <td><button class="checkout-btn"> Checkout </button></td>
                            </tr>   
                        </tfoot>
                    </table>
                </div>

            </div>
        <?php include '../components/footer.php' ?>
    </body>

</html>

