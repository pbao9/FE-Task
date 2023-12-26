<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <?php include('public/layouts/head.php') ?>
</head>

<body>
    <?php include('public/layouts/header.php') ?>
    <!-- Breadcrumb -->
    <div class="bg-body-tertiary">
        <div class="container my-3 pt-3 pb-2">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.php" class="text-decoration-none text-dark">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> <a href="./cart.php" class="text-decoration-none text-dark">Giỏ hàng</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Breadcrumb -->
    <!-- Content -->
    <div class="container">
        <form action="#">
            <div class="border border-1 p-lg-5 p-3 mb-5">
                <span class="mb-3">Bạn có <span class="products-count text-primary">3</span> sản phẩm trong giỏ hàng.</span>
                <hr>
                <table class="">
                    <thead class="">
                        <tr>
                            <th>Sản phẩm</th>
                            <th class="text-center">Giá</th>
                            <th class="text-center">Số lượng</th>
                            <th class="text-center">Tạm tính</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="cart-item border-bottom">
                        <td class="product-name px-0 py-2 d-flex align-items-center flex-wrap flex-md-nowrap">
                            <img src="./assets/img/product_1.jpg" alt="" class="product-img" width="100px">
                            <a href="#" class="text-primary product-info px-2 text-decoration-none py-lg-0 py-3">KÍNH RÂM EYEPLUS 1224 GỌNG ĐEN MẮT XANH</a>
                        </td>
                        <td class="product-price text-center">280.000 Đ</td>
                        <td class="product-quantity text-center">2</td>
                        <td class="product-subtotal text-center fw-bold">560.000 Đ</td>
                        <td><a href="#delete" class="text-decoration-none text-danger fw-bold product-remove"><i class="fa-solid fa-trash"></i></a></td>
                    </tbody>

                    <tbody class="cart-item border-bottom">
                        <td class="product-name px-0 py-2 d-flex align-items-center flex-wrap flex-md-nowrap">
                            <img src="./assets/img/product_2.png" alt="" class="product-img" width="100px">
                            <a href="#" class="text-primary product-info px-2 text-decoration-none py-lg-0 py-3">KÍNH RÂM EYEPLUS 1224 GỌNG ĐEN MẮT XANH</a>
                        </td>
                        <td class="product-price text-center">280.000 Đ</td>
                        <td class="product-quantity text-center">1</td>
                        <td class="product-subtotal text-center fw-bold">280.000 Đ</td>
                        <td><a href="#delete" class="text-decoration-none text-danger fw-bold product-remove"><i class="fa-solid fa-trash"></i></a></td>
                    </tbody>
                </table>
            </div>
        </form>
        <div class="row p-3">
            <div class="col-6 d-lg-block d-none"></div>
            <div class="col-lg-6 col-12 border border-1 p-5">
                <span class="fw-bold mb-3">Cộng giỏ hàng</span>
                <hr>
                <div class="row">
                    <span class="mb-5 d-flex flex-row">
                        <div class="col-6">Tạm tính</div>
                        <div class="col-6 text-end product-subtotal">840.000 Đ</div>
                    </span>
                    <span class="mb-5 d-flex flex-row">
                        <div class="col-6">Tổng</div>
                        <div class="col-6 text-end text-primary fw-bold product-total">840.000 Đ</div>
                    </span>

                    <a href="#" class="btn btn-outline-primary text-decoration-none text-uppercase fw-bold mb-3 mx-2 w-auto btn-update-cart">Cập nhật giỏ hàng</a>
                    <a href="#" class="btn btn-primary text-decoration-none text-uppercase fw-bold mb-3 mx-2 w-auto btn-pending-pay">Tiến hành Thanh Toán</a>
                </div>

            </div>
        </div>
    </div>
    <!-- Content -->
    <?php include('public/layouts/scripts.php') ?>
    <?php include('public/layouts/footer.php') ?>
</body>

</html>