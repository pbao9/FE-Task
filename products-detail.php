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
            <div class="box-products row mb-3 p-0">
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
                        <p class="status-products">Tình trạng: <span class="status-products fw-bold">Còn hàng</span></p>
                        <span>
                            <ul>
                                <li>Gọng kính <strong>EYE PLUS 9812</strong> với thiết kế mắt vuông bo tròn lịch lãm cho nam, cá tính cho nữ</li>
                                <li>Gam màu <strong>đen </strong>quen thuộc và hiện đại cho bạn tự tin khoe những đường nét sắc sảo của khuôn mặt</li>
                                <li>Chất liệu nhựa cao cấp, mang đến trải nghiệm thoải mái từng khoảnh khắc</li>
                            </ul>
                        </span>
                        </p>
                        <div class="box propeties-products row gap-3 py-3 form-group">
                            <div class="col-12 d-flex">
                                <span class="col fw-bold text-uppercase">Thuộc tính:</span>
                                <span class="col text-uppercase fw-bold px-2">Mắt trái</span>
                                <span class="col text-uppercase fw-bold px-2">Mắt phải</span>
                            </div>
                            <div class="col-12 d-flex align-items-center">
                                <span class="col">Độ cầu:</span>
                                <div class="col px-2">
                                    <select class="form-select shadow-none" aria-label="Default select example">
                                        <option selected>Độ cầu mắt trái</option>
                                        <option value="1">+6.00</option>
                                        <option value="2">+5.00</option>
                                        <option value="3">+4.00</option>
                                    </select>
                                </div>
                                <div class="col px-2">
                                    <select class="form-select shadow-none" aria-label="Default select example">
                                        <option selected>Độ cầu mắt phải</option>
                                        <option value="1">+6.00</option>
                                        <option value="2">+5.00</option>
                                        <option value="3">+4.00</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 d-flex align-items-center">
                                <span class="col">Độ loạn:</span>
                                <div class="col px-2">
                                    <select class="form-select shadow-none" aria-label="Default select example">
                                        <option selected>Độ loạn mắt trái</option>
                                        <option value="1">-4.00</option>
                                        <option value="2">-5.00</option>
                                        <option value="3">-6.00</option>
                                    </select>
                                </div>
                                <div class="col px-2">
                                    <select class="form-select shadow-none" aria-label="Default select example">
                                        <option selected>Độ loạn mắt phải</option>
                                        <option value="1">-4.00</option>
                                        <option value="2">-5.00</option>
                                        <option value="3">-6.00</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 d-flex align-items-center">
                                <span class="col">Số lượng:</span>
                                <div class="col px-2">
                                    <div class="quantity d-flex flex-row align-items-center gap-2">
                                        <input type="number" name="" id="" value="1" class="form-control shadow-none w-25 text-center txt-quantity-left">
                                        <span class="fw-light">x <span class="price-quantity-products fw-bold">250.000đ</span></span>
                                    </div>
                                </div>
                                <div class="col px-2">
                                    <div class="quantity d-flex flex-row align-items-center gap-2">
                                        <input type="number" name="" id="" value="1" class="form-control shadow-none w-25 text-center txt-quantity-right">
                                        <span class="fw-light">x <span class="price-quantity-products fw-bold">250.000đ</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex align-items-center">
                                <span class="col">Ghi chú:</span>
                                <div class="col px-2">
                                    <textarea name="note-products" id="" cols="10" rows="5" class="form-control shadow-none"></textarea>
                                </div>
                                <div class="col px-2">
                                    <textarea name="note-products" id="" cols="10" rows="5" class="form-control shadow-none"></textarea>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href="#" class="btn btn-outline-info fw-bold text-uppercase mt-3 p-2 btn-add-products"><i class="fa-solid fa-plus"></i> Thêm cặp lens</a>
                            <a href=" #" class="btn bg-warning bg-gradient fw-bold text-uppercase mt-3 p-2 btn-add-to-cart">Mua Ngay</a>
                        </div>

                    </div>
                </div>
            </div>
            <hr>
            <div class="infomation-products container d-flex flex-row p-0 my-3">
                <ul class="nav nav-tabs col-3 d-flex flex-column border-0 shadow-none">
                    <li class="nav-item shadow-none">
                        <a class="nav-link active fw-bold text-body-tertiary text-uppercase" id="home-tab" data-bs-toggle="tab" href="#home">Thông tin sản phẩm</a>
                    </li>
                    <li class="nav-item shadow-none">
                        <a class="nav-link fw-bold text-body-tertiary text-uppercase" id="menu1-tab" data-bs-toggle="tab" href="#menu1">Điều khoản mua hàng</a>
                    </li>
                    <li class="nav-item shadow-none">
                        <a class="nav-link fw-bold text-body-tertiary text-uppercase" id="menu2-tab" data-bs-toggle="tab" href="#menu2">Bảo hành - đổi trả</a>
                    </li>
                </ul>

                <div class="tab-content col">
                    <div class="tab-pane fade show active" id="home">
                        <?php include('./public/pages/infomation-products.php') ?>
                    </div>
                    <div class="tab-pane fade" id="menu1">
                        <?php include('./public/pages/purchase-terms.php') ?>
                    </div>
                    <div class="tab-pane fade" id="menu2">
                        <?php include('./public/pages/warranty-return.php') ?>
                    </div>
                </div>
            </div>
            <hr>
            <div class="features-products text-center py-5">
                <p class="text-uppercase fw-bold fs-3">Các tròng kính khác</p>
                <div class="row gap-4">
                    <div class="col shadow rounded p-0">
                        <img src="./assets/img/product_2.png" class="img-fluid" alt="">
                        <div class="text-uppercase p-2">GỌNG KÍNH EYE PLUS 9812 C11 ĐEN</div>
                        <div class="d-flex justify-content-evenly p-2">
                            <span class="price-sale fw-bold"><del>350.000đ</del></span>
                            <span class="price fw-bold" style="color:red">250.000đ</span>
                        </div>
                    </div>
                    <div class="col shadow rounded p-0">
                        <img src="./assets/img/product_1.jpg" class="img-fluid" alt="">
                        <div class="text-uppercase p-2">GỌNG KÍNH EYE PLUS 9812 C11 ĐEN</div>
                        <div class="d-flex justify-content-evenly p-2">
                            <span class="price-sale fw-bold"><del>350.000đ</del></span>
                            <span class="price fw-bold" style="color:red">250.000đ</span>
                        </div>

                    </div>
                    <div class="col shadow rounded p-0">
                        <img src="./assets/img/product_2.png" class="img-fluid" alt="">
                        <div class="text-uppercase p-2">GỌNG KÍNH EYE PLUS 9812 C11 ĐEN</div>
                        <div class="d-flex justify-content-evenly p-2">
                            <span class="price-sale fw-bold"><del>350.000đ</del></span>
                            <span class="price fw-bold" style="color:red">250.000đ</span>
                        </div>

                    </div>
                    <div class="col shadow rounded p-0">
                        <img src="./assets/img/product_1.jpg" class="img-fluid" alt="">
                        <div class="text-uppercase p-2">GỌNG KÍNH EYE PLUS 9812 C11 ĐEN</div>
                        <div class="d-flex justify-content-evenly p-2">
                            <span class="price-sale fw-bold"><del>350.000đ</del></span>
                            <span class="price fw-bold" style="color:red">250.000đ</span>
                        </div>

                    </div>
                    <div class="col shadow rounded p-0">
                        <img src="./assets/img/product_2.png" class="img-fluid" alt="">
                        <div class="text-uppercase p-2">GỌNG KÍNH EYE PLUS 9812 C11 ĐEN</div>
                        <div class="d-flex justify-content-evenly p-2">
                            <span class="price-sale fw-bold"><del>350.000đ</del></span>
                            <span class="price fw-bold" style="color:red">250.000đ</span>
                        </div>

                    </div>

                </div>
            </div>

            <div class="features-products text-center py-5">
                <p class="text-uppercase fw-bold fs-3">Sản phẩm khác</p>
                <div class="row gap-4">
                    <div class="col shadow rounded p-0">
                        <img src="./assets/img/product_2.png" class="img-fluid" alt="">
                        <div class="text-uppercase p-2">GỌNG KÍNH EYE PLUS 9812 C11 ĐEN</div>
                        <div class="d-flex justify-content-evenly p-2">
                            <span class="price-sale fw-bold"><del>350.000đ</del></span>
                            <span class="price fw-bold" style="color:red">250.000đ</span>
                        </div>
                    </div>
                    <div class="col shadow rounded p-0">
                        <img src="./assets/img/product_1.jpg" class="img-fluid" alt="">
                        <div class="text-uppercase p-2">GỌNG KÍNH EYE PLUS 9812 C11 ĐEN</div>
                        <div class="d-flex justify-content-evenly p-2">
                            <span class="price-sale fw-bold"><del>350.000đ</del></span>
                            <span class="price fw-bold" style="color:red">250.000đ</span>
                        </div>

                    </div>
                    <div class="col shadow rounded p-0">
                        <img src="./assets/img/product_2.png" class="img-fluid" alt="">
                        <div class="text-uppercase p-2">GỌNG KÍNH EYE PLUS 9812 C11 ĐEN</div>
                        <div class="d-flex justify-content-evenly p-2">
                            <span class="price-sale fw-bold"><del>350.000đ</del></span>
                            <span class="price fw-bold" style="color:red">250.000đ</span>
                        </div>

                    </div>
                    <div class="col shadow rounded p-0">
                        <img src="./assets/img/product_1.jpg" class="img-fluid" alt="">
                        <div class="text-uppercase p-2">GỌNG KÍNH EYE PLUS 9812 C11 ĐEN</div>
                        <div class="d-flex justify-content-evenly p-2">
                            <span class="price-sale fw-bold"><del>350.000đ</del></span>
                            <span class="price fw-bold" style="color:red">250.000đ</span>
                        </div>

                    </div>
                    <div class="col shadow rounded p-0">
                        <img src="./assets/img/product_2.png" class="img-fluid" alt="">
                        <div class="text-uppercase p-2">GỌNG KÍNH EYE PLUS 9812 C11 ĐEN</div>
                        <div class="d-flex justify-content-evenly p-2">
                            <span class="price-sale fw-bold"><del>350.000đ</del></span>
                            <span class="price fw-bold" style="color:red">250.000đ</span>
                        </div>

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