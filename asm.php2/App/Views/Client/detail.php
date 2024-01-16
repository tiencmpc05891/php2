<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Your Name">
    <link rel="shortcut icon" href="favicon.png">
    <meta name="description" content="Product Detail Page">
    <meta name="keywords" content="bootstrap, bootstrap5, product detail">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style>
        .quantity-controls {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .quantity-btn {
            background-color: gray;
            border: none;
            color: #fff;
            border-radius: .2rem;
            padding: 5px 10px;
            cursor: pointer;
        }

        .quantity-input {
            height: 38px;
            width: 50px;
            text-align: center;
            border: 1px solid #ced4da;
            border-radius: .2rem;
            margin: 0 5px;
            padding: 5px 10px;
        }

        .add-to-cart-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: .2rem;
            padding: 10px 15px;
            cursor: pointer;
            display: block;
            margin: 0 auto;
        }

        .add-to-cart-btn1 {
            color: #fff;
            border: none;
            border-radius: .2rem;
            padding: 10px 15px;
            margin: 0 auto;
        }

        .related-product-item {
            text-align: center;
        }

        .related-product-price {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        /* Các lớp mới cho sản phẩm liên quan */
        .related-product-item {
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .related-product-item:hover .product-thumbnail {
            transform: scale(1.1);
        }

        .related-product-item:hover .add-to-cart-btn-related {
            opacity: 1;
            transform: translateY(0);
        }

        /* Hiệu ứng cho hình ảnh sản phẩm liên quan */
        .product-thumbnail {
            transition: transform 0.3s ease;
        }

        /* Hiệu ứng cho nút thêm vào giỏ hàng sản phẩm liên quan */
        .add-to-cart-btn-related {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }
    </style>

    <title>Product Detail - Furniture Shop</title>
</head>

<body>

    <!-- Product Detail Section -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <!-- Product Image -->
                <img src="images/product-1.png" alt="Product Image" class="img-fluid">
            </div>
            <div class="col-md-6">
                <!-- Product Details -->
                <h2 class="mb-3">Nordic Chair</h2>
                <p class="mb-2">$50.00</p>

                <!-- Quantity Controls -->
                <div class="mb-3 quantity-controls">
                    <button class="quantity-btn" type="button" id="decreaseQty">-</button>
                    <input type="text" class="form-control quantity-input" id="quantity" value="1" readonly>
                    <button class="quantity-btn" type="button" id="increaseQty">+</button>
                </div>

                <!-- Add to Cart Button -->
                <button class="btn btn-primary add-to-cart-btn1">Thêm vào giỏ hàng</button>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-12">
                <h3 class="mb-4">Sản phẩm liên quan</h3>
                <div class="row d-flex justify-content-start">

                    <!-- Related Product 1 -->


                    <div class="untree_co-section product-section before-footer-section">
                        <div class="container">
                            <div class="row">

                                <!-- Start Column 1 -->
                                <div class="col-6 col-md-4 col-lg-3 mb-4">
                                    <div class="product-item">
                                        <img src="images/product-3.png" class="img-fluid product-thumbnail">
                                        <h3 class="product-title">Nordic Chair</h3>
                                        <strong class="product-price">$50.00</strong>
                                        <!-- Thêm vào giỏ hàng form -->
                                        <div class="add-to-cart-form">
                                            <form action="index.php?act=addtocart" method="post">
                                                <input type="hidden" name="product_id" value="1">
                                                <!-- Thay thế 1 bằng ID thực của sản phẩm -->
                                                <button type="submit" class="btn btn-primary add-to-cart-btn1">Thêm vào giỏ hàng</button>
                                            </form>
                                        </div>
                                        <!-- Kết thúc form -->

                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 mb-4">
                                    <div class="product-item">
                                        <img src="images/product-3.png" class="img-fluid product-thumbnail">
                                        <h3 class="product-title">Nordic Chair</h3>
                                        <strong class="product-price">$50.00</strong>
                                        <!-- Thêm vào giỏ hàng form -->
                                        <div class="add-to-cart-form">
                                            <form action="index.php?act=addtocart" method="post">
                                                <input type="hidden" name="product_id" value="1">
                                                <!-- Thay thế 1 bằng ID thực của sản phẩm -->
                                                <button type="submit" class="btn btn-primary add-to-cart-btn1">Thêm vào giỏ hàng</button>
                                            </form>
                                        </div>
                                        <!-- Kết thúc form -->

                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 mb-4">
                                    <div class="product-item">
                                        <img src="images/product-3.png" class="img-fluid product-thumbnail">
                                        <h3 class="product-title">Nordic Chair</h3>
                                        <strong class="product-price">$50.00</strong>
                                        <!-- Thêm vào giỏ hàng form -->
                                        <div class="add-to-cart-form">
                                            <form action="index.php?act=addtocart" method="post">
                                                <input type="hidden" name="product_id" value="1">
                                                <!-- Thay thế 1 bằng ID thực của sản phẩm -->
                                                <button type="submit" class="btn btn-primary add-to-cart-btn1">Thêm vào giỏ hàng</button>
                                            </form>
                                        </div>
                                        <!-- Kết thúc form -->

                                    </div>
                                </div>
                                <div class="col-6 col-md-4 col-lg-3 mb-4">
                                    <div class="product-item">
                                        <img src="images/product-3.png" class="img-fluid product-thumbnail">
                                        <h3 class="product-title">Nordic Chair</h3>
                                        <strong class="product-price">$50.00</strong>
                                        <!-- Thêm vào giỏ hàng form -->
                                        <div class="add-to-cart-form">
                                            <form action="index.php?act=addtocart" method="post">
                                                <input type="hidden" name="product_id" value="1">
                                                <!-- Thay thế 1 bằng ID thực của sản phẩm -->
                                                <button type="submit" class="btn btn-primary add-to-cart-btn1">Thêm vào giỏ hàng</button>
                                            </form>
                                        </div>
                                        <!-- Kết thúc form -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Related Product 2 -->


                    <!-- Add more related products as needed -->

                </div>
            </div>
        </div>




    </div>

    <!-- Add more related products as needed -->

    </div>
    <!-- End Product Detail Section -->

    <!-- JavaScript for Quantity Controls -->
    <script>
        const quantityInput = document.getElementById('quantity');
        const decreaseQtyBtn = document.getElementById('decreaseQty');
        const increaseQtyBtn = document.getElementById('increaseQty');

        decreaseQtyBtn.addEventListener('click', () => {
            let currentQty = parseInt(quantityInput.value, 10);
            if (currentQty > 1) {
                quantityInput.value = currentQty - 1;
            }
        });

        increaseQtyBtn.addEventListener('click', () => {
            let currentQty = parseInt(quantityInput.value, 10);
            quantityInput.value = currentQty + 1;
        });
    </script>

    <!-- Bootstrap JS and Custom JS -->

</body>

</html>
