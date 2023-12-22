<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
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
                    <li class="breadcrumb-item"> <a href="./products.php" class="text-decoration-none text-dark">Sản phẩm</a></li>
                    <li class="breadcrumb-item"> <a href="./products.php" class="text-decoration-none text-dark">Gọng kính cận</a></li>
                    <li class="breadcrumb-item"> <a href="./products.php" class="text-decoration-none text-dark">Gọng nhựa cao cấp</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> <a href="./products-detail.php" class="text-decoration-none text-dark text-uppercase">GỌNG KÍNH EYE PLUS 9812 C11 ĐEN</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Breadcrumb -->
    <!-- Content -->
    <div class="container py-4">
        <div class="row">
            <div class="col-md-5">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner border">
                        <div class="carousel-item active">
                            <img src="./assets/img/product_1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/product_2.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/product_1.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <div class="cicrle-button">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </div>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <div class="cicrle-button">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </div>
                    </button>
                </div>
                <div class="row py-3">
                    <div class="col-3"><img src="./assets/img/product_2.png" alt="" class="img-fluid border"></div>
                    <div class="col-3"><img src="./assets/img/product_2.png" alt="" class="img-fluid border"></div>
                    <div class="col-3"><img src="./assets/img/product_2.png" alt="" class="img-fluid border"></div>
                    <div class="col-3"><img src="./assets/img/product_2.png" alt="" class="img-fluid border"></div>
                </div>


            </div>
            <div class="col-md-7">
                <div class="detail-products">
                    <h4 class="text-uppercase fw-bold title-products">GỌNG KÍNH EYE PLUS 9812 C11 ĐEN</h4>
                    <p class="desc-products">Bạn đang tìm kiếm một chiếc gọng kính vừa trẻ trung vừa phong cách ư?</p>
                    <p class="desc-products">Bạn tìm đúng chỗ rồi đó!
                        <span>
                            <ul>
                                <li>Gọng kính <strong>EYE PLUS 9812</strong> với thiết kế mắt vuông bo tròn lịch lãm cho nam, cá tính cho nữ</li>
                                <li>Gam màu <strong>đen </strong>quen thuộc và hiện đại cho bạn tự tin khoe những đường nét sắc sảo của khuôn mặt</li>
                                <li>Chất liệu nhựa cao cấp, mang đến trải nghiệm thoải mái từng khoảnh khắc</li>
                            </ul>
                        </span>
                    </p>
                    <p class="status">Tình trạng: <span class="status-products fw-bold">Còn hàng</span></p>
                    <p class="fw-bold fs-4">Giá:</p>
                    <span>
                        <span class="price fs-3"><del>350.000 ₫</del></span>
                        <span class="sale-price fs-3 fw-bold" style="color:red">280.000 ₫</span>
                    </span>

                    <div class="d-flex align-items-center mt-3 justify-content-between">
                        <form action="#" class="d-flex align-items-center mt-3">
                            <span class="rounded d-flex justify-content-evenly gap-4 px-3 border text-dark p-2 mx-3">
                                <span class="minus fs-3" style="cursor: pointer;">-</span>
                                <span class="count fs-3"><input type="text" value="1" class="border border-0 text-center product-count" style="width: 50px;"></span>
                                <span class="plus fs-3" style="cursor: pointer;">+</span>
                            </span>

                            <a href="#" class="btn btn-outline-primary text-uppercase fw-bold p-3">Thêm vào giỏ hàng</a>
                        </form>

                    </div>

                    <a href="#" class="btn btn-warning fw-bold text-uppercase mt-3 p-2 w-100">Mua Ngay</a>

                </div>


            </div>
        </div>
    </div>
    <!-- Content -->


    <script>

    </script>


    <?php include('public/layouts/scripts.php') ?>
    <?php include('public/layouts/footer.php') ?>
</body>

</html>