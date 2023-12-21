<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <?php include('public/layouts/head.php') ?>

</head>

<body>
    <?php include('public/layouts/header.php') ?>
    <?php include('public/layouts/slide.php') ?>
    <section class="product-count-section my-5">
        <div class="container">
            <section class="product-categories my-2">
                <div class="row gap-3 justify-content-evenly position-relative">
                    <div class="col-lg-5 col-md-12 rounded shadow row p-0 m-0 position-relative">
                        <img src="./assets/img/kinh-ram.png" alt="" width="100%" class="m-0 p-0">
                        <div class="box-content position-absolute">
                            <h2 class="text-uppercase fw-bold">Kính Râm</h2>
                            <p class="text-uppercase">112 Sản phẩm</p>
                            <a href="#" class="btn btn-primary">Xem ngay</a>
                        </div>

                    </div>
                    <div class="col-lg-5 col-md-12 rounded shadow row p-0 m-0 position-relative">
                        <img src="./assets/img/kinh-can.png" alt="" width="100%" class="m-0 p-0">
                        <div class="box-content position-absolute">
                            <h2 class="text-uppercase fw-bold">Kính Cận</h2>
                            <p class="text-uppercase">668 Sản phẩm</p>
                            <a href="#" class="btn btn-primary">Xem ngay</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>


    <section class="deal-section position-relative my-5 py-5" id="deal_section">
        <!-- <img src="./assets/img/blockquote-cta-bg.jpg" alt="" class="w-100"> -->
        <div class="position-absolute top-50 start-50 translate-middle text-center z-1">
            <h4 class="text-light text-uppercase mb-3">Ưu đãi tháng này</h3>
                <h3 class="text-light text-uppercase fw-bold mb-3">Tặng Kính</h3>
                <a href="#" class="btn btn-light btn-deal text-uppercase fw-bold">Chi tiết ưu đãi</a>

        </div>
        <div class="position-absolute top-0 left-0 w-100 h-100" style="background-color: rgba(72,114,250,0.80)"></div>

    </section>


    <section class="about-section my-5 py-5" id="about_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="h-100 d-flex flex-column justify-content-center gap-3">
                        <p>EYE PLUS – CHUỖI CỬA HÀNG KÍNH MẮT UY TÍN TẠI HÀ NỘI , HCM</p>
                        <h5>TÀI SẢN LỚN NHẤT CỦA DOANH NGHIỆP LÀ KHÁCH HÀNG</h5>
                        <em>Kính mắt Eye Plus – Trải nghiệm chất lượng kính mắt theo tiêu chuẩn quốc tế</em>
                        <p>Với 6 năm kính nghiệm trên thị trường kính mắt Việt, Eye Plus tự hào là đơn vị cung cấp các sản phẩm và dịch vụ về kính mắt uy tín tại Việt Nam. Các sản phẩm được tuyển chọn kỹ lưỡng, đạt độ tinh xảo và chất lượng cao, hướng đến trải nghiệm tốt nhất cho khách hàng.</p>
                        <p>Là một sản phẩm về sức khoẻ con người, chúng tôi “kinh doanh dựa trên sự tử tế” lấy khách hàng là trọng tâm, không ngừng thay đổi cải tiến sản phẩm cũng như dịch vụ đi kèm. Ngoài ra, hệ thống kỹ thuật viên giàu kinh nghiệm, trang thiết bị máy móc hiện đại cùng dịch vụ tư vấn tận tâm giúp Eye Plus trở thành địa chỉ tin cậy đồng hành cùng hàng triệu khách hàng Việt.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 text-center">
                    <img src="./assets/img/chat-luong.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="card-section my-5 py-5" id="card_section">
        <div class="container">
            <div class="row justify-content-evenly">
                <div class="col-lg-3 col-sm-12 bg-light text-black rounded shadow text-center mt-lg-0 mt-sm-3">
                    <img src="./assets/img/sunglasses1.png" alt="" class="img-fluid my-3">
                    <p class="text-uppercase fw-bold">Mẫu mã đa dạng</p>
                    <p class="fw-light px-3">Thấu hiểu thị hiếu khách hàng, mẫu mã của Eye Plus đa dạng, phù hợp với nhiều yêu cầu khác nhau.</p>
                </div>
                <div class="col-lg-3 col-sm-12 bg-light text-black rounded shadow text-center mt-lg-0 mt-sm-3">
                    <img src="./assets/img/medal1.png" alt="" class="img-fluid my-3">
                    <p class="text-uppercase fw-bold">CHẤT LƯỢNG ĐI ĐẦU</p>
                    <p class="fw-light px-3">Các sản phẩm được chọn lựa kỹ lưỡng, độ tinh xảo cao đi cùng chuyên viên kinh nghiệm và máy móc tiên tiến, hiện đại.</p>
                </div>
                <div class="col-lg-3 col-sm-12 bg-light text-black rounded shadow text-center mt-lg-0 mt-sm-3">
                    <img src="./assets/img/piggy-bank1.png" alt="" class="img-fluid my-3">
                    <p class="text-uppercase fw-bold">GIÁ CẢ HỢP LÝ</p>
                    <p class="fw-light px-3">Mức giá cạnh tranh tương xứng với chất lượng, nhiều chương trình ưu đãi và chế độ bảo hành hậu mãi.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="partner-section my-5 py-5" id="parner_section">
        <div class="container bg-body-tertiary py-5">
            <h4 class="text-center text-uppercase fw-bold title-section pb-5">Đối tác hàng đầu</h4>
            <div class="row">
                <div class="col"><img src="./assets/img/logo-hoya.png" alt=""></div>
                <div class="col"><img src="./assets/img/logo-essilor.png" alt=""></div>
                <div class="col"><img src="./assets/img/logo-chemi.png" alt=""></div>
                <div class="col"><img src="./assets/img/logo-akp.png" alt=""></div>
                <div class="col"><img src="./assets/img/logo-reeman.png" alt=""></div>
            </div>
        </div>
    </section>


    <section class="product-section my-5 py-5" id="product_section">
        <div class="container">
            <h4 class="text-center text-uppercase fw-bold title-section pb-5">Mẫu kính mắt mới</h4>
            <div class="row justify-content-evenly row-cols-4 py-2">
                <!-- Product -->
                <div class="col-3 shadow text-center box-product p-0 mb-5">
                    <img src="./assets/img/product_1.jpg" alt="" class="img-fluid">
                    <a href="#" class="text-uppercase mt-3 text-decoration-none nav-link px-3">Gọng kính Blancy 8470 C3 Bạc</a>
                    <span class="d-flex justify-content-center gap-2">
                        <del class="price-sale fw-bold">650.000 Đ</del>
                        <p class="price text-danger fw-bold">520.000 Đ</p>
                    </span>
                </div>
                <!-- Product -->
                <!-- Product -->
                <div class="col-3 shadow text-center box-product p-0 mb-5">
                    <img src="./assets/img/product_2.png" alt="" class="img-fluid">
                    <a href="#" class="text-uppercase mt-3 text-decoration-none nav-link px-3">Gọng kính Blancy 8470 C3 Bạc</a>
                    <span class="d-flex justify-content-center gap-2">
                        <del class="price-sale fw-bold">650.000 Đ</del>
                        <p class="price text-danger fw-bold">520.000 Đ</p>
                    </span>
                </div>
                <!-- Product -->
                <!-- Product -->
                <div class="col-3 shadow text-center box-product p-0 mb-5">
                    <img src="./assets/img/product_1.jpg" alt="" class="img-fluid">
                    <a href="#" class="text-uppercase mt-3 text-decoration-none nav-link px-3">Gọng kính Blancy 8470 C3 Bạc</a>
                    <span class="d-flex justify-content-center gap-2">
                        <del class="price-sale fw-bold">650.000 Đ</del>
                        <p class="price text-danger fw-bold">520.000 Đ</p>
                    </span>
                </div>
                <!-- Product -->

                <!-- Product -->
                <div class="col-3 shadow text-center box-product p-0 mb-5">
                    <img src="./assets/img/product_2.png" alt="" class="img-fluid">
                    <a href="#" class="text-uppercase mt-3 text-decoration-none nav-link px-3">Gọng kính Blancy 8470 C3 Bạc</a>
                    <span class="d-flex justify-content-center gap-2">
                        <del class="price-sale fw-bold">650.000 Đ</del>
                        <p class="price text-danger fw-bold">520.000 Đ</p>
                    </span>
                </div>
                <!-- Product -->

                <!-- Product -->
                <div class="col-3 shadow text-center box-product p-0 mb-5">
                    <img src="./assets/img/product_1.jpg" alt="" class="img-fluid">
                    <a href="#" class="text-uppercase mt-3 text-decoration-none nav-link px-3">Gọng kính Blancy 8470 C3 Bạc</a>
                    <span class="d-flex justify-content-center gap-2">
                        <del class="price-sale fw-bold">650.000 Đ</del>
                        <p class="price text-danger fw-bold">520.000 Đ</p>
                    </span>
                </div>
                <!-- Product -->


                <!-- Product -->
                <div class="col-3 shadow text-center box-product p-0 mb-5">
                    <img src="./assets/img/product_2.png" alt="" class="img-fluid">
                    <a href="#" class="text-uppercase mt-3 text-decoration-none nav-link px-3">Gọng kính Blancy 8470 C3 Bạc</a>
                    <span class="d-flex justify-content-center gap-2">
                        <del class="price-sale fw-bold">650.000 Đ</del>
                        <p class="price text-danger fw-bold">520.000 Đ</p>
                    </span>
                </div>
                <!-- Product -->


                <!-- Product -->
                <div class="col-3 shadow text-center box-product p-0 mb-5">
                    <img src="./assets/img/product_1.jpg" alt="" class="img-fluid">
                    <a href="#" class="text-uppercase mt-3 text-decoration-none nav-link px-3">Gọng kính Blancy 8470 C3 Bạc</a>
                    <span class="d-flex justify-content-center gap-2">
                        <del class="price-sale fw-bold">650.000 Đ</del>
                        <p class="price text-danger fw-bold">520.000 Đ</p>
                    </span>
                </div>
                <!-- Product -->


                <!-- Product -->
                <div class="col-3 shadow text-center box-product p-0 mb-5">
                    <img src="./assets/img/product_2.png" alt="" class="img-fluid">
                    <a href="#" class="text-uppercase mt-3 text-decoration-none nav-link px-3">Gọng kính Blancy 8470 C3 Bạc</a>
                    <span class="d-flex justify-content-center gap-2">
                        <del class="price-sale fw-bold">650.000 Đ</del>
                        <p class="price text-danger fw-bold">520.000 Đ</p>
                    </span>
                </div>
                <!-- Product -->

            </div>
            <p class="text-center">
                <a href="#" class="btn btn-primary text-uppercase">Xem Thêm</a>
            </p>
        </div>
    </section>


    <section class="product-2-section my-5 py-5" id="product_2_section">
        <div class="container">
            <h4 class="text-center text-uppercase fw-bold title-section pb-5">SẢN PHẨM CHÍNH HÃNG</h4>
            <div class="row justify-content-evenly row-cols-4 py-2">
                <!-- Product -->
                <div class="col-3 shadow text-center box-product p-0 mb-5">
                    <img src="./assets/img/product_1.jpg" alt="" class="img-fluid">
                    <a href="#" class="text-uppercase mt-3 text-decoration-none nav-link px-3">Gọng kính Blancy 8470 C3 Bạc</a>
                    <span class="d-flex justify-content-center gap-2">
                        <del class="price-sale fw-bold">650.000 Đ</del>
                        <p class="price text-danger fw-bold">520.000 Đ</p>
                    </span>
                </div>
                <!-- Product -->
                <!-- Product -->
                <div class="col-3 shadow text-center box-product p-0 mb-5">
                    <img src="./assets/img/product_2.png" alt="" class="img-fluid">
                    <a href="#" class="text-uppercase mt-3 text-decoration-none nav-link px-3">Gọng kính Blancy 8470 C3 Bạc</a>
                    <span class="d-flex justify-content-center gap-2">
                        <del class="price-sale fw-bold">650.000 Đ</del>
                        <p class="price text-danger fw-bold">520.000 Đ</p>
                    </span>
                </div>
                <!-- Product -->
                <!-- Product -->
                <div class="col-3 shadow text-center box-product p-0 mb-5">
                    <img src="./assets/img/product_1.jpg" alt="" class="img-fluid">
                    <a href="#" class="text-uppercase mt-3 text-decoration-none nav-link px-3">Gọng kính Blancy 8470 C3 Bạc</a>
                    <span class="d-flex justify-content-center gap-2">
                        <del class="price-sale fw-bold">650.000 Đ</del>
                        <p class="price text-danger fw-bold">520.000 Đ</p>
                    </span>
                </div>
                <!-- Product -->

                <!-- Product -->
                <div class="col-3 shadow text-center box-product p-0 mb-5">
                    <img src="./assets/img/product_2.png" alt="" class="img-fluid">
                    <a href="#" class="text-uppercase mt-3 text-decoration-none nav-link px-3">Gọng kính Blancy 8470 C3 Bạc</a>
                    <span class="d-flex justify-content-center gap-2">
                        <del class="price-sale fw-bold">650.000 Đ</del>
                        <p class="price text-danger fw-bold">520.000 Đ</p>
                    </span>
                </div>
                <!-- Product -->


            </div>
            <p class="text-center">
                <a href="#" class="btn btn-primary text-uppercase">Xem Thêm</a>
            </p>
        </div>
    </section>


    <section class="blog-section my-5 py-5" id="blog_section">
        <div class="container">
            <h4 class="text-center text-uppercase fw-bold title-section pb-5">ROCKYLEN'S BLOG</h4>
            <div class="row justify-content-evenly row-cols-4 py-2 gap-2">
                <!-- Blog -->
                <div class="col-3 text-center p-0 mb-5 box-blog">
                    <img src="./assets/img/avav.png" alt="" class="img-fluid">
                    <a href="#" class="text-uppercase mt-3 fw-bold nav-link pb-3">ÁNH SÁNG XANH TÍM VÀ TRÒNG KÍNH LỌC ÁNH SÁNG XANH TÍM</a>
                    <span class="d-flex justify-content-center gap-2">
                        <p class="fw-normal">Ngày nay, chúng ta đang tiếp xúc với rất nhiều nguồn sáng khác nhau, từ nguồn sáng tự nhiên như</p>
                    </span>
                    <a href="#" class="btn btn-primary text-uppercase">Xem Tiếp</a>
                </div>
                <!-- Blog -->
                <!-- Blog -->
                <div class="col-3 text-center p-0 mb-5 box-blog">
                    <img src="./assets/img/Untitled-2-copy.jpg" alt="" class="img-fluid">
                    <a href="#" class="text-uppercase mt-3 fw-bold nav-link pb-3">ÁNH SÁNG XANH TÍM VÀ TRÒNG KÍNH LỌC ÁNH SÁNG XANH TÍM</a>
                    <span class="d-flex justify-content-center gap-2">
                        <p class="fw-normal">Ngày nay, chúng ta đang tiếp xúc với rất nhiều nguồn sáng khác nhau, từ nguồn sáng tự nhiên như</p>
                    </span>
                    <a href="#" class="btn btn-primary text-uppercase">Xem Tiếp</a>
                </div>
                <!-- Blog -->
                <!-- Blog -->
                <div class="col-3 text-center p-0 mb-5 box-blog">
                    <img src="./assets/img/asx1.jpg" alt="" class="img-fluid">
                    <a href="#" class="text-uppercase mt-3 fw-bold nav-link pb-3">ÁNH SÁNG XANH TÍM VÀ TRÒNG KÍNH LỌC ÁNH SÁNG XANH TÍM</a>
                    <span class="d-flex justify-content-center gap-2">
                        <p class="fw-normal">Ngày nay, chúng ta đang tiếp xúc với rất nhiều nguồn sáng khác nhau, từ nguồn sáng tự nhiên như</p>
                    </span>
                    <a href="#" class="btn btn-primary text-uppercase">Xem Tiếp</a>
                </div>
                <!-- Blog -->
                <!-- Blog -->
                <div class="col-3 text-center p-0 mb-5 box-blog">
                    <img src="./assets/img/dong-cua.png" alt="" class="img-fluid">
                    <a href="#" class="text-uppercase mt-3 fw-bold nav-link pb-3">ÁNH SÁNG XANH TÍM VÀ TRÒNG KÍNH LỌC ÁNH SÁNG XANH TÍM</a>
                    <span class="d-flex justify-content-center gap-2">
                        <p class="fw-normal">Ngày nay, chúng ta đang tiếp xúc với rất nhiều nguồn sáng khác nhau, từ nguồn sáng tự nhiên như</p>
                    </span>
                    <a href="#" class="btn btn-primary text-uppercase">Xem Tiếp</a>
                </div>
                <!-- Blog -->



            </div>
        </div>
    </section>


    <div class="" style="height: 300px;"></div>

    <?php include('public/layouts/scripts.php') ?>
    <?php include('public/layouts/footer.php') ?>
</body>

</html>