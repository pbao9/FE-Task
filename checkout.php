<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán</title>
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
                    <li class="breadcrumb-item active" aria-current="page"> <a href="./checkout.php" class="text-decoration-none text-dark">Thanh toán</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Breadcrumb -->
    <!-- Content -->
    <div class="container my-4">
        <div class="row">
            <div class="col-lg-6 col-12 my-4">
                <div class="col">
                    <h5 class="bg-dark-subtle fw-bold text-uppercase p-2 mt-2">Thông tin thanh toán</h5>
                    <form action="#" class="d-flex flex-column gap-3">
                        <input type="text" name="name" id="" placeholder="Họ tên" class="form-control shadow-none">
                        <input type="text" name="email" id="" placeholder="Email" class="form-control shadow-none">
                        <input type="text" name="phone" id="" placeholder="Số điện thoại" class="form-control shadow-none">
                        <input type="text" name="address" id="" placeholder="Địa chỉ" class="form-control shadow-none">
                        <input type="text" name="note" id="" placeholder="Ghi chú" class="form-control shadow-none">
                    </form>
                </div>

                <div class="col">
                    <h5 class="bg-dark-subtle fw-bold text-uppercase p-2 my-4">Thông tin bổ sung</h5>
                    <form action="#" class="d-flex flex-row">
                        <textarea class="form-control shadow-none" name="note" id="" cols="30" rows="10" placeholder="Ghi chú về đơn hàng, ví dụ: Thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn."></textarea>
                    </form>
                </div>


                <div class="col">
                    <h5 class="bg-dark-subtle fw-bold text-uppercase p-2 my-4">Phương thức giao hàng</h5>
                    <div class="col d-flex justify-content-between align-items-center">
                        <span>Trả tiền mặt khi nhận hàng <img src="./assets/img/icon_COD.svg" alt=""></span>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-12 my-4">
                <h5 class="bg-dark-subtle fw-bold text-uppercase p-2 mt-2">Đơn hàng</h5>
                <div class="col">
                    <table class="">
                        <thead class="">
                            <tr>
                                <th>Tên sản phẩm</th>
                                <th class="text-center">Giá</th>
                                <th class="text-center text-nowrap">Số lượng</th>
                            </tr>
                        </thead>
                        <tbody class="cart-item border-bottom">
                            <td class="product-name px-0 py-2 d-flex align-items-center flex-wrap flex-md-nowrap">
                                <img src="./assets/img/product_1.jpg" alt="" class="product-img" width="100px">
                                <a href="#" class="text-primary product-info px-2 text-decoration-none py-lg-0 py-3">KÍNH RÂM EYEPLUS 1224 GỌNG ĐEN MẮT XANH</a>
                            </td>
                            <td class="product-price text-center p-0 text-nowrap">280.000 Đ</td>
                            <td class="product-quantity text-center p-0">2</td>
                        </tbody>

                        <tbody class="cart-item border-bottom">
                            <td class="product-name px-0 py-2 d-flex align-items-center flex-wrap flex-md-nowrap">
                                <img src="./assets/img/product_2.png" alt="" class="product-img" width="100px">
                                <a href="#" class="text-primary product-info px-2 text-decoration-none py-lg-0 py-3">KÍNH RÂM EYEPLUS 1224 GỌNG ĐEN MẮT XANH</a>
                            </td>
                            <td class="product-price text-center p-0 text-nowrap">280.000 Đ</td>
                            <td class="product-quantity text-center p-0">1</td>
                        </tbody>
                    </table>

                    <div class="bg-dark-subtle p-2 d-flex flex-row justify-content-between align-items-center">
                        <h5 class="text-dark fw-bold text-uppercase p-0 m-0">Tổng cộng</h5>
                        <p class="total-products fw-bold text-white p-0 m-0">840.000 Đ</p>
                    </div>

                    <div class="d-flex flex-row justify-content-end py-2 gap-2">
                        <a href="./products.php" class="btn btn-outline-warning fw-bold text-uppercase shadow-none">Tiếp tục mua sắm</a>
                        <a href="#" class="btn btn-primary fw-bold text-uppercase shadow-none">Xác nhận thanh toán</a>
                    </div>



                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
    <?php include('public/layouts/scripts.php') ?>
    <?php include('public/layouts/footer.php') ?>
</body>

</html>